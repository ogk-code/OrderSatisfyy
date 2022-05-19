<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Order/Satisfy</h3>
                        <p style='font-family: "Open Sans", sans-serif;'>
                            ул. Барицкого, 12Б <br>
                            Одесса 65005, Украина<br><br>
                            <strong>Телефон: </strong>+380 99 696 69 69<br>
                            <strong>Почта: </strong>OrderSatisfy@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Полезные ссылки</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{env("APP_URL")}}">Главная</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{env("APP_URL")}}/about-us">О нас</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{env("APP_URL")}}/FAQ">Популярные вопросы</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{env("APP_URL")}}/contacts">Связаться с
                                нами</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Наша новостная лента</h4>
                    <p>Подпишитесь на рассылку новых уведомлений нашего сервиса</p>
                    <form action="" method="post">
                        <input type="email" name="email" class="rasilka" autocomplete="off"><input type="submit"
                                                                                                   value="Подписаться">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Order/Satisfy</span></strong>. Все права защищены.
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-typeahead/2.11.0/jquery.typeahead.min.css">
<script src="{{env("APP_URL")}}/assets/js/search.js"></script>
