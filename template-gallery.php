<?php
/*
Template Name: Gallery page
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="first first--inner">
        <?php
        get_template_part('template-parts/page-header');
        get_template_part('template-parts/usp-inner');
        ?>
    </div>

    <section class="gallery page container">
        <p class="gallery__subtitle page__subtitle">
            <b>Our vision</b> is to develop a centre that has happy and resilient children who find learning fun. A space that they can call their own as they will have a strong sense of belonging. A centre with a special focus on music and art.
        </p>

        <?php if( have_rows('gallery_indoors') ): ?>
            <div class="gallery__block">
                <div class="gallery__icon-container">
                    <img class="gallery__icon" src="<?=get_template_directory_uri()?>/assets/img/gallery-icon-indoors.png" width="371" height="366" alt="Learning indoors">
                </div>
                <?php while ( have_rows('gallery_indoors') ) : the_row(); ?>
                    <img class="gallery__pic" src="<?=get_sub_field('photo') ?>" width="370" height="370" alt="">
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( have_rows('gallery_outdoors') ): ?>
            <div class="gallery__block">
                <div class="gallery__icon-container">
                    <img class="gallery__icon" src="<?=get_template_directory_uri()?>/assets/img/gallery-icon-outdoors.png" width="372" height="373" alt="Learning outdoors">
                </div>
                <?php while ( have_rows('gallery_outdoors') ) : the_row(); ?>
                    <img class="gallery__pic" src="<?=get_sub_field('photo') ?>" width="370" height="370" alt="">
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if( have_rows('gallery_creativity') ): ?>
            <div class="gallery__block">
                <div class="gallery__icon-container">
                    <img class="gallery__icon" src="<?=get_template_directory_uri()?>/assets/img/gallery-icon-creativity.png" width="370" height="380" alt="Developing creativity">
                </div>
                <?php while ( have_rows('gallery_creativity') ) : the_row(); ?>
                    <img class="gallery__pic" src="<?=get_sub_field('photo') ?>" width="370" height="370" alt="">
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </section>

<?php endwhile; ?>

<?php get_footer(); ?>

