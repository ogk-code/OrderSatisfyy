<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\SubСategories;
use App\Models\Сategories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    function OrderListAction()
    {
        $orders = $this->getOrders();
        return view("order-list", ["orders" => $orders]);
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

    function MyOrdersAction()
    {
        $user = User::find(Auth::user()->id);
        if (!$user) {
            redirect("/");
        }
        $orders = $this->getOrders($user);

        return view("my-orders", ["orders" => $orders]);
    }


    private function getOrders($user = null)
    {
        $orders = DB::table("orders");


        if ($user) {

            $orders = $orders->where("user_id", '=', $user);
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
        $user = User::find(Auth::user()->id);

        // todo Если у пользователя нет прав на создания заказа редеректим на индекс
        if (!$user->hasRole("client")) {
            return redirect("/");
        }

        $order = new Orders();


        $order->name            = $request->title;
        $order->sub_category_id = $request->subcategory;
        $order->description     = $request->description;
        $order->adrss           = $request->adrss;
        $order->budget          = $request->price;
        $order->time            = $request->date . " " . $request->time . ":00";
        $order->user_id         = $user->id;
        $order->save();
        return redirect("/order-list");
    }

}
