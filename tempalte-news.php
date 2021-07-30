<?php
/*
Template Name: News page
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
$args = array(
    'post_type' => 'post',
    'paged' => $paged,
);
$args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

$custom_query = new WP_Query($args);

// Pagination fix
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $custom_query;
?>

<section class="news container page">
    <?php if($custom_query->have_posts()) : ?>
        <ul class="news__list">
            <?php while($custom_query->have_posts()) : $custom_query->the_post(); ?>
                <li class="news__item">
                    <div class="news__block">
                        <img class="news__pic" src="<?=get_the_post_thumbnail_url() ?>" width="299" height="712" alt="<?=get_the_title() ?>">
                        <div class="news__right">
                            <?=get_the_content() ?>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>

        <div class="posts__pagination container">
            <?php
            $args = array(
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'end_size'     => 1,     // количество страниц на концах
                'mid_size'     => 1,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => __('« Previous'),
                'next_text'    => __('Next »'),
                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                'screen_reader_text' => __( 'Posts navigation' ),
            );
            echo get_the_posts_pagination($args)
            ?>
        </div>
    <?php else : ?>
        <div class="request__container container">
            <p class="title title--green">
                No news yet
            </p>
        </div>
    <?php endif; ?>
</section>


<?php
get_template_part('template-parts/callback');

get_footer();
