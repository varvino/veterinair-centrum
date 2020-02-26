<?php require_once(ROOT . "functions.php") ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) : echo $title . ' &mdash; '; endif; ?>Veterinair Centrum Genemuiden</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700">
    <link rel="stylesheet" href="<?php echo HTTP; ?>dist/css/main.min.css">

    <?php if (isset($canonical_url)) : ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <?php endif; ?>

    <?php include_once(ROOT . "template-parts/components/google-tag.php"); ?>
</head>

<body <?php if (isset($post_type)) : ?> class="<?php echo $post_type ?>" <?php endif; ?>>