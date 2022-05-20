<header>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="logo-container">
        <span class="logo"><a href="{{env("APP_URL")}}">ORDER/SATISFY</a></span>

        @role('client')
        <a href="{{env("APP_URL")}}/create-order">
            <button type="button" class="btn btn-danger item">Создать заказ</button>
        </a>
        <a href="{{env("APP_URL")}}/my-orders">
            <button type="button" class="btn btn-danger item">Мои заказы</button>
        </a>
        @endrole

        @role('staff')
        <a href="{{env("APP_URL")}}/order-list">
            <button type="button" class="btn btn-danger item">Все заказы</button>
        </a>
        <form class="item">
            <div class="typeahead__container">
                <div class="typeahead__field">
                    <div class="typeahead__query">
                        <input id="typeahead" name="search" placeholder="Поиск заказов" autocomplete="off">
                    </div>
                </div>
            </div>
        </form>
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
