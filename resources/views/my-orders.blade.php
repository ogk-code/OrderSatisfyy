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
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Категория заказа</label>
                    <select name="category" class="form-control" id="category" required>
                        <option value="nonen" selected>Выбрать категорию...</option>
                        <option value="Бытовыеуслуги">Бытовые услуги</option>
                        <option value="Бюропереводов">Бюро переводов</option>
                        <option value="Деловыеуслуги">Деловые услуги</option>
                        <option value="Дизайн">Дизайн</option>
                        <option value="Домашниймастер">Домашний мастер</option>
                        <option value="Клининговыеуслуги">Клининговые услуги</option>
                        <option value="Курьерскиеуслуги">Курьерские услуги</option>
                        <option value="Логистическиеискладскиеуслуги">Логистические и складские услуги</option>
                        <option value="Мебельныеработы">Мебельные работы</option>
                        <option value="Организацияпраздников">Организация праздников</option>
                        <option value="Отделочныеработы">Отделочные работы</option>
                        <option value="Работавинтернете">Работа в интернете</option>
                        <option value="Разработкасайтов">Разработка сайтов</option>
                        <option value="Рекламаимаркетинг">Реклама и маркетинг</option>
                        <option value="Ремонтавто">Ремонт авто</option>
                        <option value="Ремонттехники">Ремонт техники</option>
                        <option value="Строительныеработы">Строительные работы</option>
                        <option value="Услугидляживотных">Услуги для животных</option>
                        <option value="Услугикрасотыиздоровья">Услуги красоты и здоровья</option>
                        <option value="Услугирепетиторов">Услуги репетиторов</option>
                        <option value="Услугитренеров">Услуги тренеров</option>
                        <option value="Фотоивидеоуслуги">Фото- и видео- услуги</option>
                    </select>
                    <div class="invalid-feedback">
                        Выберите нужную категорию заказа.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Подкатегория заказа</label>
                    <select name="subcategory" class="form-control" id="subcategory" required>
                        <option value="nonen" selected>Выбрать подкатегорию...</option>
                        <option value="Бытовыеуслуги">Бытовые услуги</option>
                    </select>
                    <div class="invalid-feedback">
                        Выберите нужную подкатегорию заказа.
                    </div>
                </div>
            </div>

            {{--@foreach($orders as $order)--}}
            <div
                class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
                <div class="row align-items-center">
                    <div class="col-md-7 mb-3 mb-sm-0">
                        <h5>
                            <a href="{{--{{env("APP_URL")."/orders/".$order->id}}--}}"
                               class="text-primary">{{--{{$order->name}}--}}</a>
                        </h5>
                        <p class="text-sm">{{--{{$order->description}}--}}<span class="op-6"></span></p>
                        <div class="text-sm op-5"><a class="text-black mr-2" href="#">#Темы заказов для обсуждения</a>
                            <a href="">Удалить</a>
                        </div>
                    </div>


                    <div class="col-md-5 op-7">
                        <div class="row text-center op-7">
                            <div class="col px-2"><span class="d-block text-sm">status</span></div>
                            <div class="col px-2"><i class="ion-ios-chatboxes-outline icon-1x"></i> <span
                                    class="d-block text-sm">Ответы</span></div>
                            <div class="col px-2"><i class="ion-ios-compose-outline icon-1x"></i> <span
                                    class="d-block text-sm"><a href="">Изменить</a></span></div>
                        </div>
                    </div>
                </div>


                <hr style="color:red">

            </div>
            {{--@endforeach--}}

        </div>


    </div>
</div>
@include("parts.footer")
</body>
</html>
