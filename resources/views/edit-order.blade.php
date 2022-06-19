<?php
use Illuminate\Support\Facades\DB;$dateTime = explode(" ", $order->time);
$date = $dateTime[0];
$time = $dateTime[1];

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
    <title>Редактирование заказа</title>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{env("APP_URL")}}/assets/style/animate.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/bootstrap.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/bootstrap-icons.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/boxicons.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/glightbox.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/remixicon.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/createOrder.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/header.css">
</head>
<body>
@include("parts.header")
<div class="container">
    <div class="py-4 text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/9551554301579156626-128.png" alt=""
             width="100" height="100">
        <h2>Форма редактирования заказа</h2>
    </div>

    <div class="row">
        <div class="col align-self-center">
            <form action="/update-order" method="post">
                <hr class="order mb-4">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Категория заказа</label>
                        <select name="category" class="form-control" id="category" required>
                        </select>
                        <div class="invalid-feedback">
                            Выберите нужную категорию заказа.
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{$order->id}}">
                    <div class="col-md-6 mb-3">
                        <label>Подкатегория заказа</label>
                        <select name="subcategory" class="form-control" id="subcategory" required>
                        </select>
                        <div class="invalid-feedback">
                            Выберите нужную подкатегорию заказа.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Название заказа</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img
                                    src="{{env("APP_URL")}}/assets/img/12496875031638280183-128.png" width="30"
                                    height="30"></span>
                        </div>
                        <input value="{{$order->name}}" name="title" type="text" class="form-control"
                               placeholder="Например: Помыть посуду" required autocomplete="off">
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Детальное описание заказа</label>
                    <div class="md-form mb-4 pink-textarea active-red-textarea">
                        <textarea name="description" id="form18" class="md-textarea form-control" rows="3"
                                  required>{{$order->description}}</textarea>
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="zip">Адресс</label>
                        <input value="{{$order->adrss}}" name="adrss" type="text" class="form-control" id="zip"
                               placeholder=" ул.Багрицкого 12Б" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="date">Конечный день выполнения</label>
                        <input value="{{$date}}" name="date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label>Конечное время выполнения</label>
                        <input value="{{$time}}" type="time" name="time" class="form-control mask-time"
                               placeholder="12:00" required>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col-md-8 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Цена</span>
                        </div>
                        <input value="{{$order->budget}}" name="price" type="number" class="form-control"
                               autocomplete="off" aria-label="Amount (to the nearest dollar)" required>
                        <div class="input-group-append">
                            <span class="input-group-text">грн</span>
                        </div>
                    </div>
                </div>
                <hr class="order mb-4">
                <button class="btn btn-danger btn-lg btn-block" type="submit" data-toggle="modal"
                        data-target="#exampleModalCenter">Сохранить
                </button>

            </form>
        </div>
    </div>
</div>
<br>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
@include("parts.footer")
<script src="{{env("APP_URL")}}/assets/js/categories.js"></script>
<script>fillingCategories('<?php echo json_encode($c); ?>',{{getCatId($order->sub_category_id)}},{{$order->sub_category_id}});</script>
</body>
</html>
