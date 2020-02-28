<main>
    <div class="about__outer-container" id="about">
        <div class="about__inner-container">
            <div class="about__carousel carousel">
                <div class="about__carousel-item">
                    <img src="<?php echo HTTP; ?>dist/gfx/icons/icon_hospital.svg" alt="Kom naar onze dierenkliniek!" class="about__icon">
                    <p class="about__text">Wij zijn een dierenartsenpraktijk voor gezelschapsdieren, paarden en landbouwhuisdieren</p>
                </div>
                <div class="about__carousel-item">
                    <img src="<?php echo HTTP; ?>dist/gfx/icons/icon_blog.svg" alt="Neem een kijkje op onze blog!" class="about__icon">
                    <p class="about__text">In onze blog kunt u bijhouden wat ons interesseert in de industrie of nieuwtjes over de praktijk lezen</p>
                </div>
                <div class="about__carousel-item">
                    <img src="<?php echo HTTP; ?>dist/gfx/icons/icon_ipad.svg" alt="Voor een afspraak, bel ons!" class="about__icon">
                    <p class="about__text">Voor het maken van een afspraak, bij voorkeur telefonisch contact opnemen</p>
                </div>
            </div>
        </div>

        <div class="controls controls--about">
            <img src="<?php echo HTTP; ?>dist/gfx/icons/icon_arrow-right.svg" alt="Scroll voor meer content" class="controls__icon">
            <div class="controls__text">Scroll voor meer</div>
        </div>
    </div>

    <div class="h-container" id="blog">
        <h2 class="blog__title title">Blog</h2>
        <div class="blog__items">

            <div class="blog__item">
                <h3 class="blog__headline">
                    <a href="<?php echo HTTP; ?>content/blog/2020/wearables-voor-huisdieren" class="blog__headline-link">
                        <?php the_title('content/blog/2020/wearables-voor-huisdieren.php'); ?>
                    </a>
                </h3>
                <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/wearables-voor-huisdieren.php'); ?></p>
                <div class="blog__links-container">
                    <a href="<?php echo HTTP; ?>content/blog/2020/wearables-voor-huisdieren.php" class="blog__readmore">> Lees meer</a>
                    <a href="<?php echo HTTP; ?>content/blog/archive" class="blog__metadata"><?php the_date('content/blog/2020/wearables-voor-huisdieren.php') ?></a>
                </div>
            </div>


            <div class="blog__item">
                <h3 class="blog__headline">
                    <a href="<?php echo HTTP; ?>content/blog/2020/wolven-apporteren" class="blog__headline-link">
                        <?php the_title('content/blog/2020/wolven-apporteren.php'); ?>
                    </a>
                </h3>
                <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/wolven-apporteren.php'); ?></p>
                <div class="blog__links-container">
                    <a href="<?php echo HTTP; ?>content/blog/2020/wolven-apporteren.php" class="blog__readmore">> Lees meer</a>
                    <a href="<?php echo HTTP; ?>content/blog/archive" class="blog__metadata"><?php the_date('content/blog/2020/wolven-apporteren.php') ?></a>
                </div>
            </div>

            <div class="blog__item">
                <h3 class="blog__headline">
                    <a href="<?php echo HTTP; ?>content/blog/2020/hondenbezit-beinvloed-door-genen" class="blog__headline-link">
                        <?php the_title('content/blog/2020/hondenbezit-beinvloed-door-genen.php'); ?>
                    </a>
                </h3>
                <p class="blog__excerpt"><?php the_excerpt('content/blog/2020/hondenbezit-beinvloed-door-genen.php'); ?></p>
                <div class="blog__links-container">
                    <a href="<?php echo HTTP; ?>content/blog/2020/hondenbezit-beinvloed-door-genen.php" class="blog__readmore">> Lees meer</a>
                    <a href="<?php echo HTTP; ?>content/blog/archive" class="blog__metadata"><?php the_date('content/blog/2020/hondenbezit-beinvloed-door-genen.php') ?></a>
                </div>
            </div>

        </div>
    </div>

    <div class="team__outer-container" id="team">
        <div class="team__inner-container">
            <div class="team__title title">Team</div>
            <div class="team__carousel carousel">
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        J.M.M. Graafmans
                    </div>
                    <div class="team__member-position">
                        Dierenarts
                    </div>
                </div>
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        P.A. van Baren
                    </div>
                    <div class="team__member-position">
                        Dierenarts
                    </div>
                </div>
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        E. Meulenman &mdash; van Empel
                    </div>
                    <div class="team__member-position">
                        Dierenarts
                    </div>
                </div>
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        J.W. Kromhout
                    </div>
                    <div class="team__member-position">
                        Dierenarts
                    </div>
                </div>
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        K. Poppe
                    </div>
                    <div class="team__member-position">
                        Dierenarts
                    </div>
                </div>
                <div class="team__carousel-item">
                    <div class="team__member-name">
                        L. Raggers
                    </div>
                    <div class="team__member-position">
                        Paraveterinair
                    </div>
                </div>
            </div>
        </div>
        <div class="controls">
            <img src="<?php echo HTTP; ?>/dist/gfx/icons/icon_arrow-right.svg" alt="Scroll voor meer content" class="controls__icon">
            <div class="controls__text">Scroll voor meer</div>
        </div>
    </div>
</main>