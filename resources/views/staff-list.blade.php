<?php
use Illuminate\Support\Facades\DB;

function getCatName($subCatId)
{
    $id = DB::table("subсategories")
        ->select("category_id")
        ->where("id", "=", $subCatId)->get()->first()->category_id;
    return DB::table("сategories")->select("name")->where("id", "=", $id)->get()->first()->name;
}

function getSubCatName($subCatId)
{
    return DB::table("subсategories")
        ->select("name")
        ->where("id", "=", $subCatId)->get()->first()->name;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Список специалистов</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/animate.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap-icons.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/boxicons.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/glightbox.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/remixicon.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/index.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/header.css">
    <style>
        .work{
            display: flex;
           /* flex-wrap:wrap;
            justify-content: center;*/
        }
        .work div{
            margin: 10px;
        }
    </style>
</head>
<body>
@include("parts.header")
<div class="container">
    @foreach($profile as $p)
    <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
        <div class="row align-items-center">
            <div class="col-md-5">
                <h5>
                    <a href="{{env("APP_URL")}}/user-profile/{{$p["id"]}}" class="text-primary">{{$p["name"]}}</a>
                </h5>
                <p class="text-sm">{{$p["description"]}}<span class="op-6"></span></p>
            </div>
            <div class="col-md-7 work">
                @foreach($p["works"] as $work)
                <div>
                    <h5><a href="{{env("APP_URL")}}/order/{{$work["id"]}}" class="text-primary">{{$work["name"]}}</a></h5>
                    <p class="text-black">#{{getCatName($work["sub_category_id"])}}#{{getSubCatName($work["sub_category_id"])}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <hr style="color:red">
    </div>
    @endforeach
</div>
@include("parts.footer")
</body>
</html>
