<?php
/*
Template Name: City page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="city page">
    <div class="city__block city__block--1 about about--city container">
        <div class="about__content about__content--center about__content">
            <?php if (get_field('top_image')) : ?>
                <div class="about__img-container">
                    <img class="about__img" src="<?=get_field('top_image') ?>" width="737" height="665" alt="Harrington">
                </div>
            <?php endif; ?>
            <?php if (get_field('top_text')) : ?>
                <div class="about__right">
                    <?=get_field('top_text') ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if (get_field('middle_photo')) : ?>
        <img class="city__block city__block--2 city__big-pic" src="<?=get_field('middle_photo') ?>" width="1920" height="640" alt="">
    <?php endif; ?>

    <div class="city__block city__block--3 city__about--2 about about--city container">
        <div class="about__content about__content--bottom about__content--reverse">

            <?php if (get_field('bottom_text')) : ?>
                <div class="about__right">
                    <?=get_field('bottom_text') ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('bottom_image')) : ?>
                <div class="about__img-container">
                    <img class="about__img" src="<?=get_field('bottom_image') ?>" width="737" height="665" alt="Harrington">
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="city__photo-row">

        <?php if (get_field('bottom_photo_1')) : ?>
            <img class="city__big-pic city__big-pic--small" src="<?=get_field('bottom_photo_1') ?>" width="995" height="640">
        <?php endif; ?>

        <?php if (get_field('bottom_photo_2')) : ?>
            <img class="city__big-pic city__big-pic--small" src="<?=get_field('bottom_photo_2') ?>" width="995" height="640">
        <?php endif; ?>

    </div>
</section>

<?php
get_template_part('template-parts/callback');

get_footer();

