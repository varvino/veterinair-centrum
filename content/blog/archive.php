<?php require_once("../../config.php"); ?>

<?php
$meta_title = "Archief";
$meta_desciption = "Op deze pagina kunt u onze artikels nalezen";
$post_type = "archive";
include(ROOT . "template-parts/head.php");
?>


<?php include(ROOT . "template-parts/header.php"); ?>

<main class="h-container">
    <div class="blog__items">

        <div class="blog__item">
            <h3 class="blog__headline">
                <a href="<?php echo HTTP; ?>content/blog/2020/wearables-voor-huisdieren.php" class="blog__headline-link">
                    <?php the_title('content/blog/2020/wearables-voor-huisdieren.php'); ?>
                </a>
            </h3>
            <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/wearables-voor-huisdieren.php'); ?></p>
            <div class="blog__links-container">
                <a href="<?php echo HTTP; ?>content/blog/2020/wearables-voor-huisdieren.php" class="blog__readmore">> Lees meer</a>
                <div class="blog__metadata"><?php the_date('content/blog/2020/wearables-voor-huisdieren.php') ?></div>
            </div>
        </div>
        
        <div class="blog__item">
            <h3 class="blog__headline">
                <a href="<?php echo HTTP; ?>content/blog/2020/wolven-apporteren.php" class="blog__headline-link">
                    <?php the_title('content/blog/2020/wolven-apporteren.php'); ?>
                </a>
            </h3>
            <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/wolven-apporteren.php'); ?></p>
            <div class="blog__links-container">
                <a href="<?php echo HTTP; ?>content/blog/2020/wolven-apporteren.php" class="blog__readmore">> Lees meer</a>
                <div class="blog__metadata"><?php the_date('content/blog/2020/wolven-apporteren.php') ?></div>
            </div>
        </div>

        <div class="blog__item">
            <h3 class="blog__headline">
                <a href="<?php echo HTTP; ?>content/blog/2020/hondenbezit-beinvloed-door-genen.php" class="blog__headline-link">
                    <?php the_title('content/blog/2020/hondenbezit-beinvloed-door-genen.php'); ?>
                </a>
            </h3>
            <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/hondenbezit-beinvloed-door-genen.php'); ?></p>
            <div class="blog__links-container">
                <a href="<?php echo HTTP; ?>content/blog/2020/hondenbezit-beinvloed-door-genen.php" class="blog__readmore">> Lees meer</a>
                <div class="blog__metadata"><?php the_date('content/blog/2020/hondenbezit-beinvloed-door-genen.php') ?></div>
            </div>
        </div>



    </div>
</main>

<?php include(ROOT . "template-parts/footer.php"); ?>