<?php
    include "./components/header.php";
    include "./components/page-header.php";
?>

<div class="my-5">
    <div class="my-4 py-5 position-relative">
        <div class="my-5 py-3"></div>
        <img src="./assets/img/banners/b_banner1.jpg" alt="" class="position-absolute top-0 left-0 img-cover">
    </div>
    <div class="container">
        <?php
            include "./components/widget-catalogue-category.php";
        ?>
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