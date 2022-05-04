<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view("create-order");
    }

    function OrderListAction()
    {
        $orders =  DB::table("orders")->get()->toArray();


        foreach ($orders as $order){
            // todo так делать нельзя !  Ставить запрос цикл это пздц, потом исправлю.
            $order->user = DB::table("users")->select("id","name")->where("id", $order->user_id)->first()->name;
        }

        return view("order-list",["orders"=>$orders]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
