<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="first first--inner">
        <?php get_template_part('template-parts/page-header'); ?>

        <section class="usp usp--room container">

            <?php if (get_field('icon')) : ?>
                <div class="usp__room-icon-container">
                    <img class="usp__room-icon" src="<?=get_field('icon') ?>">
                </div>
            <?php endif; ?>

            <div class="usp__left">
                <div class="usp__title-container">
                    <?php if (get_field('page_title')) : ?>
                        <h1 class="usp__title title title--green">
                            <?=get_field('page_title') ?>
                        </h1>
                    <?php endif; ?>
                    <img class="usp__start usp__start--1" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                    <img class="usp__start usp__start--2" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                    <img class="usp__start usp__start--3" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                    <img class="usp__start usp__start--4" src="<?=get_template_directory_uri()?>/assets/img/star.png" width="19" height="25" alt="Start">
                </div>
                <?php if (get_field('age')) : ?>
                    <p class="usp__age">
                        <?=get_field('age') ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if (get_field('first_block_image')) : ?>
                <div class="usp__right" id="usp__right">
                    <div class="usp__cloud usp__cloud--single usp__cloud--animation" data-id="1" id="usp__cloud--1">
                        <img class="usp__cloud-pic" src="<?=get_field('first_block_image') ?>" width="761" height="551" alt="Kids">
                    </div>
                </div>
            <?php endif; ?>
        </section>
    </div>

    <section class="room container">
        <div class="room__quote room__quote--whales">
            <?php if (get_field('icon')) : ?>
                <div class="room__icon-container">
                    <img class="room__icon" src="<?=get_field('icon') ?>">
                </div>
            <?php endif; ?>
            <p class="room__quote-text">‘Play is the highest form of research.’</p>
            <p class="room__quote-author">Albert Einstein</p>
        </div>
        <div class="room__desc">
            <?php if (get_field('desc_img')) : ?>
                <img class="room__img" src="<?=get_field('desc_img') ?>" width="299" height="425" alt="">
            <?php endif; ?>
            <?php if (get_field('desc_text')) : ?>
                <div class="room__desc-right">
                    <?=get_field('desc_text') ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="program container">
        <h2 class="program__title title title--green">Our Program</h2>
        <p class="program__subtitle">
            Our program is based on <b>the National Early Years Learning Framework of Australia.</b> We aim to extend and enrich children’s learning, with particular emphasis on play based learning, effective communication, language, social and emotional development. Our philosophy is reflected in our program.
        </p>
        <div class="program__main">
            <div class="program__left">
                <p class="program__desc">
                    At <b>Sea Urchins Childcare Centre</b> all curriculum decision making, teaching and learning is guided by the <span class="program__desc--orange">Being</span> , <span class="program__desc--green">Belonging</span> and <span class="program__desc--blue">Becoming</span> - Early Years Learning Framework for Australia.
                </p>
            </div>
            <ul class="program__list">
                <li class="program__item program__item--orange">
                    <b>Belonging</b> is central to being and becoming in that it shapes who children are and who they can become.
                </li>
                <li class="program__item program__item--green">
                    <b>Being</b> recognises the significance of the here and now in children’s lives. Childhood is a time to be, to seek and make meaning of the world.
                </li>
                <li class="program__item program__item--blue">
                    <b>Becoming</b> reflects this process of rapid and significant change that occurs in the early years as young children learn and grow.
                </li>
            </ul>
        </div>
    </section>

    <section class="framework container">
        <h2 class="visually-hidden">The framework</h2>
        <p class="framework__title">
            The Framework puts children’s learning at the core and comprises three inter-related elements: <span class="framework__title--blue">Principles</span>, <span class="framework__title--green">Practice</span> and <span class="framework__title--orange">Learning</span> Outcomes.
        </p>

        <div class="framework__main">
            <div class="framework__left">
                <?php if (get_field('photo_1')) ?>
                    <img class="framework__pic" src="<?=get_field('photo_1') ?>" width="737" height="665" alt="">
                <?php ?>
                <?php if (get_field('photo_2')) ?>
                    <img class="framework__pic" src="<?=get_field('photo_2') ?>" width="737" height="665" alt="">
                <?php ?>
                <?php if (get_field('photo_3')) ?>
                    <img class="framework__pic" src="<?=get_field('photo_3') ?>" width="737" height="665" alt="">
                <?php ?>
            </div>
            <div class="framework__right">
                <?php if (get_field('photo_1')) ?>
                    <img class="framework__pic framework__pic--mobile" src="<?=get_field('photo_1') ?>" width="737" height="665" alt="">
                <?php ?>
                <p>The Principles underpinning our practice are:</p>
                <ul>
                    <li>Secure, respectful and reciprocal relationships.</li>
                    <li>Partnerships with parents.</li>
                    <li>High expectations and equity.</li>
                    <li>Respect for diversity.</li>
                    <li>Ongoing learning and reflective practice.</li>
                </ul>
                <?php if (get_field('photo_2')) ?>
                    <img class="framework__pic framework__pic--mobile" src="<?=get_field('photo_2') ?>" width="737" height="665" alt="">
                <?php ?>
                <p>The principles of early childhood pedagogy underpin practice. Educators draw on a rich repertoire of pedagogical practices to promote children’s learning by:</p>
                <ul>
                    <li>adopting holistic approaches;</li>
                    <li>being responsive to children;</li>
                    <li>planning and implementing learning through play;</li>
                    <li>intentional teaching;</li>
                    <li>creating physical and social learning environments that have a positive impact on children’s learning;</li>
                    <li>valuing the cultural and social contexts of children and their families;</li>
                    <li>providing for continuity in experiences and enabling children to have successful transition;</li>
                    <li>assessing and monitoring children’s learning to inform provision and to support children in achieving learning outcomes.</li>
                </ul>
                <?php if (get_field('photo_3')) ?>
                    <img class="framework__pic framework__pic--mobile" src="<?=get_field('photo_3') ?>" width="737" height="665" alt="">
                <?php ?>
                <p>The Framework conveys the highest expectations for all children’s learning from birth to five years and through the transitions to school. It communicates these expectations through the following five Learning Outcomes:</p>
                <ul>
                    <li>Children have a strong sense of identity.</li>
                    <li>Children are connected with and contribute to their world.</li>
                    <li>Children have a strong sense of wellbeing.</li>
                    <li>Children are confident and involved learners.</li>
                    <li>Children are effective communicators.</li>
                </ul>

                <?php if (get_field('button_link', 'option')) : ?>
                    <a href="<?=get_field('button_link', 'option') ?>" class="framework__button button">Enrol now</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php
get_template_part('template-parts/callback');

get_footer();
