<?php
    include "./components/header.php";
    include "./components/page-header.php";
?>

<div class="my-5">
    <div class="my-5 py-5 position-relative">
        <div class="my-5 py-5 bg-secondary-subtle"></div>
        <img src="./assets/img/banners/banner_contacts.jpg" alt="" class="position-absolute top-0 left-0 img-cover">
    </div>
    <div class="container">

        <div class="d-flex align-items-center my-5">
            <div class="border border-black w-25 flex-grow-1"></div>
            <div class="flex-grow-1 px-lg-4">
                <div class="h3 text-uppercase text-center">
                    Служба горячей доставки
                </div>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <i class="fa fa-phone text-danger display-4" aria-hidden="true"></i>
                    <div class="fs-5 px-2">+7(8162)</div>
                    <div class="display-3">700-300</div>
                </div>
                <div class="text-center">ежедневно с 10:00 до 02:00</div>
            </div>
            <div class="border border-black w-25 flex-grow-1"></div>
        </div>


        <div class="d-flex align-items-center">
            <div class="text-uppercase flex-grow-1 text-end fs-5 w-50">
                или вы можете заказать блюда с собой
            </div>
            <div class="display-4 px-5 text-danger">
                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </div>
            <div class="text-uppercase flex-grow-1 fs-5 w-50">
                по четырем доступным адресам ресторанов
            </div>
        </div>



        <ul class="nav nav-tabs justify-content-center my-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="addr1-tab" data-bs-toggle="tab"
                    data-bs-target="#addr1" type="button" role="tab"
                    aria-controls="addr1" aria-selected="true">
                    ул. Ломоносова 37
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="addr2-tab" data-bs-toggle="tab"
                    data-bs-target="#addr2" type="button" role="tab"
                    aria-controls="addr2" aria-selected="false">
                    ул. Псковская 11
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="addr3-tab" data-bs-toggle="tab"
                    data-bs-target="#addr3" type="button" role="tab"
                    aria-controls="addr3" aria-selected="false">
                    Воскресенский бульвар 17/22
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="addr4-tab" data-bs-toggle="tab"
                    data-bs-target="#addr4" type="button" role="tab"
                    aria-controls="addr4" aria-selected="false">
                    Великий Новгород, Большая Московская 52/9
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active"
                id="addr1" role="tabpanel"
                aria-labelledby="addr1-tab">

                <div class="text-center">
                    <h2 class="text-danger">
                        ул. Ломоносова 37
                    </h2>
                    <h3>Gourmetto</h3>
                    <div class="">
                        8(8162)92-64-94
                    </div>
                    <div class="">
                        Ежедневно, с 11 до 00 часов
                    </div>
                    <div class="">
                        <i class="fab fa-vk" aria-hidden="true"></i>&nbsp;
                        <a href="https://vk.com/gourmetto_vn">gourmetto_vn</a>
                    </div>
                    <div class="my-5">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaa9a7c6a05120c62242f497afbd994f3e4e84bffbc8a55cbddae029a36b3beaa&amp;source=constructor"
                            frameborder="0"
                            allowfullscreen="true"
                            width="100%"
                            height="100%"
                            style="display: block; height: 400px;"
                        ></iframe>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade show"
                id="addr2" role="tabpanel"
                aria-labelledby="addr2-tab">
                
                <div class="text-center">
                    <h2 class="text-danger">
                        ул. Псковская 11
                    </h2>
                    <h3>My Kitchen</h3>
                    <div class="">
                        8(8162)90-01-36
                    </div>
                    <div class="">
                        Ежедневно, с 12 до 02 часов
                    </div>
                    <div class="">
                        <i class="fab fa-vk" aria-hidden="true"></i>&nbsp;
                        <a href="https://vk.com/my_kitchen_vn">my_kitchen_vn</a>
                    </div>
                    <div class="my-5">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A6bfe42e3ba016066ed1a1717af39a49072263ef210cf8142e54612f82b13af72&amp;source=constructor"
                            frameborder="0"
                            allowfullscreen="true"
                            width="100%"
                            height="100%"
                            style="display: block; height: 400px;"
                        ></iframe>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade show"
                id="addr3" role="tabpanel"
                aria-labelledby="addr3-tab">
                
                <div class="text-center">
                    <h2 class="text-danger">
                        Воскресенский бульвар 17/22
                    </h2>
                    <h3>Gourmetto</h3>
                    <div class="">
                        8(8162)92-91-10
                    </div>
                    <div class="">
                        Ежедневно, с 10 до 23 часов
                    </div>
                    <div class="">
                        <i class="fab fa-vk" aria-hidden="true"></i>&nbsp;
                        <a href="https://vk.com/gor.cafe_gourmetto">gor.cafe_gourmetto</a>
                    </div>
                    <div class="my-5">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa84edaee5e0a643c4368e96ca741ed79f85645b13e47f306234571f7a615af49&amp;source=constructor"
                            frameborder="0"
                            allowfullscreen="true"
                            width="100%"
                            height="100%"
                            style="display: block; height: 400px;"
                        ></iframe>
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade show"
                id="addr4" role="tabpanel"
                aria-labelledby="addr4-tab">
                
                <div class="text-center">
                    <h2 class="text-danger">
                        Большая Московская 52/9
                    </h2>
                    <h3>My Kitchen</h3>
                    <div class="">
                        8(8162)90-07-20
                    </div>
                    <div class="">
                        Ежедневно, с 12 до 02 часов
                    </div>
                    <div class="">
                        <i class="fab fa-vk" aria-hidden="true"></i>&nbsp;
                        <a href="https://vk.com/my_kitchen_vn">my_kitchen_vn</a>
                    </div>
                    <div class="my-5">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac4d9e3f651645d1493c5c96c351c9bf27d777cde0faecb28f0ef3e967a0485da&amp;source=constructor"
                            frameborder="0"
                            allowfullscreen="true"
                            width="100%"
                            height="100%"
                            style="display: block; height: 400px;"
                        ></iframe>
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