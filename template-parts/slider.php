<?php if( have_rows('slider_list', 'option') ): ?>
    <section class="programs__rooms rooms container">
        <h2 class="title title--green">How our children learn</h2>
        <div class="rooms__slider" id="rooms__slider">
            <?php while( have_rows('slider_list', 'option') ): the_row(); ?>
                <div class="rooms__wrapper">
                    <img class="" src="<?=get_sub_field('photo') ?>" width="560" height="402">
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>