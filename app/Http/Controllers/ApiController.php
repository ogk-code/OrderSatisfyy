<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function search(Request $request, $searchData)
    {
        $foundData = ["orders" => [],
            "categories"=>[]];
        $foundData["orders"][] = DB::table("orders")->select("id", "name")->where("name", "like",
            "%" . $searchData . "%")->get()->toArray();
        $foundData["categories"][] = DB::table("сategories")->select("id", "name")->where("name", "like",
            "%" . $searchData . "%")->get()->toArray();
        return json_encode($foundData);
    }
}
