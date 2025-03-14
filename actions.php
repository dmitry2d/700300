<?php
    include "./components/header.php";
    include "./components/page-header.php";
?>

<div class="my-5 py-5 bg-danger">
    <div class="container">

        <h1 class="text-center text-white mb-5">Акции и спецпредложения</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5">

            <div class="col">
                <div class="aspect-square">
                    <img src="./assets/img/temp_/act01.png" alt="" class="img-fit rounded-5">
                    <div class="text-white py-5">
                        <h3>
                            Доставим за 49 минут!
                        </h3>
                        <h5 class="my-4">
                            Если Вы не получили заказанные блюда за 49 минут*
                        </h5>
                        <p>
                            Ресторанная компания Gourmetto Group дарит Вам купон на пиццу "Римини" из нашего меню, которую Вы сможете получить бесплатно при следующем заказе.
                        </p>
                        <p>
                            * При заказе доставки в черте города (кроме микрорайонов: Кречевицы, Деревяницы, Волховский)<br>
                            * При заказе не более трех блюд<br>
                            * Время доставки отсчитывается с момента приема Вашего заказа оператором.<br>
                            * Акция не распространяется на заказы с блюдами грузинской кухни<br>
                            * Акция не действует в праздничные и предпраздничные дни<br>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="aspect-square">
                    <img src="./assets/img/temp_/act02.png" alt="" class="img-fit rounded-5">
                    <div class="text-white py-5">
                        <h3>
                            Пицца на День Рождения в подарок!
                        </h3>
                        <h5 class="my-4">
                            При заказе на доставку мы дарим пиццу на выбор: Римини, Песто Верде, Поло Барбекю. Для использования акции сумма минимального заказа должна быть 700 рублей.
                        </h5>
                        <p>
                            Акция действует 3 дня до и 3 дня после дня рождения при предъявлении оригинала документа, где указана дата рождения. Подарок не подлежит обмену на денежные средства или возврату. Подробности у оператора службы горячей доставки Gourmetto.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="aspect-square">
                    <img src="./assets/img/temp_/act03.png" alt="" class="img-fit rounded-5">
                    <div class="text-white py-5">
                        <h3>
                            Торт со скидкой 35%
                        </h3>
                        <h5 class="my-4">
                            Торт от My Cake со скидкой 35% на день рождение: Стоимость торта 1 кг – всего 900₽* (Без скидки цена 1400₽ )
                        </h5>
                        <p>
                        На выбор: Медовик, Морковный или Три шоколада.
                        </p>
                        <p>
                            Сделайте заказ минимум за 1 день до доставки, НО! Не позднее 19:30 часов, чтобы мы успели все приготовить. Все остальные бонусы для именинников сохраняются. Акция действует 5 дней до и 5 дней после Дня Рождения!
                            <br>*для использования акции сумма минимального заказа должна быть 700 рублей, не учитывая сам торт
                            <br>*в один заказ можно добавить только 1 торт по акции
                        </p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="aspect-square">
                    <img src="./assets/img/temp_/act04.png" alt="" class="img-fit rounded-5">
                    <div class="text-white py-5">
                        <h3>
                            Пиццы 4+1
                        </h3>
                        <p>
                            При заказе 4 х пицц - пятая пицца в подарок (пицца в подарок по наименьшей стоимости).
                        </p>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</div>

<div class="container my-5">
    <p class="my-5 fs-4 text-center">
        «Gourmetto» знает, как порадовать Вас! Мы подготовили акции и скидки, которые позволят получить ваши любимые блюда бесплатно, при оформлении заказа. Или сделают покупку более приятно с помощью скидки! Уже набираете номер? Не забудьте познакомиться с нашим комбо-наборами!
    </p>
    <?php
        include "./components/widget-popular-more.php";
    ?>
</div>



<div class="bg-secondary-subtle">
    <div class="container py-5">

        <div class="d-flex align-items-center my-5">
            <div class="border border-black w-25 flex-grow-1"></div>
            <div class="h4 text-danger px-lg-4 text-center flex-grow-1 text-uppercase">КАК сделать заказ</div>
            <div class="border border-black w-25 flex-grow-1"></div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 gy-4">

            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-3">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
                            На сайте
                        </div>
                        <div class="mt-1">
                            Вы можете выбрать блюда в разделе Меню доставки
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-3">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
                            В мобильном приложении
                        </div>
                        <div class="mt-1">
                            Установите приложение для iPhone, iPad или Android
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-3">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
                            По телефону
                        </div>
                        <div class="mt-1">
                            +7 (8162) 700-300 ежедневно с 10:00 до 02:00
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center my-5">
            <div class="border border-black w-25 flex-grow-1"></div>
            <div class="h4 text-danger px-lg-4 text-center text-uppercase flex-grow-1">Как получить заказ</div>
            <div class="border border-black w-25 flex-grow-1"></div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 gy-4">
            <div class="col">
                <div class="d-flex">
                    <div class="text-danger display-3">
                        <i class="fa fa-compass" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
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
                    <div class="text-danger display-3">
                        <i class="fa fa-clock" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
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
                    <div class="text-danger display-3">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="px-4 py-2">
                        <div class="fw-bold text-uppercase">
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