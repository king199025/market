<?php
use yii\helpers\Url;
?>

<header class="b-header">

    <div class="b-header__top">
        <div class="l b-verticalAlign">
            <div class="b-header__top-left">
                <p class="row">127322, г. Москва, Огородный проезд, д.20, стр.27</p>
                <p class="b-mail row"><i class="icon-icon-mail"></i>system@original-group.ru</p>
            </div>
            <div class="b-header__top-right">
                <div class="b-phone row">
                    <p><i class="icon-icon-call"></i>8 (800) 555 00 95</p>
                    <a href="#777" class="link-callback">Заказать звонок</a>
                </div>
                <div class="b-login row">

                    <div class="b-login__inner">
                        <a href="#login" class="b-login__login link open_modal">Вход</a>
                        <a href="#registration" class="btn btn--transparent modReg b-login__register open_modal" data-csrf="<?= Yii::$app->request->getCsrfToken()?>">Регистрация</a>
                    </div>

                    <div class="b-login__logged">
                        <a href="#777" class="b-login__auth link js-auth-link">Александр Смирнов</a>
                        <div class="b-login__menu">
                            <a href="#777" class="b-login__menu-link">Личный кабинет</a>
                            <a href="<?= Url::to(['/user/settings/account'])?>" class="b-login__menu-link">Личная информация</a>
                            <a data-method="post" href="<?= Url::to(['/user/security/logout'])?>" class="b-login__menu-link">Выход</a>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <div class="b-header__bottom">
        <div class="l b-verticalAlign">
            <div class="b-logo__wrap">
                <a href="/" class="b-logo">Market Point - система защиты продукции от подделок</a>
            </div>
            <div class="b-menu__wrap">
                <div class="b-mobileMenu-btn js-menu-btn"><span></span></div>
                <nav class="b-menu js-menu">
                    <a href="/" class="b-menu__link">Главная</a>
                    <a href="#777" class="b-menu__link">О компании</a>
                    <a href="#777" class="b-menu__link">Новости</a>
                    <a href="#777" class="b-menu__link">FAQ</a>
                    <a href="#777" class="b-menu__link">Проверить продукт</a>
                    <a href="#777" class="b-menu__link">Каталог</a>
                    <a href="#777" class="b-menu__link">Контакты</a>
                </nav>
            </div>
            <div class="b-btn__wrap">
                <a href="#777" class="btn btn--red">SOS! Я купил подделку</a>
            </div>
        </div>
    </div>

</header>
