<?php
/*
Template Name: Contacts page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="contacts">
    <h2 class="visually-hidden">Our contacts</h2>
    <div class="contacts__container container">

        <?php if (get_field('map', 'option')) : ?>
            <div class="contacts__map">
                <?=get_field('map', 'option') ?>
            </div>
        <?php endif; ?>

        <div class="contacts__right">

            <?php if (get_field('address', 'option')) : ?>
                <div class="contacts__block">
                    <h3 class="contacts__title">
                        We are located
                    </h3>
                    <p class="contacts__item contacts__item--place">
                        <?=get_field('address', 'option') ?>
                    </p>
                </div>
            <?php endif; ?>

            <div class="contacts__block">
                <h3 class="contacts__title">
                    Our contacts
                </h3>
                <?php if (get_field('phone_number', 'option')) : ?>
                    <a class="contacts__item contacts__item--tel" href="tel:<?=get_field('phone_number', 'option') ?>">
                        <?=get_field('phone_number', 'option') ?>
                    </a>
                <?php endif; ?>
                <?php if (get_field('email', 'option')) : ?>
                    <a class="contacts__item contacts__item--email" href="mailto:<?=get_field('email', 'option') ?>">
                        Email
                    </a>
                <?php endif; ?>
            </div>

            <?php if (get_field('button_link', 'option')) : ?>
                <a href="<?=get_field('button_link', 'option') ?>" class="contacts__button button">Enrol now</a>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php
get_template_part('template-parts/callback');

get_footer();