<?php require_once("config.php"); ?>

<?php
$post_type = "front-page";
$canonical_url = '//veterinair-centrum.nl';
include(ROOT . "template-parts/head.php");
?>

<?php
include(ROOT . "template-parts/header.php");
include(ROOT . "content/front-page.php");
include(ROOT . "template-parts/footer.php");
?>