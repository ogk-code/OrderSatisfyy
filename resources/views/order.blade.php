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
</head>
<body>
@include("parts.header")
<br><br><br><br>
<div class="container">
    <div class="text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/9551554301579156626-128.png" alt="" width="100" height="100">
        <h2>Название</h2>
        <h6>Создал пользователь <a href="{{env("APP_URL")."/users/".$user["id"]}}"> {{$user["name"]}}</a></h6>
    </div>
    <div class="row">
        <div class="col align-self-center">
            <form style="border: 1px solid red; border-radius: 0.25rem; padding: 15px" action="" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Категория заказа</label>
                        <div><b onclick="location.href='{{env("APP_URL")."/category/".$cats["category"]["id"]}}'">{{$cats["category"]["name"]}}</b></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Подкатегория заказа</label>
                        <div><b onclick="location.href='{{env("APP_URL")."/sub_category/".$cats["sub_category"]["id"]}}'">{{$cats["sub_category"]["name"]}}</b></div>

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
        </div>
    </div>
</div><br>
@include("parts.footer")
</body>
</html>
