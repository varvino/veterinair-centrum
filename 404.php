<?php require_once("config.php"); ?>

<?php
$post_type = 'four-o-four';
include(ROOT . "template-parts/head.php");
?>

<?php
include(ROOT . "template-parts/header.php");
?>
<main class="h-container">
    <h1 class="four-o-four__title">404</h1>
    <p class="four-o-four__text">Sorry, wij hebben niet kunnen vinden wat u zocht.</p>
    <a href="<?php echo HTTP; ?>" class="button">Ga naar de voorpagina</a>
</main>
<?php
include(ROOT . "template-parts/footer.php");
?>