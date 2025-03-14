<?php
    include "./components/header.php";
    include "./components/page-header.php";
?>

<div class="my-5">
    <div class="my-5 py-5 position-relative">
        <div class="my-5 py-5"></div>
        <img src="./assets/img/banners/delivery_bg.png" alt="" class="position-absolute top-0 left-0 img-cover">
    </div>
    <div class="container">

        <h1 class="text-center">О доставке Gourmetto</h1>

        <div class="d-flex align-items-center my-5">
            <div class="border border-black w-25 flex-grow-1"></div>
            <div class="h4 text-danger px-lg-4 text-center flex-grow-1">А ТАКЖЕ УСЛОВИЯ И ИСКЛЮЧЕНИЯ</div>
            <div class="border border-black w-25 flex-grow-1"></div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 gy-4">

            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold">
                            ДОСТАВКА БЕСПЛАТНО
                        </div>
                        <div class="mt-1">
                            Все заказы доставляются бесплатно, вы оплачиваете только заказ
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-hourglass" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold">
                            ДВРЕМЯ ДОСТАВКИ 49 МИНУТ
                        </div>
                        <div class="mt-1">
                            За это время доставим ваш заказ не более 3-х блюд и доставка в черте города
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold">
                            ПРИЕМ ЗАКАЗОВ НА ДОСТАВКУ
                        </div>
                        <div class="mt-1">
                            Ежедневно, с 10:00 до 02:00. Минимальная сумма заказа 700 руб. с учетом всех скидок
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5">
            <iframe
                src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3A0b98c5bbf71ff685a8951f9fabc4d1f0b5923833e6f0e01e941367b872dcd011"
                frameborder="0"
                allowfullscreen="true"
                width="100%"
                height="100%"
                style="display: block; height: 400px;"
            ></iframe>
        </div>

        <div class="d-flex align-items-center my-5">
            <div class="border border-black w-25 flex-grow-1"></div>
            <div class="h4 text-danger px-lg-4 text-center text-uppercase flex-grow-1">Как получить заказ</div>
            <div class="border border-black w-25 flex-grow-1"></div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 gy-4">
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-compass" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold font-uppercase">
                            Доставка курьером
                        </div>
                        <div class="mt-1">
                            Доставим за 49 минут или пицца бесплатно см.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-clock" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold font-uppercase">
                            Доставка в указанное время
                        </div>
                        <div class="mt-1">
                            Укажите время, к которому вы хотите
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-2">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold font-uppercase">
                            Забрать из ресторана
                        </div>
                        <div class="mt-1">
                            Вы можете забрать свой заказ прямо из ресторана
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="container my-5">
    <?php
        include "./components/widget-popular-more.php";
    ?>
</div>

<div class="container my-5">
    <?php
        include "./components/widget-advert.php";
    ?>
</div>


<div class="container my-5">
    <?php
        include "./components/page-footer.php";
    ?>
</div>


<?php
    include "./components/footer.php";
?>