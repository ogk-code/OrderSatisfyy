<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Контакты</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/animate.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap-icons.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/boxicons.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/glightbox.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/remixicon.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/style.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/header.css">
</head>
<body>
@include("parts.header")
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs" style="margin-top: 0">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Связаться с нами</h2>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div>
                <iframe style="border: 0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.1194643047706!2d30.721901434537166!3d46.442751613602226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84076e15770b40d!2z0J7QtNC10YHRgdC60LjQuSDQutC-0LvQu9C10LTQtiDQutC-0LzQv9GM0Y7RgtC10YDQvdGL0YUg0YLQtdGF0L3QvtC70L7Qs9C40LkgwqvQodC10YDQstC10YDCuw!5e0!3m2!1sru!2snl!4v1647366273478!5m2!1sru!2snl" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Местоположение:</h4>
                            <p>ул. Барицкого, 12Б, Украина, Одесса 65005</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Почта:</h4>
                            <p>OrderSatisfy@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Телефон:</h4>
                            <p>+380 99 696 69 69</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    @if(session('sex'))
                        <h3 style="text-align: center;color: #1e7e34">Сообщение успешно отправлено</h3>
                    @endif
                    <form action="{{env("APP_URL")}}/feetback-email" method="POST" name="form">
                      @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ваше Имя" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Ваша электронная почта" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="coment" rows="5" placeholder="Комментарии..." required></textarea>
                        </div>
                        <div class="text-center"><input style="margin-top: 1rem; font-family: Open Sans, sans-serif; font-size: 16px;" class="inputEmail" type="submit" value="Отправить сообщение" ></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@include("parts.footer")
</body>
</html>
