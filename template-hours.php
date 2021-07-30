<?php
/*
Template Name: Hours of operation page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="hours container">
    <h2 class="hours__title">Sea Urchins Childcare Centre is open</h2>
    <p class="hours__time">from <span class="hours__time--value"><?=get_field('from') ?></span> to <span class="hours__time--value"><?=get_field('to') ?></span></p>
    <p class="hours__undertext">
        The centre is open for 50 wks of the year,<br>
        closing for two weeks over the Christmas and New Year Period.
    </p>
</section>

<?php
get_template_part('template-parts/slider');
get_footer();

