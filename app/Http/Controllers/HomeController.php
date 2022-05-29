<?php

namespace App\Http\Controllers;

use App\Models\BanList;
use App\Models\Orders;
use App\Models\SubСategories;
use App\Models\Сategories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Json;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ConfirmAction(Request $request)
    {
        $data = $request->all();
        $user = User::find($data["user"]);
        $order = Orders::find($data["order"]);

        Mail::to($user->email)->send(new \App\Mail\OrderTakenMail(
            [
                "order" => $order,
                "user"  => $user,
            ]
        ));
        $order->executor_id  = $user->id;
        $order->status = 1;
        $order->save();
        return "Специалист принят";
    }

    public function RejectAction(Request $request)
    {
        $data = $request->all();
        $user = User::find($data["user"]);
        $order = Orders::find($data["order"]);
        $banList = new BanList();
        $banList->user_id = $user->id;
        $banList->order_id = $order->id;
        $banList->save();
        return "ну и хуй с ним другого найдем";
    }


    public function TakeOrderAction($id)
    {

        $order = Orders::find($id);

        if (!$order) {
            abort(404);
        }

        $owner = User::find($order->user_id);

        $user = User::find(Auth::user()->id);

        Mail::to($owner->email)->send(new \App\Mail\TakeOrderMail(
            [
                "order" => $order,
                "user"  => $user,
            ]
        ));

        return redirect()->back()->withCookie(cookie('order_' . $order->id, 'taken', 3600));
    }

    private function statusChangeEmailSend($toEmail, $order)
    {
        Mail::to($toEmail)->send(new \App\Mail\StatusMail(
            [
                "order" => $order,
            ]
        ));
        if ($order->executor_id) {
            $executor = User::find($order->executor_id);
            Mail::to($executor->email)->send(new \App\Mail\StatusMail(
                [
                    "order" => $order,
                ]
            ));
        }
    }

    function IndexAction()
    {
        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);

        return view("index", ["categories" => $categoriesArray]);
    }

    function LoginAction()
    {
        return view("auth/login");
    }

    function RegisterAction()
    {
        return view("auth/register");
    }

    function CreateOrderAction()
    {
        if (!Auth::check()) {
            redirect("/");
        }
        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);

        return view("create-order", ["c" => $categoriesArray]);
    }

    function OrderListAction(Request $request)
    {
        $filters = $request->all();

        $filters["c"]  = $filters["c"] ?? null;
        $filters["sc"] = $filters["sc"] ?? null;

        if ($filters["sc"] == "all") {
            $filters["sc"] = null;
        }

        if ($filters["c"] == "all") {
            $filters["c"] = null;
        }


        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);
        $orders          = $this->getOrders(null, $filters["c"], $filters["sc"]);
        return view("order-list", ["orders" => $orders, "c" => $categoriesArray]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function UserProfileAction(Request $request, $id)
    {
//        !$user->hasRole("client")
        $profile = User::find($id);
        if ($profile->hasRole("client")) {
            abort(404);
        }
        $profile = $profile->toArray();
        return view("user-profile", ["profile" => $profile]);


        return view("user-profile");
    }

    function OrderAction()
    {
        return view("order");
    }

    /**
     * @param string     $table
     * @param array|null $columns
     *
     * @return array
     */
    private function getTableToArray(string $table, array|null $columns): array
    {
        return DB::table($table)->select($columns)->get()->toArray();
    }

    private function getTableToArrayWhere(string $table, array|null $columns): array
    {
        return DB::table($table)->select($columns)->where("")->get()->toArray();
    }

    private function generateCategoriesArray($categories, $subCategories)
    {
        $categories = array_map(function ($value) {
            return ["id" => $value->id, "name" => $value->name, "subcats" => []];
        }, $categories);

        $subCategoriesArray = [];
        foreach ($subCategories as $subCategory) {
            $subCategoriesArray[$subCategory->category_id][] = ["id" => $subCategory->id, "name" => $subCategory->name];
        }

        foreach ($categories as $key => $category) {
            $categories[$key]["subcats"] = $subCategoriesArray[$category["id"]] ?? [];
        }

        return $categories;
    }

    function MyOrdersAction(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if (!$user) {
            redirect("/");
        }

        $filters = $request->all();

        $filters["c"]  = $filters["c"] ?? null;
        $filters["sc"] = $filters["sc"] ?? null;

        if ($filters["sc"] == "all") {
            $filters["sc"] = null;
        }

        if ($filters["c"] == "all") {
            $filters["c"] = null;
        }

        $orders = $this->getOrders($user, $filters["c"], $filters["sc"]);

        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);

        return view("my-orders", ["orders" => $orders, "c" => $categoriesArray]);
    }


    private function getOrders($user = null, $category = null, $subCategory = null)
    {
        $orders = DB::table("orders")->select([
            "orders.id",
            "orders.sub_category_id",
            "orders.name",
            "description",
            "adrss",
            "budget",
            "user_id",
            "time",
            "status",
            "edited",
        ]);

        if ($category) {
            $orders = $orders->join("subсategories", "sub_category_id", "=", "subсategories.id")
                ->where("subсategories.category_id", "=", $category);
        }

        if ($subCategory) {
            $orders = $orders->where("sub_category_id", "=", $subCategory);
        }


        if ($user) {

            $orders = $orders->where("user_id", '=', $user->id);
            $name   = DB::table("users")->select("name")->where("id", $user->id)->first()->name;

        }

        $orders = $orders->get()->toArray();


        foreach ($orders as $order) {
            // todo так делать нельзя !  Ставить запрос цикл это пздц, потом исправлю.
            $order->user = $user ? $name : DB::table("users")->select("name")->where("id", $order->user_id)->first()->name;
        }

        return $orders;
    }

    public function updateOrderAction(Request $request)
    {
        $id   = $request->post("id");
        $user = User::find(Auth::user()->id);

        if (!$id) {
            return redirect("/zahupa");
        }

        $order = Orders::find($id);

        // если каким то хуем так вышло, что заказ пытается удалить не его владелец
        if ($order->user_id != $user->id) {
            return redirect("/hui");
        }

        $order->name            = $request->title;
        $order->sub_category_id = $request->subcategory;
        $order->description     = $request->description;
        $order->adrss           = $request->adrss;
        $order->budget          = $request->price;
        $order->time            = $request->date . " " . $request->time;
        $order->edited          = true;

        $order->save();
        return redirect("/my-orders");
    }

    public function deleteOrder(Request $request)
    {
        $id   = $request->post("id");
        $user = User::find(Auth::user()->id);

        if (!$id) {
            return response("Не заебись, не удалил(", 403);
        }

        $order = Orders::find($id);

        // если каким то хуем так вышло, что заказ пытается удалить не его владелец
        if ($order->user_id != $user->id) {
            return response("Не заебись, не удалил(", 403);
        }

        Orders::destroy($id);
        return response("Заебись удалил", 200);
    }

    public function editOrderAction(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);

        $order = Orders::find($id);

        if (!$id) {
            return redirect("/");
        }
        if ($order->user_id != $user->id) {
            return redirect("/");
        }


        if (!Auth::check()) {
            redirect("/");
        }
        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);

        return view("edit-order", ["c" => $categoriesArray, "order" => $order]);
    }

    public function editOrderStatusAction(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $orderId     = $request->post("order_id");
        $statusValue = $request->post("status");

        $order         = Orders::find($orderId);
        $order->status = $statusValue;

        if ($order->user_id != $user->id) {
            return response("Не заебись, не обновил статус(", 405);
        }

        $order->save();

        $this->statusChangeEmailSend($user->email, $order);

        return response("Збс, обновил", 200);
    }


}
