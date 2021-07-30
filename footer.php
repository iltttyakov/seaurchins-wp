<footer class="footer">
    <div class="container">
        <div class="footer__top">

            <div class="footer__logo-container">
                <img class="footer__logo" src="<?=get_template_directory_uri()?>/assets/img/logo.png" width="200" height="77" alt="Logo">
            </div>

            <?php
            wp_nav_menu( [
                'theme_location'  => 'footer-menu',
                'container'       => false,
                'menu_class'      => 'footer__menu menu',
            ]);
            ?>

        </div>

        <div class="footer__middle">

            <?php if (get_field('address', 'option')) : ?>
            <?php
            if (get_field('google_map_link', 'option')) {
                $link = '"href:' . get_field('google_map_link', 'option') . '"';
            } else {
                $link = '';
            }
            ?>
                <a <?=$link ?> class="footer__address"><?=get_field('address', 'option') ?></a>
            <?php endif; ?>

            <?php if (get_field('phone_number', 'option')) : ?>
                <a class="footer__tel" href="tel:<?=get_field('phone_number', 'option') ?>">
                    <?=get_field('phone_number', 'option') ?>
                </a>
            <?php endif; ?>

            <?php if (get_field('button_link', 'option')) : ?>
                <a href="<?=get_field('button_link', 'option') ?>" class="footer__button button">Enrol now</a>
            <?php endif; ?>

        </div>

        <p class="footer__copyright">©2020 seaurchinschildcare.com.au All rights reserved.</p>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>