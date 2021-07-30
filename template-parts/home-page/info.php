<section class="info">
    <div class="info__container info__has-flower info__has-flower--1 container">
        <h2 class="info__title title title--white">Information for Families</h2>
        <p class="info__offer info__has-flower info__has-flower--2">
            The following information is to help parents and carers to understand more about early childhood education and
            care and provides links to important resources.
        </p>
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
