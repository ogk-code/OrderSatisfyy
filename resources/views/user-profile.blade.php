<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

function getCatId($subCatId)
{
    return DB::table("subсategories")
        ->select("category_id")
        ->where("id", "=", $subCatId)->get()->first()->category_id;
}

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
    <title>Профиль пользователя</title>
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
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/user-profile.css">
    <style>
        .hue{
            margin: 10px;
        }
        .work{
            display: flex;
            flex-wrap:wrap;
            justify-content: center;
        }
        .work div{
            margin: 10px;
        }
    </style>
</head>
<body>
@include("parts.header")
<div class="container">
    <div class="title">
        <h3 class="hue">Профиль пользователя</h3>
        @if($id==Auth::user()->id)
        <a href="{{env("APP_URL")}}/edit-profile/{{$id}}">
            <button type="button" class="btn btn-danger title">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
            </button>
        </a>
        @endif
    </div>
    <div style="border: 1px solid red; border-radius: 0.25rem;" class="container">
        <table class="table">
            <div style="margin: 15px"></div>
            <tr>
                <th scope="row">Имя:</th>
                <td class="text-left">{{$profile->name}}</td>
            </tr>
            <tr>
                <th scope="row">Описание:</th>
                <td class="text-left">{{$profile->description}}</td>
            </tr>
            <tr>
                <th scope="row">Email:</th>
                <td class="text-left">{{$profile->email}}</td>
            </tr>
            <tr>
                <th scope="row">Телефон:</th>
                <td class="text-left">{{$profile->telephone}}</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(0,0,0,.125);"></tr>
        </table>
    </div>
    @if(count($works)!==0)
    <h3 class="hue">{{$role=="client"?"Мои заказы":"Мои работы"}}</h3>
    <div class="work">
        @foreach($works as $work)
        <div>
            <h5><a href="{{env("APP_URL")}}/order/{{$work["id"]}}" class="text-primary">{{$work["name"]}}</a></h5>
            <p class="text-sm">{{$work["description"]}}</p>
            <a href="{{env("APP_URL")}}/order-list?c={{getCatId($work["sub_category_id"])}}&sc={{$work["sub_category_id"]}}" class="text-black">#{{getCatName($work["sub_category_id"])}}#{{getSubCatName($work["sub_category_id"])}}</a>
        </div>
        @endforeach
    </div>
    @endif
</div>
<br><br>
@include("parts.footer")
</body>
</html>
