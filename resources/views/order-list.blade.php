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
    <title>Список заказов</title>
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
        <div class="col-md-4 mb-3">
            <label>Категория заказа</label>
            <select name="category" class="form-control categories" id="category" required>
            </select>
            <div class="invalid-feedback">
                Выберите нужную категорию заказа.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label>Подкатегория заказа</label>
            <select name="subcategory" class="form-control categories" id="subcategory" required>
            </select>
            <div class="invalid-feedback">
                Выберите нужную подкатегорию заказа.
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label>Сортировка</label>
            <select name="sort" class="form-control" id="sort" required>
                <option value="date">По дате</option>
                <option value="status">По статусу</option>
            </select>
            <div class="invalid-feedback">
                Выберите нужную подкатегорию заказа.
            </div>
        </div>
    </div>

    <!--End of post 1 -->
    @foreach($orders as $order)
        <div
            class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
                <div class="col-md-7 mb-3 mb-sm-0">
                    <h5>
                        <a href="{{env("APP_URL")."/order/".$order->id}}" class="text-primary">{{$order->name}}</a>
                    </h5>
                    <p class="text-sm">{{$order->description}}<span class="op-6"></span></p>
                    <div class="text-sm op-5">
                        <a class="text-black mr-2"
                           href="/order-list?c={{getCatId($order->sub_category_id)}}&sc={{$order->sub_category_id}}">#{{getCatName($order->sub_category_id)}}
                            #{{getSubCatName($order->sub_category_id)}}</a>
                    </div>
                </div>


                <div class="col-md-5 op-7">
                    <div class="row text-center op-7">
                        <div class="col px-2"><span class="d-block text-sm">{{$status[$order->status]}}</span></div>
                        <div class="col px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd"
                                      d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                            <span class="d-block text-sm">{{$order->user}}</span></div>
                        <!--                            <div class="col px-2"><i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                                            class="d-block text-sm">Ответы</span></div>-->
                    </div>
                </div>
            </div>


            <hr style="color:red">

        </div>
    @endforeach
    <!-- /End of post 1 -->
</div>
@include("parts.footer")
<script src="{{env("APP_URL")}}/assets/js/categories-get.js"></script>
<script>fillingCategories('<?php echo json_encode($c); ?>');</script>
</body>
</html>
