<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Создание заказа</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="{{env("APP_URL")}}/assets/style/animate.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/bootstrap.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/bootstrap-icons.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/boxicons.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/glightbox.min.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/remixicon.css" rel="stylesheet">
    <link href="{{env("APP_URL")}}/assets/style/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/createOrder.css">
</head>
<body>
@include("parts.header")
<br><br><br>
<div class="container">
    <div class="py-4 text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/9551554301579156626-128.png" alt="" width="100" height="100">
        <h2>Форма создания заказа</h2>
    </div>

    <div class="row">
        <div class="col align-self-center">
            <h4 class="mb-3">Добавление заказа</h4>
            <form action="" method="post">    <hr class="order mb-4">
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

                <div class="mb-3">
                    <label>Название заказа</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><img src="{{env("APP_URL")}}/assets/img/12496875031638280183-128.png" width="30" height="30"></span>
                        </div>
                        <input name="title" type="text" class="form-control" placeholder="Например: Помыть посуду" required autocomplete="off">
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label>Детальное описание заказа</label>
                    <div class="md-form mb-4 pink-textarea active-red-textarea">
                        <textarea name="description" id="form18" class="md-textarea form-control" rows="3" required></textarea>
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="zip">Адресс</label>
                        <input name="address" type="text" class="form-control" id="zip" placeholder=" ул.Багрицкого 12Б" autocomplete="off" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label for="date">Конечный день выполнения</label>
                        <input name="date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-4 mb-3">
                        <label>Конечное время выполнения</label>
                        <input type="time" name="time" class="form-control mask-time" placeholder="12:00" required>
                    </div>
                </div>

                <div class="row">
                    <div class="input-group col-md-8 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Примерный бюджет</span>
                        </div>
                        <input name="price" type="number" class="form-control" autocomplete="off" aria-label="Amount (to the nearest dollar)" required>
                        <div class="input-group-append">
                            <span class="input-group-text">грн</span>
                        </div>
                    </div>
                </div>
                <hr class="order mb-4">
                <button class="btn btn-danger btn-lg btn-block" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Разместить заказ</button>

            </form>
        </div>
    </div>
</div><br>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@include("parts.footer")
</body>
</html>
