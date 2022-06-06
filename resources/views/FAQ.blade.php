<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>FAQ</title>
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
<div class="container">
    <div class="py-4 text-center">
        <img class="d-block mx-auto mb-4" src="{{env("APP_URL")}}/assets/img/icons8.png" alt="" width="100" height="100">
        <h2>FAQ: часто задаваемые вопросы</h2>
    </div>
    <h3><small>&nbsp;&nbsp;&nbsp;&nbsp;Для заказчиков</small></h3>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-danger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Как зарегистрироваться заказчику?
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Регистрация заказчиков осуществляется при нажатии на кнопку создания заказа на первой странице сайта. Для не авторизованных пользователей (при использовании сайта впервые) нужно будет зарегистрироваться на сайте путем заполнения блока контактных данных:<br><br>
                    <p style="text-align: center;"><img style="border:3px solid red" src="{{env("APP_URL")}}/assets/img/Screenshot_2.png" width="1000"></p>
                    В этом блоке необходимо указать ваше имя, адрес электронной почты, номер телефона. После выполнения этих действий ваш заказ будет опубликовано, а вы - зарегистрируетесь на сайте в качестве заказчика.
                    Для регистрации на сайте и публикации заказа необходимо заполнить все поля. Указание номера телефона и электронной почты - обязательное условие.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Какие заказы нельзя размещать на сайте?
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    На Order/Satisfy.ua запрещено размещать задания такого плана:<br>
                    &mdash; <b>Нарушающие законодательство.</b>
                    Сервис выступает за соблюдение законодательства и ждем того же от наших заказчиков и исполнителей.<br>
                    &mdash; <b>Содержат услуги интимного характера.</b>
                    На этот сервисе много разнообразных категорий, но в них не представлены подобные услуги. Для них существуют другие ресурсы.<br>
                    &mdash; <b>Содержат в себе финансовые пирамиды и схемы.</b>
                    Нельзя создавать задания, которые требуют от исполнителя вложений и являются частью мошеннических схем.<br>
                    &mdash; <b>Направлены на покупку баз пользователей или рассылку информации по чужим базам.</b>
                    Данные пользователей — конфиденциальная информация, поэтому такие действия являются неправомерными.<br>
                    &mdash; <b>Рекламируют и продвигают товары.</b>
                    Order/Satisfy.ua не является доской объявлений, поэтому такие задания запрещены и будут удаляться. Если вы исполнитель на нашем сервисе — вы можете рекламировать свои услуги, благодаря объявлениям. Узнать о них детальнее, вы можете тут.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Как выбрать категорию услуг для заказа?
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Чтобы подобрать наиболее подходящую категорию для вашего заказа, вы можете предварительно ознакомиться с доступными на сервисе категориями услуг, использовав кнопку перехода на нужную часть сайта.
                    <p style="text-align: center;"><img style="border:3px solid red" src="{{env("APP_URL")}}/assets/img/Screenshot_1.png" width="1000"></p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Как заказать услугу?
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    На Order/Satisfy.ua найдутся мастера для любого вида работы. Для заказа услуги и получения контактов специалистов необходимо создать заказ на сайте. Наши специалисты подпишутся на заявку и предложат свои услуги по почте.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Что означают статусы заказов?
                    </button>
                </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    Текущий статус отображается слева от создателя заказа:
                    <p style="text-align: center;"><img style="border:3px solid red" src="{{env("APP_URL")}}/assets/img/Screenshot_3.png" align="center" width="855" height="182" border="3px solid red"></p>
                    <p><ins>Всего на сервисе есть 9 статусов:</ins></p><br>
                    <b>Ожидает специалиста.</b> К заказу можно добавлять предложения, специалист еще не выбран.<br>
                    <b>В процессе.</b> Заказ уже выполняется специалистом.<br>
                    <b>Выполнено.</b> Специалист отметил, что выполнил заказ, но заказчик это ещё не подтвердил.<br>
                    <b>Просрочено.</b> В этот статус переходят задания, которые в течение суток после наступления конечной даты выполнения находились в статусе "Ожидает специалиста".
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <h3><small>&nbsp;&nbsp;&nbsp;&nbsp;Для специалистов</small></h3>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        Как зарегистрироваться специалисту?
                    </button>
                </h5>
            </div>
            <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    Для регистрации на сервисе в качестве специалиста, необходимо нажать кнопку "Стать специалистом" и перейти на страницу регистрации.
                    <p style="text-align: center;"><img style="border:3px solid red" src="{{env("APP_URL")}}/assets/img/Screenshot_4.png" align="center" width="370" height="601" border="3px solid red"></p>
                    После успешного ввода, вы будете зарегистрированы на сервисе в качестве специалиста, но для выполнения заказов потребуется пройти ещё 2 этапа регистрации:<br>
                    &mdash; выбор категорий работ;<br>
                    &mdash; заполнение анкеты с личными данными.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Какие заказы не стоит брать?
                    </button>
                </h5>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                    Подобран список наиболее частых мошеннических схем. Если вы столкнулись с подобными заданиями, не берите их в работу, а жалуйтесь модераторам с помощью кнопки “Пожаловаться на задание”.<br>
                    &mdash; <b>За свои деньги специалисту надо наперед что-то купить или пополнить счет.</b><br>
                    &mdash; <b>Регистрация карты в банке.</b> Когда в заказе вас просят пойти в банк, оформить кредитную карту и передать ее заказчику.<br>
                    &mdash; <b>Заказы со страховой суммой.</b>  Ситуация, в которой заказчик просит у вас страховую сумму и объясняет тем, что ему нужны гарантии и вы не пропадете.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingNine">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Как добавить объявление о своих услугах в профиле?
                    </button>
                </h5>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                <div class="card-body">
                    Цель объявлений - дополнительный бесплатный способ рекламы своих услуг, с помощью которого заказчики на страницах категорий могут предложить вам задание. Также это удобный способ знакомить заказчиков с прайсом своих услуг. Объявление является мощным инструментом рекламы при качественно описанных услугах в описании.<br>
                    Для управления объявлениями о своих услугах необходимо навестись на кнопку профиля и нажать на блок "Мои объявления":<br><br>
                    <p style="text-align: center;"><img style="border:3px solid red" src="{{env("APP_URL")}}/assets/img/Screenshot_5.png" width="1000" ></p><br>
                    После этого вы попадете на страницу ваших объявлений (если их еще нет - на страницу добавления нового).<br>
                    &mdash; Вверху страницы - кнопка "Добавить объявление".<br>
                    &mdash; Ниже список объявлений, который можно отсортировать по категориям.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTen">
                <h5 class="mb-0">
                    <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Почему мое объявление не может пройти модерацию?
                    </button>
                </h5>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                <div class="card-body">
                    Ваше объявление является дополнительным способом рекламы профильных услуг специалиста, поэтому должно содержать полезную, привлекательную и понятную информацию для заказчика. Если ваше объявление отправлено на доработку модератором, оно не достаточно эффективно. Обратите внимание на рекомендации к нему и сможете отправить объявление повторно исправленным.<br><br>
                    <i>Удаление объявления</i> может произойти по нескольким причинам:<br>
                    &mdash; не является рекламой своих услуг, а заказом для других специалистов;<br>
                    &mdash; содержит запрещенную (незаконную) информацию или не нормативную лексику.
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>
@include("parts.footer")
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
