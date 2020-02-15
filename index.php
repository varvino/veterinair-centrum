<!DOCTYPE html>
<html>
<?php $page = 'front-page'; ?>
<?php include "template-parts/head.php"; ?>

<body class="<?php echo $page ?>">
    <header>
        <?php include "template-parts/header.php"; ?>
    </header>
    <main>
        <?php include "content/front-page.php"; ?>
    </main>
    <footer>
        <?php include "template-parts/footer.php"; ?>
    </footer>
</body>

</html>