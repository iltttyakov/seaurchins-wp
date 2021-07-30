<?php if( have_rows('advantages_list') ): ?>
    <section class="advantages">
        <div class="advantages__container container">
            <h2 class="advantages__title title title--green">
                <span class="title--blue">Happy</span> Children - <span class="title--blue">Happy</span> Parents
            </h2>
            <ul class="advantages__list">
                <?php while ( have_rows('advantages_list') ) : the_row(); ?>
                    <li class="advantages__item">
                        <?php $img = get_sub_field('icon') ?>
                        <div class="advantages__pic-container">
                            <img class="advantages__pic" src="<?=$img['url'] ?>" width="<?=$img['width'] ?>" height="<?=$img['height'] ?>" alt="Icon">
                        </div>
                        <h3 class="advantages__name">
                            <?=get_sub_field('name') ?>
                        </h3>
                        <p class="advantages__desc">
                            <?=get_sub_field('text') ?>
                        </p>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>