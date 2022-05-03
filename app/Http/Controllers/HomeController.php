<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

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
        return view("order-list");
    }

    function UserProfileAction()
    {
        return view("user-profile");
    }
}
