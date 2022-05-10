<?php

namespace App\Http\Controllers;

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
        return view("index");
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
        $c = [
            0 => [
                "name"    => "Категория 1",
                "id"      => 1,
                "subcats" => [
                    0 => [
                        "name" => "Подкатегория 1 (кат1)",
                        "id"   => 1,
                    ],
                    1 => [
                        "name" => "Подкатегория 2 (кат1)",
                        "id"   => 2,
                    ],
                    2 => [
                        "name" => "Подкатегория 3 (кат1)",
                        "id"   => 3,
                    ],
                ],

            ],

            1 => [
                "name"    => "Категория 2",
                "id"      => 2,
                "subcats" => [
                    0 => [
                        "name" => "Подкатегория 1 (кат 2)",
                        "id"   => 3,
                    ],
                    1 => [
                        "name" => "Подкатегория 2 (кат 2)",
                        "id"   => 4,
                    ],
                ],
            ],
        ];
        return view("create-order", ["c"=>$c]);
    }

    function OrderListAction()
    {
        $orders = DB::table("orders")->get()->toArray();


        foreach ($orders as $order) {
            // todo так делать нельзя !  Ставить запрос цикл это пздц, потом исправлю.
            $order->user = DB::table("users")->select("id", "name")->where("id", $order->user_id)->first()->name;
        }

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
       if ($profile->hasRole("client")){
           abort(404);
       }
        $profile = $profile->toArray();
       return view("user-profile",["profile"=>$profile]);


        return view("user-profile");
    }

    function OrderAction()
    {
        return view("order");
    }
}
