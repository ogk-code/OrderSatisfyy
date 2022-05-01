<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Order/Satisfy</title>
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
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{env("APP_URL")}}/assets/img/indexSlide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="">Онлайн-сервис заказа услуг в городе Одесса <span></span></h2>
              <p class="">Сервис поиска частных специалистов для решения любых задач.</p>
              <a href="" class="btn-get-started scrollto">Создать заказ</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{env("APP_URL")}}/assets/img/indexSlide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="">Категории работ</h2>
              <p class="">Проверенные специалисты для выполнения ваших бытовых или бизнес задач.</p>
              <a href="#hero-carousel-indicators" class="btn-get-started scrollto">Узнать больше</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{env("APP_URL")}}/assets/img/indexSlide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="">Как работает Order/Satisfy</h2>
              <p class=""></p>
              <a href="#howitworks" class="btn-get-started scrollto">Узнать больше</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

    <div class="row">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/icons8-home-64.png" class="img-fluid" alt="">
        <br><span class="cntr">Дом</span>
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/png-transparent-black-box-truck-illustration-van-delivery-truck-car-logistics-delivery-angle-truck-logo-removebg-preview.png" class="img-fluid" alt="">
        <span class="cntr">Доставка</span>
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/icons8-mouse-64.png" class="img-fluid" alt="">
        <span class="cntr">Фриланс</span>
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/icons8-teaching-64.png" class="img-fluid" alt="">
        <span class="cntr">Преподавание</span>
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/icons8-business-64.png" class="img-fluid" alt="">
        <span class="cntr">Бизнес</span>
      </div>

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="{{env("APP_URL")}}/assets/img/icons/icons8-health-data-64.png" class="img-fluid" alt="">
        <span class="cntr">Все категории</span>
      </div>

    </div>

  </div>
</section><!-- End Clients Section -->

<!-- Work Categories -->
<div class="container">
  <hr>
  <div class="row">
    <div class="col"><h2 class="heading">Домашний мастер</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Сантехник</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Электрик</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Муж на час</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Столяр</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Слесарь</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Отделочные работы</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт квартир</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Укладка плитки</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Штукатурные работы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Утепление помещений</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Монтаж отопления</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Клининговые услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уборка квартир</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Генеральная уборка</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уборка после ремонта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Химчистка</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уборка коттеджей и домов</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Курьерские услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Курьерская доставка</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Доставка продуктов</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Доставка готовой еды</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Доставка лекарств</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Курьер на авто</a></li>
      </ul>
    </div>
    <div class="w-100"></div>
    <div class="col"><h2 class="heading">Строительные работы</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Разнорабочие</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Сварочные работы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Токарные работы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Плотник</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Кладка кирпича</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Ремонт техники</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт крупной бытовой техники</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт мелкой бытовой техники</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Компьютерная помощь</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт цифровой техники</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт мобильных телефонов</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Логистические и складские услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Грузоперевозки</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги грузчиков</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Вывоз строительного мусора</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Перевозка мебели и техники</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Переезд квартиры или офиса</a></li>
      </ul></div>
    <div class="col"><h2 class="heading">Бытовые услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Сад и огород</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Няни</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги сиделки</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги домработницы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги швеи</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col"><h2 class="heading">Мебельные работы</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Изготовление мебели</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Ремонт мебели</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Сборка мебели</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Реставрация мебели</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Перетяжка мебели</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Работа в Интернете</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Копирайтинг</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Сбор, поиск информации</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Наполнение сайтов</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Набор текста</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Рерайтинг</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Дизайн</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Разработка логотипов</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Дизайн интерьера</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Дизайн сайта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Дизайн полиграфии</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги печати</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Разработка сайтов и приложений</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Создание сайтов</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Доработка сайта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Создание целевой страницы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Продвижение сайтов</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Верстка сайта</a></li>
      </ul>
    </div>
    <div class="w-100"></div>
    <div class="col"><h2 class="heading">Бюро переводов</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Письменные переводы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Редактура перевода</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Перевод документов и нотариальное заверение</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Устные переводы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Технический перевод</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Реклама в Интернете</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Реклама в социальных сетях</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Размещение объявлений</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Настройка контекстной рекламы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">SEO оптимизация сайта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Размещение постов на форумах</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Фото- и видео- услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Фотограф</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Видеооператор</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Обработка фотографий</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Монтаж видео</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Оцифровка видеокассет</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Организация праздников</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги ведущего</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Музыкальное сопровождение</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги аниматоров</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Организация питания</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Выпечка и десерты</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col"><h2 class="heading">Деловые услуги</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Бухгалтерские услуги</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Юридические услуги</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Риэлтор</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Услуги колл-центра</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Финансовые услуги</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Услуги репетиторов</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Преподаватели по предметам</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Репетиторы иностранных языков</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Написание работ</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Преподаватели музыки</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Автоинструкторы</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Услуги красоты и здоровья</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Массаж</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за ногтями</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Косметология</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за ресницами</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за бровями</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Ремонт авто</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Помощь в дороге</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Техническое обслуживание и диагностика</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Автоэлектрика</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Кузовные работы</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Двигатель</a></li>
      </ul>
    </div>
    <div class="w-100"></div>
    <div class="col"><h2 class="heading">Услуги для животных</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за котами</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за собаками</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Гостиница для животных</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Перевозка животных</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Уход за рыбками</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Услуги тренеров</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Йога и фитнес</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Игровые виды спорта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Водные виды спорта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Силовые виды спорта</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Боевые искусства</a></li>
      </ul>
    </div>
    <div class="col"><h2 class="heading">Другие категории</h2>
      <ul>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Дом</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Доставка</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Фриланс</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Преподавание</a></li>
        <li><i class="ri-check-double-line"></i> <a href="#" class="withoutRed">Бизнес</a></li>
      </ul>
    </div>
    <div class="col"></div>
  </div>
  <hr class="howitworks" id="howitworks">
</div>
</div><!-- End Work Categories -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2><u class="redunderline">Как работает сервис</u></h2>
            <h3><u>Order/Satisfy</u> - это сервис заказа услуг в Интернете. Теперь при помощи нашего сервиса работа в интернете перестанет быть недосягаемым миражом в пустыне, а станет реальным результатом в мире информационных технологий и возможностей.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p class="shrift">
              Площадка объединяет заказчиков услуг, которым необходимо выполнить какую-либо работу, и компетентных специалистов, ищущих подработку или дополнительный заработок.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Быстрая регистрация, которую можно подтвердить за 5 минут.</li>
              <li><i class="ri-check-double-line"></i> Простой интерфейс позволяет интуитивно быстро искать заказы и исполнителей.</li>
              <li><i class="ri-check-double-line"></i> Разнообразное коливество категорий работ не заставит заскучять специалистам.</li>
            </ul>
            <p class="fst-italic">
              Ниже дан краткий экскурс в понимание как работает и устроен наш сервис как для тех, кто только познакомился с таким видом сервиса, так и для людей, которые хотят попробывать себя в роли исполнителя.
            </p>
          </div>
        </div>
        <hr>
      </div>
    </section><!-- End About Section -->

    <div class="row mb-2 aboutService">
      <div class="col-md-6 blockada">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">Пошаговая инструкция:</strong>
            <h3 class="mb-0">
              <a class="text-dark">Для заказчика</a>
            </h3><br>
            <ul>
              <p class="card-text mb-auto">Указать какой вид работы нужно выполнить и за какой период.</p><br>
              <p class="card-text mb-auto">Выбрать нужного специалиста из списка доступных в конкретной категории.</p><br>
              <p class="card-text mb-auto">Заказ отправлен на выполнение Вашей задачи специалисту.</p><br>
            </ul>

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Пошаговая инструкция:</strong>
            <h3 class="mb-0">
              <a class="text-dark">Для исполнителя</a>
            </h3><br>
            <ul>
            <p class="card-text mb-auto">Выбрать интересующее Вас заданиепри помощи фильтров.</p><br>
            <p class="card-text mb-auto">Получив задание от заказчика, выполните его в поставленные сроки.</p><br>
            <p class="card-text mb-auto">Обязуйте заказчика оставить отзыв о проделанной работе.</p><br>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a>Подобающая зароботная плата</a></h4>
              <p>Каждый самостоятельно выбирает какую работу выполнять и сколько за неё получать. Это дело каждого.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a>Безопасность</a></h4>
              <p>Наш сервис дает вам возможность работать по безопасной сделке. А проверенные специалисты помогут вам в выполнении вашего задания.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-bar-chart"></i>
              <h4><a>Качество</a></h4>
              <p>Завершив задание, исполнитель должен оценивается за качество выполненной работы по рейтинговой системе.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-binoculars"></i>
              <h4><a>Мобильность работы</a></h4>
              <p>Вне зависимости от вида работы, вы можете выбирать далеко ли от вас выполнять задания.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a>Прозрачность и ястность</a></h4>
              <p>У нас нет скрытых платежей, бесплатная публикацтя заказов, и поэтому цена предстоящей работы до ее завершения статична.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-calendar4-week"></i>
              <h4><a>Свободный график</a></h4>
              <p>Устанавливайте себе график работы лично, работайте в свободное и удобное для вас время над задачами, которые вы выберете сами.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include("parts.footer")

  <script src="{{env("APP_URL")}}/assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/glightbox.min.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/isotope.pkgd.min.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/swiper-bundle.min.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/noframework.waypoints.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/validate.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/main.js"></script>
  <script src="{{env("APP_URL")}}/assets/js/index.js"></script>
</body>
</html>
