<header>
    <div class="logo-container">
        <span class="logo"><a href="{{env("APP_URL")}}">ORDER/SATISFY</a></span>

        @role('client')
        <a href="{{env("APP_URL")}}/create-order">
            <button type="button" class="btn btn-warning item">Создать заказ</button>
        </a>
        <a href="{{env("APP_URL")}}/my-orders">
            <button type="button" class="btn btn-danger item">Мои заказы</button>
        </a>
        @endrole

        @role('staff')
        <a href="{{env("APP_URL")}}/order-list">
            <button type="button" class="btn btn-warning item">Все заказы</button>
        </a>
        <div class="item" style="width: 200px">
            <select class="js-selectize" name="order" placeholder="Поиск заказов">
                <option value=""></option>
                <option value="1">Сантехник</option>
                <option value="2">Электрик</option>
                <option value="3">Столяр</option>
                <option value="4">Слесарь</option>
            </select>
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
