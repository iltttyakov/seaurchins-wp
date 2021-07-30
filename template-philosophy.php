<?php
/*
Template Name: Philosophy page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="room container">
    <div class="room__quote">
        <p class="room__quote-text">‘Play is the highest form of research.’</p>
        <p class="room__quote-author">Albert Einstein</p>
    </div>
    <div class="room__desc">
        <?php if (get_field('values_image')) : ?>
        <img class="room__img" src="<?=get_field('values_image') ?>" width="299" height="259" alt="">
        <?php endif; ?>
        <?php if (get_field('values_text')) : ?>
            <div class="room__desc-right">
                <p><?=get_field('values_text') ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="values container">

    <?php if( have_rows('values_list') ): ?>
        <?php
        $position = -1;
        $i = 1;
        ?>
        <?php while ( have_rows('values_list') ) : the_row(); ?>
            <?php if ($position < 0) : ?>
                <div class="values__block">
                    <img class="values__pic" src="<?=get_sub_field('image') ?>" width="737" height="665" alt="">
                    <div class="values__text">
                        <?php foreach (get_sub_field('text_blocks') as $block) : ?>
                            <p class="values__flower values__flower--<?=$i ?>"><?=$block['block'] ?></p>
                            <?php
                            if ($i >= 5) {
                                $i = 1;
                            } else {
                                $i++;
                            }
                            $position *= -1;
                            ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="values__block">
                    <div class="values__text">
                        <?php foreach (get_sub_field('text_blocks') as $block) : ?>
                            <p class="values__flower values__flower--<?=$i ?>"><?=$block['block'] ?></p>
                            <?php
                            if ($i >= 5) {
                                $i = 1;
                            } else {
                                $i++;
                            }
                            $position *= -1;
                            ?>
                        <?php endforeach; ?>
                    </div>
                    <img class="values__pic" src="<?=get_sub_field('image') ?>" width="737" height="665" alt="">
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if (get_field('button_link', 'option')) : ?>
        <a href="<?=get_field('button_link', 'option') ?>" class="values__button button">Enrol now</a>
    <?php endif; ?>

</section>

<?php
get_template_part('template-parts/callback');

get_footer();