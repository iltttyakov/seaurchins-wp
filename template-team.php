<?php
/*
Template Name: Team page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>


<?php
$teachers = get_posts( array(
    'numberposts' => -1,
    'order'       => 'ASC',
    'post_type'   => 'teacher',
));
?>

<?php if ($teachers) : ?>
    <section class="teachers page">
        <div class="teachers__container container">
            <p class="teachers__subtitle page__subtitle">
                We believe that happy children learn better and we strive to provide the environment where children can feel safe and secure.
            </p>
            <ul class="teachers__list">
                <?php
                $colors = ['blue', 'green', 'orange'];
                $count = 0;
                ?>
                <?php foreach( $teachers as $teacher ) : ?>
                    <li class="teachers__item teachers__item--<?=$colors[$count] ?>">
                        <div class="teachers__left">
                            <div class="teachers__photo-container">
                                <img class="teachers__photo" src="<?=get_the_post_thumbnail_url($teacher->ID) ?>" width="351" height="311" alt="<?=$teacher->post_title ?>">
                            </div>
                            <div class="teachers__cloud">
                                <h3 class="teachers__name">
                                    <?=$teacher->post_title ?>
                                </h3>
                                <?php if (get_field('position', $teacher->ID)) : ?>
                                    <p class="team__position"><?=get_field('position', $teacher->ID) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="teachers__right">
                            <?=$teacher->post_content ?>
                        </div>
                    </li>
                    <?php
                    if ($count == 2) {
                        $count = 0;
                    } else {
                        $count++;
                    }
                    ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>

