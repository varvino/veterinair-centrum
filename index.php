<?php require_once('config.php'); ?>
<?php require_once(ROOT . 'scripts.php') ?>

<!DOCTYPE html>
<html>
<?php
<?php $page = 'front-page'; ?>
<?php include "template-parts/head.php"; ?>
include(ROOT . "template-parts/head.php");
?>

<body class="<?php echo $page ?>">
    <header class="header__outer-container">
        <?php include "template-parts/header.php"; ?>
    </header>
    <main>
        <?php include "content/front-page.php"; ?>
    </main>
    <footer>
        <?php include "template-parts/footer.php"; ?>
    </footer>

    <?php
    include(ROOT . "template-parts/header.php");
    include(ROOT . "content/front-page.php");
    include(ROOT . "template-parts/footer.php");
    ?>

    <script src="<?php echo HTTP; ?>dist/js/main.min.js"></script>
</body>

</html>