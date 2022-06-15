<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Редактирование профиля</title>
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
</head>
<body>
@include("parts.header")
<div class="container">
    <div class="title">
        <h3>Редактирование профиля</h3>
    </div>
    <form action="{{env("APP_URL")}}/save-userinfo" method="POST">
        @csrf
        <div style="border: 1px solid red; border-radius: 0.25rem;" class="container">
            <table class="table">
                <div style="margin: 15px"></div>
                <input type="hidden" name="id" value="{{$id}}">
                <tr>
                    <th scope="row"><div class="hue3">ФИО:</div></th>
                    <td class="text-left hue2">
                        <input value="{{$profile->name}}" name="name" type="text" class="form-control input-profile"
                               placeholder="ФИО" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><div class="hue3">Описание:</div></th>
                    <td class="text-left hue2">
                        <input value="{{$profile->description}}" name="description" type="text" class="form-control input-profile"
                               placeholder="Описание"  autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><div class="hue3">Email:</div></th>
                    <td class="text-left hue2">
                        <input value="{{$profile->email}}" name="email" type="email" class="form-control input-profile"
                               placeholder="Email" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><div class="hue3">Телефон:</div></th>
                    <td class="text-left hue2">
                        <input value="{{$profile->telephone}}" name="telephone" type="tel" class="form-control input-profile"
                               placeholder="Телефон"  autocomplete="off">
                    </td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(0,0,0,.125);"></tr>
            </table>
        </div>
        <br>
        <button type="submit" class="btn btn-danger">Сохранить</button>
    </form>
</div>
<br><br><br><br>
@include("parts.footer")
</body>
</html>
