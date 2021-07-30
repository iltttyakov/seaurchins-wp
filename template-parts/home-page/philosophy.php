<section class="philosophy">
    <div class="philosophy__container container">
        <h2 class="philosophy__title title title--green">Our Philosophy</h2>
        <div class="philosophy__content">
            <div class="philosophy__tree"></div>
            <div class="philosophy__column philosophy__column--left">

                <?php if (get_field('philosophy_1')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--1"><?=get_field('philosophy_1') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_2')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--2"><?=get_field('philosophy_2') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_3')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--3"><?=get_field('philosophy_3') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_4')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--4"><?=get_field('philosophy_4') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_5')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--5"><?=get_field('philosophy_5') ?></p>
                <?php endif; ?>
            </div>
            <div class="philosophy__column philosophy__column--right">

                <?php if (get_field('philosophy_6')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--6"><?=get_field('philosophy_6') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_7')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--7"><?=get_field('philosophy_7') ?></p>
                <?php endif; ?>

                <?php if (get_field('philosophy_8')) : ?>
                    <p class="philosophy__paragraph philosophy__paragraph--8"><?=get_field('philosophy_8') ?></p>
                <?php endif; ?>

            </div>
        </div>

        <?php if (get_field('philosophy_bottom')) : ?>
            <p class="philosophy__bottom"><?=get_field('philosophy_bottom') ?></p>
        <?php endif; ?>
    </div>
</section>
