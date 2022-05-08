<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>О нас</title>
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
<br><br><br>
<div class="container">
    <hr>
    <div class="py-3 text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/Screenshot_6.png" alt="" width="1140" height="663">
    </div>
    <hr>
    <div class="row">
        <div class="col"><h2 class="heading"></h2>
            <ul>
                <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/Screenshot_9.jpg" alt="" width="300" height="200">
            </ul>
        </div>
        <div class="col"><h2 class="heading">Что мы делаем?</h2>
            <ul>
                <li><i class="ri-check-double-line"></i>Удобная площадка,
                    где каждый в краткий срок может найти исполнителя для заданий, которые не может или не желает
                    выполнять сами.
                    Таким образом, с одной стороны сервис освобождает каждого человека от ненужных хлопот, а с другой -
                    дает другим людям возможность заработать.
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col"><h2 class="heading">Как мы делаем?</h2>
            <ul>
                <li><i class="ri-check-double-line"></i>Для создания этого проекта было использовано самые последние
                    технологии в сфере Интернета.
                    Поэтому Вы имеете возможность выбирать задания поблизости благодаря интерактивной карте, проверять
                    изменения статусов заданий с помощью мобильных устройств.
                </li>
            </ul>
        </div>
        <div class="col"><h2 class="heading"></h2>
            <ul>
                <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/Screenshot_8.png" alt="" width="222" height="222">
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col"><h2 class="heading"></h2>
            <ul>
                <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/Screenshot_8.jpg" alt="" width="419" height="203">
            </ul>
        </div>
        <div class="col"><h2 class="heading">Зачем мы это делаем?</h2>
            <ul>
                <li><i class="ri-check-double-line"></i>Ответ простой - мы сами нуждаемся в таком сервисе и регулярно им
                    пользуемся. Мы постоянно развиваем этот проект для того,
                    чтобы он всегда был надежным партнером как для простых людей, так и для бизнеса. Наша главная цель -
                    помочь Вам быстро и удобно найти работника для любой задачи.
                </li>
            </ul>
        </div>
    </div>
    <hr>
</div>
@include("parts.footer")
</body>
</html>
