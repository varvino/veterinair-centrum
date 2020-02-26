<header class="header__outer-container <?php if (isset($post_type)) : echo "header__outer-container--" . $post_type;
                                        endif; ?>">
    <div class="header__inner-container">
        <div class="navigation-container">
            <div class="logo">
                <a class="logo__link" href="<?php echo HTTP; ?>">
                    <img class="logo__image" src="<?php echo HTTP; ?>src/img/logo.png" alt="Ga terug naar de voorpagina">
                </a>
            </div>
            <div class="navbar"><?php include(ROOT . "template-parts/components/navigation.php"); ?></div>
            <div class="sidenav js-sidenav">
                <div class="sidenav__top-bar">
                    <img src="<?php echo HTTP; ?>src/img/icons/icon_arrow-left.svg" class="close-icon js-close-icon">
                </div>
                <?php include(ROOT . "template-parts/components/navigation-mobile.php"); ?>
            </div>
            <a class="hamburger js-hamburger">
                <img src="<?php echo HTTP; ?>src/img/icons/icon_hamburger.svg" alt="Open de navigatie">
            </a>
        </div>

        <?php if (isset($post_type) && $post_type == "front-page") : ?>
            <div class="hero-container">
                <h2 class="hero__text">
                    Wij zijn een dierenartsenpraktijk voor gezelschapsdieren, paarden en landbouwhuisdieren.
                </h2>
                <a href="#contact" class="hero__button button">Afspraak maken</a>
            </div>

        <?php elseif (isset($post_type) && $post_type == "archive") : ?>
            <div class="hero-container">
                <h1 class="hero__title">Archief</h1>
                <h2 class="hero__text">
                    Op deze pagina kunt u onze artikels nalezen
                </h2>
            </div>

        <?php endif; ?>
    </div>
</header>