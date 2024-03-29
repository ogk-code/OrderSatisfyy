<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Авторизация специалиста</title>
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/login.css">
</head>
<body class="text-center footer-back-log">
    <form action="{{ route('login') }}" class="form-signin" method="post">
        @csrf
      <img class="mb-4" src="https://img.icons8.com/plasticine/100/000000/barcode.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
      <br>
      <div class="form-group">
        <input type="text"  placeholder="Введите email" class="form-control"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="invalid-feedback"></span>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Введите пароль" class="form-control " required autocomplete="current-password">
        <span class="invalid-feedback"></span>
      </div>

      <br>
      <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Авторизоваться" autocomplete="off">
      </div>
      <p>У вас нет аккаунта? <a href="{{env("APP_URL")}}/register">Зарегистрировуйтесь</a></p>
      <br><br><br><br><br><br>
      <p class="mt-2 mb-1 text-muted">© 2021-2022</p>
    </form>


<div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
</body>
</html>
