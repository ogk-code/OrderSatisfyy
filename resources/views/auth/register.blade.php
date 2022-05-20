<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{env("APP_URL")}}/assets/img/favicon.png">
    <title>Регистрация </title>
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="{{env("APP_URL")}}/assets/style/register.css">
</head>
<body class="text-center footer-back-reg">
    <form action="{{ route('register') }}" class="form-signin" method="POST">
        @csrf
      <img class="mb-4" src="https://img.icons8.com/plasticine/100/000000/barcode.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>

        <div class="form-group">
            <input type="text" name="name" placeholder="Введите имя" class="form-control " value="" autocomplete="off">
            <span class="invalid-feedback"></span>
        </div>
      <div class="form-group">
        <input type="text" name="email" placeholder="Введите email" class="form-control " value="" autocomplete="off">
        <span class="invalid-feedback"></span>
          @error('email')
          <span class="invalid-feedback" role="alert"><strong>Неправильный email</strong></span>
          @enderror
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Введите пароль" class="form-control " value="" autocomplete="off">
        <span class="invalid-feedback"></span>
      </div>
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>>Неправильный пароль</strong></span>
        @enderror
      <div class="form-group">
        <input type="password" name="confirm_password" placeholder="Подтвердите введенный пароль" class="form-control " value="" autocomplete="off">
        <span class="invalid-feedback"></span>
      </div>
        <div style="text-align: left;" class="form-check">
            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="client" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Заказчик
            </label>
        </div>
        <div style="text-align: left;" class="form-check">
            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="staff">
            <label class="form-check-label" for="flexRadioDefault2">
                Исполнитель
            </label>
        </div>

      <br>
      <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Зарегистрироваться">
      </div>
      <div class="form-group">У вас уже есть аккаунт? <a href="{{env("APP_URL")}}/login">Авторизируйтесь</a></div>
      <br><br><br><br><br><br>
      <p> <a href="{{env("APP_URL")}}">Вернуться назад</a></p>
      <p class="mt-2 mb-1 text-muted">© 2021-2022</p>
    </form>


<div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div></body>
</html>
