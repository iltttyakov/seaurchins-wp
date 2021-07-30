<section class="about">
    <div class="about__container container">
        <img class="about__pictures" src="<?=get_template_directory_uri()?>/assets/img/ship.png" width="268" height="119" alt="Ship">
        <h2 class="about__title title title--green">Our Centre</h2>
        <div class="about__content">
            <?php if (get_field('centre_image')) : ?>
                <div class="about__img-container">
                    <img class="about__img" src="<?=get_field('centre_image') ?>" width="737" height="665" alt="Oue centre">
                </div>
            <?php endif; ?>
            <div class="about__right">
                <img class="about__urchin" id="about__urchin" src="<?=get_template_directory_uri()?>/assets/img/urchin.png" width="141" height="141" alt="Urchin">
                <?php if (get_field('centre_text')) : ?>
                    <?=get_field('centre_text') ?>
                <?php endif; ?>
                <?php if (get_field('philosophy')) : ?>
                    <a href="<?=get_field('philosophy') ?>" class="about__button button">Read more</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
