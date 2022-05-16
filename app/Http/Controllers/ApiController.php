<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function search(Request $request)
    {
        $searchData = $request->post("search_data");
        $foundData  = DB::table("orders")->select("id", "name")->where("name", "like",
            "%" . $searchData . "%");
        return json_encode($foundData);
    }
}
