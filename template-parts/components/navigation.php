<ul class="nav <?php if (isset($post_type)) : echo 'nav--'.$post_type ; endif; ?>">
    <li class="nav__item"><a class="nav__link" href="<?php echo HTTP; ?>">Home</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo HTTP; ?>#blog">Blog</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo HTTP; ?>#team">Team</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo HTTP; ?>#contact">Contact</a></li>
</ul>