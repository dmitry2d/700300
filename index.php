<?php
    include "./components/header.php";
    include "./components/page-header.php";
?>

<div class="container my-5">
    <?php
        include "./components/index-slider.php";
    ?>
</div>

<div class="container my-5">
    <?php
        include "./components/widget-popular.php";
    ?>
</div>

<div class="my-5 bg-secondary-subtle">
    <div class="container">
        <?php
            include "./components/widget-catalogue.php";
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