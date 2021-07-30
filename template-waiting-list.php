<?php
/*
Template Name: Waiting list page
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
$fields = [
    'parent_name' =>'Name (Parent/Guardian):',
    'parent_email' => 'Email:',
    'parent_phone' => 'Contact phone number:',
    'child_name' => 'Child\'s name:',
    'child_birth_date' => 'Child\'s date of birth:',
    'proposed_start_date' => 'Proposed Start Date:',
    'days_flexible' => 'Flexible with Days:',
    'days_of_care' => 'Days of care required:',
    'comment' => 'Comment:',
];

$is_submitted = false;

if ( isset($_POST['submitted']) ) {

    $doc = create_pdf_from_waiting_list($fields, $_POST);
    send_pdf('SeaUrchins | Waiting list', $doc);

    $is_submitted = true;
}
?>

<section class="request">
    <?php if (!$is_submitted) : ?>
        <div class="request__container container">
            <p class="request__offer">
                If you would like your child to be placed on our waiting list/or receive a copy of our enrolment form please complete the following details below and click submit.
            </p>
            <form class="request__form" action="<?php the_permalink(); ?>" method="post">

                <label class="request__text-block">
                    <span class="request__label">Name(Parent/Guardian):</span>
                    <input name="parent_name" class="request__input" type="text" required>
                </label>

                <label class="request__text-block">
                    <span class="request__label">Email:</span>
                    <input name="parent_email" class="request__input" type="email" required>
                </label>

                <label class="request__text-block">
                    <span class="request__label">Contact phone number:</span>
                    <input name="parent_phone" class="request__input" type="tel" required>
                </label>

                <label class="request__text-block">
                    <span class="request__label">Child’s name:</span>
                    <input name="child_name" class="request__input" type="text" required>
                </label>

                <label class="request__text-block">
                    <span class="request__label">Child’s date of birth:</span>
                    <input name="child_birth_date" class="request__input" type="date" required>
                </label>

                <label class="request__text-block">
                    <span class="request__label">Proposed Start Date:</span>
                    <input name="proposed_start_date" class="request__input" type="date" required>
                </label>

                <div class="request__form-block">
                    <p class="request__label">Are you flexible with Days?</p>
                    <div class="request__checkbox-group">
                        <input name="days_flexible" class="request__checkbox visually-hidden" type="radio" value="yes" id="flexible-yes">
                        <label class="request__checkbox-label" for="flexible-yes">Yes</label>
                    </div>
                    <div class="request__checkbox-group">
                        <input name="days_flexible" class="request__checkbox visually-hidden" type="radio" value="no" id="flexible-no">
                        <label class="request__checkbox-label" for="flexible-no">No</label>
                    </div>
                </div>

                <div class="request__form-block">
                    <p class="request__label">DAYS OF CARE REQUIRED: (Please choose)</p>
                    <ul class="request__days-list">
                        <li class="request__days-item">
                            <input name="days_of_care[]" class="request__checkbox visually-hidden" type="checkbox" value="Monday" id="Monday">
                            <label class="request__checkbox-label request__checkbox-label--column" for="Monday">Monday</label>
                        </li>
                        <li class="request__days-item">
                            <input name="days_of_care[]" class="request__checkbox visually-hidden" type="checkbox" value="Tuesday" id="Tuesday">
                            <label class="request__checkbox-label request__checkbox-label--column" for="Tuesday">Tuesday</label>
                        </li>
                        <li class="request__days-item">
                            <input name="days_of_care[]" class="request__checkbox visually-hidden" type="checkbox" value="Wednesday" id="Wednesday">
                            <label class="request__checkbox-label request__checkbox-label--column" for="Wednesday">Wednesday</label>
                        </li>
                        <li class="request__days-item">
                            <input name="days_of_care[]" class="request__checkbox visually-hidden" type="checkbox" value="Thursday" id="Thursday">
                            <label class="request__checkbox-label request__checkbox-label--column" for="Thursday">Thursday</label>
                        </li>
                        <li class="request__days-item">
                            <input name="days_of_care[]" class="request__checkbox visually-hidden" type="checkbox" value="Friday" id="Friday">
                            <label class="request__checkbox-label request__checkbox-label--column" for="Friday">Friday</label>
                        </li>
                    </ul>
                </div>

                <label class="request__text-block">
                    <span class="request__label">Comment (optional)</span>
                    <input name="comment" class="request__input" type="text">
                </label>

                <button type="submit" class="button request__submit">Submit Form</button>
                <input type="hidden" name="submitted" value="true">

            </form>
        </div>
    <?php else : ?>
        <div class="request__container container">
            <p class="title title--green">
                Application sent successfully. We will contact you shortly
            </p>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

