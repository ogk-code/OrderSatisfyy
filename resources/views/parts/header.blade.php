<header>
    <div class="logo-container">
        <span class="logo"><a href="{{env("APP_URL")}}">ORDER/SATISFY</a></span>

        @role('client')
        <a href="{{env("APP_URL")}}/create-order">
            <button type="button" class="btn btn-warning item">Создать заказ</button>
        </a>
        @endrole

        @role('staff')
        <a href="{{env("APP_URL")}}/order-list">
            <button type="button" class="btn btn-warning item">Все заказы</button>
        </a>
        <input type="text" class="form-control item" placeholder="Поиск заказов" aria-label="Поиск заказов"
               aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn btn-outline-danger" type="button">Найти</button>
        </div>
        @endrole
    </div>
    <div>
        <?php
        use Illuminate\Support\Facades\Auth;
        ?>
        @if(!Auth::user())
            <a href="{{env("APP_URL")}}/login2">
                <button type="button" class="btn btn-light">Войти</button>
            </a>
            <a href="{{env("APP_URL")}}/register">
                <button type="button" class="btn btn-danger item">Регистрация</button>
            </a>
        @else
            <span>{{Auth::user()->name}}</span>
            <a href="{{env("APP_URL")}}/logout">
                <button type="button" class="btn btn-light item">Выйти</button>
            </a>
        @endif
    </div>
</header>
