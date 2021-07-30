<section class="usp usp--inner container">
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
    </div>
    <?php if (get_field('first_block_image')) : ?>
        <div class="usp__right" id="usp__right">
            <div class="usp__cloud usp__cloud--single usp__cloud--animation" data-id="1" id="usp__cloud--1">
                <img class="usp__cloud-pic" src="<?=get_field('first_block_image') ?>" width="761" height="551" alt="Kids">
            </div>
        </div>
    <?php endif; ?>
</section>