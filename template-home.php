<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>

<div class="first">
    <?php get_template_part('template-parts/page-header'); ?>
    <section class="usp container">
        <div class="usp__left">
            <div class="usp__title-container">
                <h1 class="usp__title title title--green">
                    <span class="usp__title--small">Sea Urchins</span>
                    Childcare Centre
                </h1>
                <img class="usp__start usp__start--1" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                <img class="usp__start usp__start--2" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                <img class="usp__start usp__start--3" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                <img class="usp__start usp__start--4" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
            </div>
            <p class="usp__offer">
                With love and care in Harrington Waters
            </p>

            <?php if (get_field('button_link', 'option')) : ?>
                <a href="<?=get_field('button_link', 'option') ?>" class="usp__button button">Enrol now</a>
            <?php endif; ?>
        </div>
        <div class="usp__right" id="usp__right">
            <?php if (get_field('photo_1')) : ?>
                <div class="usp__cloud usp__cloud--1 usp__cloud--animation" data-id="1" id="usp__cloud--1">
                    <img class="usp__cloud-image" src="<?=get_field('photo_1') ?>" width="420" height="168" alt="Kids">
                </div>
            <?php endif; ?>
            <?php if (get_field('photo_2')) : ?>
                <div class="usp__cloud usp__cloud--2 usp__cloud--animation" data-id="2" id="usp__cloud--2">
                    <img class="usp__cloud-image" src="<?=get_field('photo_2') ?>" width="463" height="306" alt="Kids">
                </div>
            <?php endif; ?>
            <?php if (get_field('photo_3')) : ?>
                <div class="usp__cloud usp__cloud--3 usp__cloud--animation" data-id="3" id="usp__cloud--3">
                    <img class="usp__cloud-image" src="<?=get_field('photo_3') ?>" width="293" height="123" alt="Kids">
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php

get_template_part('template-parts/home-page/quote');
get_template_part('template-parts/home-page/advantages');
get_template_part('template-parts/home-page/about');
get_template_part('template-parts/home-page/philosophy');
get_template_part('template-parts/home-page/programs');
get_template_part('template-parts/home-page/info');
get_template_part('template-parts/home-page/contribution');
get_template_part('template-parts/home-page/team');
get_template_part('template-parts/callback');

get_footer();