<?php require_once(ROOT . "functions.php") ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) : echo $title . ' &mdash; '; endif; ?>Veterinair Centrum Genemuiden</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700">
    <link rel="stylesheet" href="<?php echo HTTP; ?>dist/css/main.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTTP; ?>dist/gfx/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo HTTP; ?>dist/gfx/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo HTTP; ?>dist/gfx/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo HTTP; ?>dist/gfx/favicons/site.webmanifest">

    <?php if (isset($canonical_url)) : ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <?php endif; ?>

    <?php include_once(ROOT . "template-parts/components/google-tag.php"); ?>
</head>

<body <?php if (isset($post_type)) : ?> class="<?php echo $post_type ?>" <?php endif; ?>>