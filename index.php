<?php require_once("config.php"); ?>
<?php require_once(ROOT . "functions.php") ?>

<!DOCTYPE html>
<html>
<?php
$post_type = "front-page";
include(ROOT . "template-parts/head.php");
?>

<body <?php if (isset($post_type)) : ?> class="<?php echo $post_type ?>" <?php endif; ?>>

    <?php
    include(ROOT . "template-parts/header.php");
    include(ROOT . "content/front-page.php");
    include(ROOT . "template-parts/footer.php");
    ?>

    <script src="<?php echo HTTP; ?>dist/js/main.min.js"></script>
</body>

</html>