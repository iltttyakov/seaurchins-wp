<?php
$rooms = get_posts(array(
    'post_type' => 'room',
    'numberposts' => -1,
));
?>

<section class="programs" id="rooms">
    <div class="programs__container container">
        <h2 class="programs__title title title--green">Our Programs</h2>

        <?php if (get_field('programs_subtitle')) : ?>
            <p class="programs__offer"><?=get_field('programs_subtitle') ?></p>
        <?php endif; ?>

        <?php if( have_rows('programs_list') ): ?>
            <ul class="programs__list">
                <?php $i = 1; ?>
                <?php while ( have_rows('programs_list') ) : the_row(); ?>
                    <li class="programs__item programs__item--<?=$i ?>">
                        <?php $img = get_sub_field('icon'); ?>
                        <div class="programs__pic-container">
                            <img class="programs__pic" src="<?=$img['url'] ?>" width="<?=$img['width'] ?>" height="<?=$img['height'] ?>" alt="<?=get_sub_field('name') ?>">
                        </div>
                        <h3 class="programs__name"><?=get_sub_field('name') ?></h3>
                        <p class="programs__age"><?=get_sub_field('age') ?></p>
                        <p class="programs__desc"><?=get_sub_field('text') ?></p>
                        <a class="programs__link" href="<?=get_sub_field('page_link') ?>"></a>
                    </li>
                    <?php
                    if ($i >= 3) {
                        $i = 1;
                    } else {
                        $i++;
                    }
                    ?>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if ($rooms) : ?>
            <section class="programs__rooms rooms">
                <h2 class="rooms__title">Kids Time</h2>

                <form class="rooms__switch">
                    <?php
                    $count = 1;
                    $checked = 'checked';
                    ?>
                    <?php foreach ($rooms as $room) : ?>
                        <?php if(have_rows('room_slider_on_home', $room->ID)) : ?>
                            <div class="rooms__item">
                                <input class="rooms__checkbox visually-hidden" type="radio" name="room" value="<?=$room->post_name ?>" id="rooms-<?=$room->post_name ?>" <?=$checked ?>>
                                <label class="rooms__button rooms__button--<?=$count ?>" for="rooms-<?=$room->post_name ?>"><?=$room->post_name ?></label>
                            </div>
                            <?php
                            $checked = '';
                            if ($count < 3) {
                                $count++;
                            } else {
                                $count = 1;
                            }
                            ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </form>

                <?php $class = ''; ?>
                <?php foreach ($rooms as $room) : ?>
                    <?php if( have_rows('room_slider_on_home', $room->ID)) : ?>
                        <div class="rooms__slider <?=$class ?>" id="rooms__slider--<?=$room->post_name ?>">
                            <?php while ( have_rows('room_slider_on_home', $room->ID) ) : the_row(); ?>
                                <div class="rooms__wrapper">
                                    <img class="rooms__slider-pic" src="<?=get_sub_field('photo') ?>" width="560" height="402">
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php $class = 'visually-hidden'; ?>
                <?php endforeach; ?>

            </section>
        <?php endif; ?>

        <?php if (get_field('hours_of_operation')) : ?>
            <div class="programs__hours">
                <h3 class="programs__hours-title title title--green">HOURS OF OPERATION</h3>
                <p class="programs__hours-desc"><?=get_field('hours_of_operation') ?></p>
            </div>
        <?php endif; ?>

        <?php if (get_field('button_link', 'option')) : ?>
            <a href="<?=get_field('button_link', 'option') ?>" class="programs__button button">Enrol now</a>
        <?php endif; ?>

    </div>
</section>
