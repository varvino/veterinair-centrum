<?php require_once(ROOT . "functions.php") ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Meta-tags -->
    <title><?php if (isset($meta_title)) : echo $meta_title . ' &mdash; '; endif; ?>Veterinair Centrum Genemuiden</title>

    <?php if (isset($meta_title)) : ?>
        <!-- Meta title -->
        <meta name="title" content="<?php if (isset($meta_title)) : echo $meta_title . ' &mdash; ' . 'Veterinair Centrum Genemuiden'; else : echo 'Veterinair Centrum Genemuiden'; endif; ?>">
    <?php endif; ?>

    <?php if (isset($meta_description)) : ?>
        <!-- Meta description -->
        <meta name="description" content="<?php if (isset($meta_description)) : echo $meta_description; else : echo 'Wij zijn een dierenartsenpraktijk voor gezelschapsdieren, paarden en landbouwhuisdieren in Genemuiden.'; endif; ?>">
    <?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="//www.veterinair-centrum.nl/">
    <meta property="og:title" content="<?php if (isset($meta_title)) :  echo $meta_title; else: echo 'Veterinair Centrum Genemuiden'; endif; ?>">
    <meta property="og:description" content="<?php if (isset($meta_description)) :  echo $meta_description; else : echo 'Wij zijn een dierenartsenpraktijk voor gezelschapsdieren, paarden en landbouwhuisdieren in Genemuiden.'; endif; ?>">
    <meta property="og:image" content="<?php if (isset($meta_image)) :  echo HTTP .$meta_image; else: echo HTTP . 'dist/gfx/backgrounds/hero.svg'; endif; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="//www.veterinair-centrum.nl/">
    <meta property="twitter:title" content="<?php if (isset($meta_title)) :  echo $meta_title; endif; ?>">
    <meta property="twitter:description" content="<?php if (isset($meta_description)) :  echo $meta_description; endif; ?>">
    <meta property="twitter:image" content="<?php if (isset($meta_image)) :  echo HTTP .$meta_image; else: echo HTTP . 'dist/gfx/backgrounds/hero.svg'; endif; ?>">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTTP; ?>dist/gfx/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo HTTP; ?>dist/gfx/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo HTTP; ?>dist/gfx/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo HTTP; ?>dist/gfx/favicons/site.webmanifest">

    <!-- Canonical URL -->
    <?php if (isset($canonical_url)) : ?>
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <?php endif; ?>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700">
    <link rel="stylesheet" href="<?php echo HTTP; ?>dist/css/main.min.css">

    <!-- Google Analytics -->
    <?php include_once(ROOT . "template-parts/components/google-tag.php"); ?>
</head>

<body <?php if (isset($post_type)) : ?> class="<?php echo $post_type ?>" <?php endif; ?>>