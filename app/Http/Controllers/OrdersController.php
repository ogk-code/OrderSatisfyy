<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\SubСategories;
use App\Models\User;
use App\Models\Сategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $user = User::find(Auth::user()->id);

        // todo Если у пользователя нет прав на создания заказа редеректим на индекс
        if (!$user->hasRole("client")) {
            return redirect("/");
        }

        $order = new Orders();


        $order->name            = $request->title;
        $order->sub_category_id = 1;
        $order->description     = $request->description;
        $order->adrss           = $request->adrss;
        $order->budget          = $request->price;
        $order->time            = $request->date . " " . $request->time . ":00";
        $order->user_id         = $user->id;
        $order->save();
        return redirect("/my-orders");

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Orders $orders
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Orders $orders, $id)
    {
        $order = Orders::find($id);
        if (!$order) {
            abort(404);
        }
        $order       = $order->toArray();
        $user        = User::find($order["user_id"])->toArray();
        $user        = [
            "name" => $user["name"],
            "id"   => $user["id"],
        ];
        $subCategory = SubСategories::find($order["sub_category_id"])->toArray();
        $cats        = [
            "sub_category" => $subCategory,
            "category"     => Сategories::find($subCategory["category_id"])->toArray(),
        ];

        return view("order", ["order" => $order, "user" => $user, "cats" => $cats]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Orders $orders
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Orders       $orders
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Orders $orders
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
