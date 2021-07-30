<?php
/*
Template Name: For families page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="for-families page container">
    <p class="page__subtitle">
        The following information is to help parents and carers to understand more about early childhood education and care and provides links to important resources.
    </p>
    <section class="info info--no-bg">
        <div class="info__container">
            <div class="info__list">

                <?php if (get_field('info_link_1', 'option')) {$link = get_field('info_link_1', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--orange">
                    <b>Australian Children’s Education and Care Quality Authority(ACECQA)</b> is a national body that assists State
                    governments in implementing the National Quality Framework (NQF) for children’s education and care.
                </a>

                <?php if (get_field('info_link_2', 'option')) {$link = get_field('info_link_2', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--blue info__has-flower info__has-flower--3">
                    <b>The National Quality Framework (NQF)</b> provides a national approach to regulation, assessment and quality
                    improvement for early childhood education and care.
                </a>

                <?php if (get_field('info_link_3', 'option')) {$link = get_field('info_link_3', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--green info__has-flower info__has-flower--4">
                    The National Quality Framework(NQF) operates under <b>the Education and Care Services National Law</b> and <b>the
                        National Regulations.</b>
                </a>

                <?php if (get_field('info_link_4', 'option')) {$link = get_field('info_link_4', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--orange">
                    <b>Starting Blocks</b> provides parents with information about early childhood education and care.
                </a>

                <?php if (get_field('info_link_5', 'option')) {$link = get_field('info_link_5', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--blue">
                    <b>Raising Children network</b> is a Government funded website reviewed by experts with free, up-to-date
                    information for young parents.
                </a>

                <?php if (get_field('info_link_6', 'option')) {$link = get_field('info_link_6', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--green">
                    <b>Regulatory Authority:</b> NSW Early Childhood Education and Care Directorate Department of Education and
                    Communities.
                </a>

                <?php if (get_field('info_link_7', 'option')) {$link = get_field('info_link_7', 'option');} else {$link = '';} ?>
                <a href="<?=$link ?>" class="info__item info__item--brown info__has-flower info__has-flower--5">
                    <b>Sea Urchins Childcare – Centre Policies</b> (access restricted to parents and carers)
                </a>

            </div>
        </div>
    </section>
</section>

<?php
$has_error = true;

if( isset($_POST['request']) ) {
    if ( isset($_POST['password']) ) {
        if( trim($_POST['password']) !== '' ) {
            if (trim($_POST['password']) == trim(get_field('password'))) {
                $has_error = false;
            }
        }
    }

    if ($has_error) {
        $password_label = 'Incorrect password, try again';
        $label_style = 'style="color: red;"';
    }

} else {
    $password_label = 'Enter password';
    $label_style = '';
}
?>

<section class="request request--no-bg container" id="request">
    <p class="title title--green" style="margin-top: 0; margin-bottom: 20px;">Documents</p>
    <p style="text-align: center; margin-left: auto; margin-right: auto;" class="request__offer request__offer--small">
        To view the policy documents, please contact us and we will share the password with you.
    </p>
    <?php if ($has_error) : ?>
        <form class="request__form" action="<?php the_permalink(); ?>#request" method="post">
            <label class="request__text-block">
                <span class="request__label" <?=$label_style ?>>
                    <?=$password_label ?>
                </span>
                <input class="request__input" name="password" type="text" value="" required="">
            </label>
            <button class="button request__submit">Enter</button>
            <input type="hidden" name="request" value="true">
        </form>
    <?php else : ?>
        <?php if( have_rows('documents_list') ) : ?>
            <ul>
                <?php while ( have_rows('documents_list') ) : the_row(); ?>
                    <?php $file = get_sub_field('file'); ?>
                    <li style="color: #03405c;">
                        <a href="<?=$file['url'] ?>" target="_blank" style="color: #03405c;"><?=$file['title'] ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</section>

<?php
get_template_part('template-parts/callback');

get_footer();
