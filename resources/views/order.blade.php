<?php

use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

$email = User::find($order['user_id'])->email;
$status = [
    0 => "Ждёт выполнения",
    1 => "В процессе",
    2 => "Выполнен",
    3 => "Просрочен"
];

function getExecutorName($executorId){
    return DB::table("users")->where("id","=",$executorId)->get()->first()->name;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Заказ</title>
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
        #changed{
            color: grey;
            font-style: italic;
            font-size: 14px;
        }
    </style>
</head>
<body>
@include("parts.header")
<div class="container">
    <div class="text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/9551554301579156626-128.png" alt="" width="100" height="100">
        <h2>{{$order["name"]}} ({{$status[$order["status"]]}})</h2>
        <h6>Создал пользователь <a href="{{env("APP_URL")}}/user-profile/{{$user["id"]}}">{{$user["name"]}}</a>
            @if($order["edited"])
            <span id="changed">(Заказ был изменен)</span>
            @endif
        </h6>
    </div>
    <div class="row">
        <div class="col align-self-center">
            <form style="border: 1px solid red; border-radius: 0.25rem; padding: 15px" action="" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Категория заказа</label>
                        <div><b>{{$cats["category"]["name"]}}</b></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Подкатегория заказа</label>
                        <div><b>{{$cats["sub_category"]["name"]}}</b></div>

                    </div>
                </div>

                <div class="mb-3">
                    <label>Детальное описание заказа</label>
                    <div class="md-form mb-4 pink-textarea active-red-textarea">
                        {{$order["description"]}}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Адресс</label>
                        <div>
                            {{$order["adrss"]}}

                        </div>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label>Обьявление создано</label>
                        <div>
                            {{ date('Y-m-d H:i:s', strtotime($order["created_at"]))}}

                        </div>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label>Конечное время выполнения</label>
                        <div>
                            {{$order["time"]}}
                        </div>
                    </div>
                </div>
                <div>
                    <h4 style='margin: 0;font-family: "Open Sans", sans-serif;'>Бюджет: {{$order["budget"]}} грн.</h4>
                </div>
            </form>
            <br>
            @role('staff')
            @if(!$order["executor_id"])
                @if(!Cookie::get("order_".$order["id"]))
                <a href="{{env("APP_URL")}}/take-order/{{$order["id"]}}">
                    <button style="width: 100%" type="button" class="btn btn-danger">Взять заказ</button>
                </a>
                @else
                    <h4> Ваша кандидатура на расмотренни заказчиком </h4>
                @endif
            @endif
            @endrole
            @if($order["executor_id"])
                <h4>Заказ в исполнении специалистом
                    <a href="{{env("APP_URL")}}/user-profile/{{$order["executor_id"]}}">{{getExecutorName($order["executor_id"])}}</a></h4>
            @endif
        </div>
    </div>
</div>
<section style="padding-top: 0" id="testimonials" class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    @csrf
                    <div class="typeahead__container">
                        <div class="typeahead__field">
                            <div class="typeahead__query">
                                <input name="" placeholder="Комментарий по заказу">
                            </div>
                            <div class="typeahead__button">
                                <button type="submit">
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                    <h3>имя</h3>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-item mt-4">
                    <h3>имя</h3>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@include("parts.footer")
</body>
</html>
