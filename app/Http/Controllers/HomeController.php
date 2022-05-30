<?php

namespace App\Http\Controllers;

use App\Models\BanList;
use App\Models\Orders;
use App\Models\SubСategories;
use App\Models\Сategories;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Object_;
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

    public function FeetBackEmailAction(Request $request)
    {
        $emailTo = env("ADMIN_EMAIL");
        Mail::to($emailTo)->send(new \App\Mail\FeetBack(
            [
                "email"  => $request->post("email"),
                "name"   => $request->post("name"),
                "coment" => $request->post("coment"),
            ]
        ));
        return redirect()->back()->with("sex", "Отправленно");
    }

    public function ConfirmAction(Request $request)
    {
        $data  = $request->all();
        $user  = User::find($data["user"]);
        $order = Orders::find($data["order"]);

        Mail::to($user->email)->send(new \App\Mail\OrderTakenMail(
            [
                "order" => $order,
                "user"  => $user,
            ]
        ));
        $order->executor_id = $user->id;
        $order->status      = 1;
        $order->save();
        return view("order-taken-result.confirm");
    }

    public function RejectAction(Request $request)
    {
        $data               = $request->all();
        $user               = User::find($data["user"]);
        $order              = Orders::find($data["order"]);
        $order->executor_id = null;
        $banList            = new BanList();
        $banList->user_id   = $user->id;
        $banList->order_id  = $order->id;
        $banList->save();
        return view("order-taken-result.reject");

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

        $filters["c"]      = $filters["c"] ?? null;
        $filters["sc"]     = $filters["sc"] ?? null;
        $filters["status"] = $filters["status"] ?? null;
        $filters["sort"]   = $filters["sort"] ?? null;

        if ($filters["sc"] == "all") {
            $filters["sc"] = null;
        }

        if ($filters["c"] == "all") {
            $filters["c"] = null;
        }

        if ($filters["status"] == "all") {
            $filters["status"] = null;
        }

        if ($filters["sort"] == "date") {
            $filters["sort"] = "created_at";
        }


        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);
        $orders          = $this->getOrders(null, $filters["c"], $filters["sc"], $filters["status"], $filters["sort"]);
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
//        $profile = User::find($id);
//        if ($profile->hasRole("client")) {
//            abort(404);
//        }

        $profile = DB::table("users")->select("name", "email", "description", "telephone")
            ->join("user_info", "users.id", "=", "user_id")->where("users.id", "=", $id)
            ->get()->first();

        $profile = $profile ?? User::find($id);

        if ($profile instanceof User)
            $profile = (object)[
                "name"        => $profile->name,
                "email"       => $profile->email,
                "description" => "",
                "telephone"   => "",
            ];

        $user = User::find($id);

        $searchTarget = $user->hasRole("client") ? "user_id" : "executor_id";

        $works = Orders::where($searchTarget, $user->id)->get()->toArray();

        return view("user-profile", ["profile" => $profile, "id" => $id, "works"=>$works]);

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

        $filters["c"]      = $filters["c"] ?? null;
        $filters["sc"]     = $filters["sc"] ?? null;
        $filters["status"] = $filters["status"] ?? null;
        $filters["sort"]   = $filters["sort"] ?? null;

        if ($filters["sc"] == "all") {
            $filters["sc"] = null;
        }

        if ($filters["c"] == "all") {
            $filters["c"] = null;
        }

        if ($filters["status"] == "all") {
            $filters["status"] = null;
        }

        if ($filters["sort"] == "date") {
            $filters["sort"] = "created_at";
        }

        $orders = $this->getOrders($user, $filters["c"], $filters["sc"], $filters["status"], $filters["sort"]);

        $categories    = $this->getTableToArray("сategories", ["id", "name"]);
        $subCategories = $this->getTableToArray("subсategories", ["id", "name", "category_id"]);

        $categoriesArray = $this->generateCategoriesArray($categories, $subCategories);

        return view("my-orders", ["orders" => $orders, "c" => $categoriesArray]);
    }


    private function getOrders($user = null, $category = null, $subCategory = null, $status = null, $sort = null)
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
            "orders.created_at",
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

        if ($status !== null) {
            $orders = $orders->where("status", '=', $status);
        }

        if ($sort) {
            $orders = $orders->orderBy("orders.$sort", 'desc');
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

    public function saveUserInfo(Request $request)
    {

        $userId = $request->post("id");

        $user = User::find($userId);

        $user->name  = $request->post("name");
        $user->email = $request->post("email");

        $userInfo = UserInfo::where('user_id', $userId)->first();
        if (!$userInfo) {
            $userInfo = new UserInfo();
        }

        $userInfo->user_id     = $userId;
        $userInfo->description = $request->post("description");
        $userInfo->telephone   = $request->post("telephone");

        $userInfo->save();

        return redirect(env("APP_URL") . "/user-profile/$userId");
    }

    public function editProfileAction($id)
    {
        $profile = DB::table("users")->select("name", "email", "description", "telephone")
            ->join("user_info", "users.id", "=", "user_id")->where("users.id", "=", $id)
            ->get()->first();

        $profile = $profile ?? User::find($id);

        if ($profile instanceof User)
            $profile = (object)[
                "name"        => $profile->name,
                "email"       => $profile->email,
                "description" => "",
                "telephone"   => "",
            ];

        return view("edit-profile", ["profile" => $profile, "id" => $id]);
    }

    public function staffGlistAction()
    {
        $staffs_ids = DB::table("users_roles")->select("user_id")
            ->where('role_id', "=", "2")->get()->toArray();

        $staffs_ids = array_map(function ($element) {
            return $element->user_id;
        }, $staffs_ids);

        $users   = DB::table("users")->whereIn("id", $staffs_ids)->get()->toArray();
        $profile = [];

        foreach ($users as $key => $user) {
            $userInfo                     = UserInfo::find($user->id);
            $profile[$key]['name']        = $user->name;
            $profile[$key]['id']          = $user->id;
            $profile[$key]['description'] = $userInfo ? $userInfo->description : "";

            $works = Orders::where("executor_id", $user->id)->get()->toArray();

            $works = count($works) > 3 ? array_slice($works, 0, -3) : $works;

            $profile[$key]['works'] = $works;
        }

        return view("staff-list", ["profile" => $profile]);

    }

}
