<section class="contribution">
    <div class="contribution__container container">
        <h2 class="contribution__title title title--green">Creating Our Community’s Future</h2>
        <p class="contribution__offer">The dispositions and attributes that we endeavour to develop in our children so that
            they can be confident learners who are socially competent and emotionally strong.</p>
        <div class="contribution__content">
            <div class="contribution__left">
                <h3 class="contribution__list-title">UNDER THE EYLF CONCEPT OF BELONGING</h3>
                <ul class="contribution__list">
                    <li class="contribution__item">
                        Respectful,
                    </li>
                    <li class="contribution__item">
                        Cooperative,
                    </li>
                    <li class="contribution__item">
                        Caring,
                    </li>
                    <li class="contribution__item">
                        Inclusive,
                    </li>
                    <li class="contribution__item">
                        Empathetic.
                    </li>
                </ul>
                <h3 class="contribution__list-title">UNDER THE EYLF CONCEPT OF BEING</h3>
                <ul class="contribution__list">
                    <li class="contribution__item">
                        Confident,
                    </li>
                    <li class="contribution__item">
                        Curious,
                    </li>
                    <li class="contribution__item">
                        Enthusiastic,
                    </li>
                    <li class="contribution__item">
                        Independent,
                    </li>
                    <li class="contribution__item">
                        Appreciative,
                    </li>
                    <li class="contribution__item">
                        Creative.
                    </li>
                </ul>
                <h3 class="contribution__list-title">UNDER THE EYLF CONCEPT OF BECOMING</h3>
                <ul class="contribution__list">
                    <li class="contribution__item">
                        Knowledgeable,
                    </li>
                    <li class="contribution__item">
                        Communicators,
                    </li>
                    <li class="contribution__item">
                        Principled,
                    </li>
                    <li class="contribution__item">
                        Resilient,
                    </li>
                    <li class="contribution__item">
                        Responsible,
                    </li>
                    <li class="contribution__item">
                        Reflective.
                    </li>
                </ul>
            </div>
            <?php if (have_rows('community_future_slider')) : ?>
                <div class="contribution__img-container">
                    <div class="contribution__control-container">
                        <button class="contribution__slide-control contribution__slide-control--prev">←</button>
                        <button class="contribution__slide-control contribution__slide-control--next">→</button>
                    </div>
                    <a href="<?=get_field('community_future_slider')[0]['photo'] ?>" data-lightbox="roadtrip">
                        <img class="contribution__img" src="<?=get_template_directory_uri()?>/assets/img/contribution-img.png" width="868" height="885" alt="Contribution">
                    </a>
                    <div class="contribution__slider">
                        <?php $active = 'contribution__slider-pic--active'; ?>
                        <?php while ( have_rows('community_future_slider') ) : the_row(); ?>
                            <img class="contribution__slider-pic <?=$active ?>" src="<?=get_sub_field('photo') ?>" width="486" height="648" alt="">
                            <?php $active = ''; ?>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    $slider = get_field('community_future_slider');
                    ?>
                    <?php for ($i = 1; $i < count($slider); $i++) : ?>
                        <a class="" href="<?=$slider[$i]['photo'] ?>" data-lightbox="roadtrip"></a>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
