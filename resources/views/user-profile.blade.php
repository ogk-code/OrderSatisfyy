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
</head>
<body>
@include("parts.header")
<div class="container hue">
    <h3>Профиль пользователя</h3>
    <div style="border: 1px solid red; border-radius: 0.25rem;" class="container">
        <table class="table">
            <div style="margin: 15px"></div>
            <tr>
                <th scope="row">Имя:</th>
                <td class="text-left">юра</td>
            </tr>
            <tr>
                <th scope="row">Фамилия:</th>
                <td class="text-left">юра</td>
            </tr>
            <tr>
                <th scope="row">Описание:</th>
                <td class="text-left">юра</td>
            </tr>
            <tr>
                <th scope="row">Email:</th>
                <td class="text-left">юра</td>
            </tr>
            <tr>
                <th scope="row">Телефон:</th>
                <td class="text-left">юра</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(0,0,0,.125);"></tr>
        </table>
    </div>
</div>
<br><br><br><br>
@include("parts.footer")
</body>
</html>
