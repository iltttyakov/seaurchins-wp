<?php
$teachers = get_posts( array(
    'numberposts' => -1,
    'order'       => 'ASC',
    'post_type'   => 'teacher',
));
?>

<?php if ($teachers) : ?>
    <section class="team">
        <div class="team__container container">
            <h2 class="team__title title title--green">Our wonderful team</h2>
            <div class="team__slider">


                <?php
                $colors = ['blue', 'green', 'orange'];
                $count = 0;
                ?>
                <?php foreach( $teachers as $teacher ) : ?>
                    <div class="team__wrapper">
                        <div class="team__item team__item--<?=$colors[$count] ?>">
                            <div class="team__photo-container">
                                <img class="team__photo" src="<?=get_the_post_thumbnail_url($teacher->ID) ?>" width="370" height="328" alt="<?=$teacher->post_title; ?>">
                            </div>
                            <div class="team__bottom">
                                <h3 class="team__name"><?=$teacher->post_title; ?></h3>
                                <?php if (get_field('position', $teacher->ID)) : ?>
                                    <p class="team__position"><?=get_field('position', $teacher->ID) ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="team__text-block team__text-block--blue">
                                <div class="team__scroll-block">
                                    <?=$teacher->post_content ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($count == 2) {
                        $count = 0;
                    } else {
                        $count++;
                    }
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>