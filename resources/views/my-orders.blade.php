<?php
use Illuminate\Support\Facades\DB;$status = [
    0 => "Ждёт выполнения",
    1 => "В процессе",
    2 => "Выполнен",
    3 => "Просрочен"
];

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
    <title>Мои заказы</title>
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/order-list.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/animate.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap-icons.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/boxicons.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/glightbox.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/remixicon.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/index.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/header.css">
</head>
<body>
@include("parts.header")
<div class="container">
    <div class="row">
        <div class="col-md-3 mb-3">
            <label>Категория заказа</label>
            <select name="category" class="form-control categories" id="category" required>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label>Подкатегория заказа</label>
            <select name="subcategory" class="form-control categories" id="subcategory" required>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label>Статус заказа</label>
            <select name="status-filter" class="form-control" id="status-filter" required>
                <option value="all">Все</option>
                <option value="0">Ждёт выполнения</option>
                <option value="1">В процессе</option>
                <option value="2">Выполнен</option>
                <option value="3">Просрочен</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label>Сортировка</label>
            <select name="sort" class="form-control" id="sort" required>
                <option value="date">По дате</option>
                <option value="status">По статусу</option>
            </select>
        </div>
    </div>

    @foreach($orders as $order)
        <div
            class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row">
                <div class="col-md-6 mb-3 mb-sm-0">
                    <h5>
                        <a href="{{env("APP_URL")."/order/".$order->id}}"
                           class="text-primary">{{$order->name}}</a>
                    </h5>
                    <p class="text-sm">{{$order->description}}<span class="op-6"></span></p>
                    <div class="text-sm op-5">
                        <a class="text-black mr-2"
                           href="/my-orders?c={{getCatId($order->sub_category_id)}}&sc={{$order->sub_category_id}}">#{{getCatName($order->sub_category_id)}}#{{getSubCatName($order->sub_category_id)}}</a>
                    </div>
                </div>


                <div class="col-md-6 op-7">
                    <div class="row text-center op-7">
                        <div class="col-7">
                            <label>Статус</label>
                            <select data-id="{{$order->id}}" name="status" class="form-control status" required>
                                <option value="" selected disabled hidden>{{$status[$order->status]}}</option>
                                <option value="0">Ждёт выполнения</option>
                                <option value="1">В процессе</option>
                                <option value="2">Выполнен</option>
                                <option value="3">Просрочен</option>
                            </select>
                        </div>
                        <!--                            <div class="col px-2"><i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                                            class="d-block text-sm">Ответы</span></div>-->
                        <div class="col px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                            <span class="d-block text-sm"><a href="/edit-order/{{$order->id}}">Изменить</a></span>
                        </div>
                        <div class="col px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd"
                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            <span data-id="{{$order->id}}" style="color: #d9232d; cursor: pointer"
                                  class="d-block text-sm delete">
                                        Удалить
                                    </span>
                        </div>
                    </div>
                </div>
            </div>


            <hr style="color:red">

        </div>
    @endforeach
</div>
@include("parts.footer")
<script src="{{env("APP_URL")}}/assets/js/categories-get.js"></script>
<script>fillingCategories('<?php echo json_encode($c); ?>');</script>
<script src="{{env("APP_URL")}}/assets/js/my-orders.js"></script>
</body>
</html>
