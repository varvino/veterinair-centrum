<?php require_once("../../../config.php"); ?>

<?php
$title = "Blog";
$post_type = "post";
include(ROOT . "template-parts/head.php");
?>
<?php include(ROOT . "template-parts/header.php"); ?>

<main>
    <div class="h-container">
        <h1 class="blogpost__headline">Dit is een blogpost</h1>
        <a href="<?php echo HTTP; ?>content/blog/archive.php" class="blogpost__date">
            12 februari 2020
        </a>
        <div class="blogpost__content">
            <p class="blogpost__content-lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quasi voluptates placeat possimus repellendus ut esse, harum deserunt architecto provident perferendis facere autem cum asperiores commodi minima accusamus odio libero doloribus quaerat quibusdam accusantium. Voluptate?</p>
            <h2 class="blogpost__title">Dit is een header</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quasi voluptates placeat possimus repellendus ut esse, harum deserunt architecto provident perferendis facere autem cum asperiores commodi minima accusamus odio libero doloribus quaerat quibusdam accusantium. Voluptate?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum quasi voluptates placeat possimus repellendus ut esse, harum deserunt architecto provident perferendis facere autem cum asperiores commodi minima accusamus odio libero doloribus quaerat quibusdam accusantium. Voluptate?</p>
            <img src="<?php echo HTTP; ?>dist/gfx/backgrounds/hero.jpg" alt="Een foto">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. <a href="#">Voluptatum quasi voluptates</a> placeat possimus repellendus ut esse, harum deserunt architecto provident perferendis facere autem cum asperiores commodi minima accusamus odio libero doloribus quaerat quibusdam accusantium. Voluptate?</p>
        </div>
        <div class="references-container">
            <div class="references__title">Bronnen</div>
            <ol class="references__list">
                <li class="references__list-item">
                    Bron 1
                </li>
                <li class="references__list-item">
                    Bron 2
                </li>
            </ol>
        </div>
    </div>
</main>

<?php include(ROOT . "template-parts/footer.php"); ?>