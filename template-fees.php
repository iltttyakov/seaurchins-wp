<?php
/*
Template Name: Fees page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="fees page">
    <div class="container">
        <p class="page__subtitle">
            Fees are payable in advance for every day of your child’s enrolment including public holidays, sick days and parent holidays. This excludes the weeks over Christmas when the Centre is closed.
        </p>
    </div>
    <div class="fees__main container">
        <div class="fees__column">
            <div class="fees__column-content">
                <p class="fees__time">8 am - 4 pm</p>
                <p class="fees__price"><span class="fees__bubble fees__bubble--1">$87</span> per day</p>
            </div>
        </div>
        <div class="fees__column">
            <div class="fees__column-content">
                <p class="fees__time">7:30 am - 5:30 pm</p>
                <p class="fees__price"><span class="fees__bubble fees__bubble--2">$91</span> per day</p>
            </div>
        </div>
    </div>
    <p class="fees__under">
        <span class="fees__under--orange">Child Care Subsidy (CCS)</span> is available to all parents who are eligible and is received as reduced fees through the service.
    </p>
</section>

<?php
get_template_part('template-parts/slider');
get_footer();
