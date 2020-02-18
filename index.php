<!DOCTYPE html>
<html>
<?php $page = 'front-page'; ?>
<?php include "template-parts/head.php"; ?>

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

    <script src="./dist/js/main.min.js"></script>
</body>

</html>