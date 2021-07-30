<header class="header">
    <div class="header__container container">
        <?php if (is_front_page()) : ?>
            <div class="header__logo-container">
                <img class="header__logo" src="<?=get_template_directory_uri()?>/assets/img/logo.png" width="200" height="77" alt="Logo">
            </div>
        <?php else : ?>
            <a href="<?=get_home_url()  ?>" class="header__logo-container">
                <img class="header__logo" src="<?=get_template_directory_uri()?>/assets/img/logo.png" width="200" height="77" alt="Logo">
            </a>
        <?php endif; ?>

        <div class="header__bee bee">
            <img class="bee__pic" src="<?=get_template_directory_uri()?>/assets/img/bee.gif" width="50" height="50" alt="Bee">
        </div>

        <?php
        wp_nav_menu( [
            'theme_location'  => 'main-menu',
            'container'       => false,
            'menu_class'      => 'header__menu menu',
        ]);
        ?>
        <button class="header__burger burger">
            <span class="visually-hidden">Открыть меню</span>
        </button>
    </div>
</header>