<?php

namespace Database\Seeders;

use App\Models\Orders;
use App\Models\SubСategories;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $args = [
            "sub_category_id"=>1,
            "name"=>"name",
            "description"=>"description",
            "budget"=>1234.5,
            "adrss"=>"adrss"
        ];
        self::createOrder($args);
    }

    private static function createOrder($args){
        $order = new Orders();
        $order->sub_category_id = $args["sub_category_id"]; // id подкатегориии
        $order->user_id = 1;
        $order->name = $args["name"];
        $order->description = $args["description"];
        $order->time = "2002-12-31 07:57:00";
        $order->budget = $args["budget"];
        $order->adrss = $args["adrss"];
        $order->save();
    }
}
