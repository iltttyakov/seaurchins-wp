<?php
$labels = [
    'child' => [
        'given_names' => 'Child\'s given names:',
        'surname' => 'Surname',
        'crn' => 'CRN',
        'other_names_known_by' => 'Former/other names known by',
        'address' => 'Address',
        'dob' => 'D.O.B.',
        'place_of_birth' => 'Place of birth',
        'gender' => 'Gender',
        'cultural_background' => 'Cultural background',
        'religion' => 'Religion',
    ],

    'mother' => [
        'name' => 'Name',
        'dob' => 'D.O.B.',
        'crn' => 'CRN',
        'other_names_known_by' => 'Other names known by',
        'country_of_birth' => 'Country of birth',
        'cultural_background' => 'Cultural background',
        'address' => 'Address',
        'phone' => 'Phone',
        'mobile' => 'Mobile',
        'email' => 'Email',
        'occupation' => 'Occupation',
        'place_of_work' => 'Place of work',
        'work_phone' => 'Work phone',
    ],

    'father' => [
        'name' => 'Name',
        'dob' => 'D.O.B.',
        'crn' => 'CRN',
        'other_names_known_by' => 'Other names known by',
        'country_of_birth' => 'Country of birth',
        'cultural_background' => 'Cultural background',
        'address' => 'Address',
        'phone' => 'Phone',
        'mobile' => 'Mobile',
        'email' => 'Email',
        'occupation' => 'Occupation',
        'place_of_work' => 'Place of work',
        'work_phone' => 'Work phone',
    ],

    'other' => [
        'other_children' => 'Other children in family',
        'main_language' => 'Main language at home',
        'any_other_household' => 'Any other household members',
        'any_other_language' => 'Any other language at home',
    ],

    'emergency_contacts' => [
        'name' => 'Name',
        'address' => 'Address',
        'home_phone' => 'Home Phone',
        'work_phone' => 'Work Phone',
        'mobile' => 'Mobile',
        'relationship_to_child' => 'Relationship to child',
        'authorise' => 'Tick to Authorise',
    ],

    'unauthorised_to_collect' => [
        'name' => 'Name',
        'address' => 'Address',
        'relationship_to_child' => 'Relationship to child',
    ],

    'doctor' => [
        'name' => 'Name',
        'address' => 'Address',
        'phone' => 'Phone',
        'medicare_number' => 'Medicare Number',
        'health_care_fund' => 'Health Care Fund',
    ],

    'dentist' => [
        'name' => 'Name',
        'address' => 'Address',
        'phone' => 'Phone',
    ],

    'medical' => [
        'immunised' => 'Child fully immunised',
        'simmunisation_history' => 'Simmunisation history',
        'specific_health_care_needs' => 'Specific health care needs',
        'risk_of_anaphylaxis' => 'Risk of anaphylaxis',
        'risk_of_anaphylaxis_details' => 'Risk of anaphylaxis details',
        'medical_management_plan' => 'Medical management plan',
        'regular_treatment' => 'Medication or treatment on a regular basis',
        'regular_treatment_details' => 'Medication or treatment on a regular basis details',
        'disability_or_special_need' => 'Diagnosed disability or special need',
        'disability_or_special_need_details' => 'Diagnosed disability or special need details',
        'other_services' => 'Other services',
        'other_services_details' => 'Other services details',
    ],

    'child_info' => [
        'smile' => 'Smile',
        'sit' => 'Sit',
        'crawl' => 'Crawl',
        'walk' => 'Walk',
        'first_word' => 'Say First Word',
        'speak_well' => 'Speak well',
        'daytime_sleep' => 'Daytime sleep',
        'daytime_sleep_times' => 'Times',
        'special_habits_or_fears' => 'Any special habits or fears',
        'toilet_trained' => 'Toilet trained',
        'toilet_words' => 'Toilet words or indicators',
        'bottle_or_cup' => 'Bottle or a cup',
        'important_information' => 'Important information',
        'disturbing_areas' => 'Disturbing areas of development',
        'childcare_subsidy' => 'Childcare subsidy',
        'no_number_of_eligible_hours' => 'No Number of eligible hours',
        'children_in_care' => 'Number of children in care',
    ],

    'booking_form' => [
        'name' => 'Child\'s name',
        'dob' => 'D.O.B.',
        'beginning_on' => 'Beginning on',
        'session' => 'Session',
        'days' => 'Days of care',
        'room' => 'Room',
    ]

];

$is_submitted = false;

if ( isset($_POST['submitted']) ) {

    $doc = create_pdf_from_enrolment($labels, $_POST);
    send_pdf('SeaUrchins | Enrolment', $doc);

    $is_submitted = true;
}
?>

<?php
/*
Template Name: Enrolment page
*/
?>

<?php get_header(); ?>

<div class="first first--inner">
    <?php
    get_template_part('template-parts/page-header');
    get_template_part('template-parts/usp-inner');
    ?>
</div>

<section class="request request--no-bg">
    <div class="request__container container">
        <?php if (!$is_submitted) : ?>
            <div class="request__offer request__offer--small">
                If you prefer to fill out a form manually please print this form and submit the hardcopy version please click print this form
                <a href='javascript:window.print(); void 0;' class="request__print button">Print this form</a>
            </div>

            <form class="request__form enrolment" action="<?php the_permalink(); ?>" method="post">

                <div class="enrolment__row enrolment__child">

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">CHILD’S GIVEN NAMES:</span>
                        <input name="child[given_names]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">SURNAME</span>
                        <input name="child[surname]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">CRN</span>
                        <input name="child[crn]" class="request__input" type="text" requ>
                    </label>

                    <div class="request__text-block request__text-block--empty request__text-block--small"></div>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">FORMER/OTHER NAMES KNOWN BY</span>
                        <input name="child[other_names_known_by]" class="request__input" type="text" requ>
                    </label>

                    <div class="request__text-block request__text-block--empty request__text-block--small"></div>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">ADDRESS</span>
                        <input name="child[address]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">D.O.B.</span>
                        <input name="child[dob]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">PLACE OF BIRTH</span>
                        <input name="child[place_of_birth]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">GENDER</span>
                        <input name="child[gender]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">CULTURAL BACKGROUND</span>
                        <input name="child[cultural_background]" class="request__input" type="text" requ>
                    </label>

                    <label class="request__text-block request__text-block--small">
                        <span class="request__label">RELIGION</span>
                        <input name="child[religion]" class="request__input" type="text" requ>
                    </label>

                </div>

                <div class="enrolment__row enrolment__parents">
                    <div class="enrolment__column">

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">MOTHER’SNAME</span>
                            <input name="mother[name]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">D.O.B.</span>
                            <input name="mother[dob]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">CRN</span>
                            <input name="mother[crn]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">OTHER NAMES KNOWN BY</span>
                            <input name="mother[other_names_known_by]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">COUNTRY OF BIRTH</span>
                            <input name="mother[country_of_birth]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">CULTURAL BACKGROUND</span>
                            <input name="mother[cultural_background]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">ADDRESS</span>
                            <input name="mother[address]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">PHONE</span>
                            <input name="mother[phone]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">MOBILE</span>
                            <input name="mother[mobile]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">EMAIL</span>
                            <input name="mother[email]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">OCCUPATION</span>
                            <input name="mother[occupation]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">PLACE OF WORK</span>
                            <input name="mother[place_of_work]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">WORK PHONE</span>
                            <input name="mother[work_phone]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">OTHER CHILDREN IN FAMILY (NAMES AND AGES)</span>
                            <input name="other[other_children]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">MAIN LANGUAGE SPOKEN AT HOME</span>
                            <input name="other[main_language]" class="request__input" type="text" requ>
                        </label>

                    </div>
                    <div class="enrolment__column">

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">FATHER’S NAME:</span>
                            <input name="father[name]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">D.O.B.</span>
                            <input name="father[dob]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">CRN</span>
                            <input name="father[crn]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">OTHER NAMES KNOWN BY</span>
                            <input name="father[other_names_known_by]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">CONTRY OF BIRTH</span>
                            <input name="father[country_of_birth]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">CULTURAL BACKGROUND</span>
                            <input name="father[cultural_background]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">ADDRESS</span>
                            <input name="father[address]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">PHONE</span>
                            <input name="father[phone]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">MOBILE</span>
                            <input name="father[mobile]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">EMAIL</span>
                            <input name="father[email]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">OCCUPATION</span>
                            <input name="father[occupation]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">PLACE OF WORK</span>
                            <input name="father[place_of_work]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">WORK PHONE</span>
                            <input name="father[work_phone]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">ANY OTHER HOUSEHOLD MEMBERS</span>
                            <input name="other[any_other_household]" class="request__input" type="text" requ>
                        </label>

                        <label class="request__text-block request__text-block--small">
                            <span class="request__label">ANY OTHER LANGUAGE SPOKEN AT HOME</span>
                            <input name="other[any_other_language]" class="request__input" type="text" requ>
                        </label>

                    </div>
                </div>

                <div class="enrolment__emergency">
                    <h2 class="enrolment__title title title--green">EMERGENCY CONTACTS AND ALTERNATIVE COLLECTORS</h2>
                    <h3>LIST THE NAMES OF ANYONE THAT YOU NOMINATE AS:</h3>
                    <ul class="enrolment__emergency-list">
                        <li>alternative collectors for your child;</li>
                        <li>authorised to consent to medical treatment or administration of medication to your child;</li>
                        <li>authorised to allow an educator to take the child out of the education and care service premises-</li>
                    </ul>
                    <div class="enrolment__row">
                        <div class="enrolment__column enrolment__emergency-column">
                            <div class="enrolment__emergency-number">
                                <span class="enrolment__emergency-number-round">1</span>
                            </div>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="emergency_contacts[1][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="emergency_contacts[1][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Home Phone</span>
                                <input name="emergency_contacts[1][home_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Work Phone</span>
                                <input name="emergency_contacts[1][work_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Mobile</span>
                                <input name="emergency_contacts[1][mobile]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="emergency_contacts[1][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">Tick to Authorise:</p>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[1][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Pick Up" id="tick-1-1">
                                    <label class="request__checkbox-label" for="tick-1-1">Pick Up</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[1][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Emergency medical treatment" id="tick-1-2">
                                    <label class="request__checkbox-label" for="tick-1-2">Emergency medical treatment</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[1][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Medication administration" id="tick-1-3">
                                    <label class="request__checkbox-label" for="tick-1-3">Medication administration</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[1][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Excursions" id="tick-1-4">
                                    <label class="request__checkbox-label" for="tick-1-4">Excursions</label>
                                </div>
                            </div>

                        </div>
                        <div class="enrolment__column enrolment__emergency-column">
                            <div class="enrolment__emergency-number">
                                <span class="enrolment__emergency-number-round">2</span>
                            </div>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="emergency_contacts[2][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="emergency_contacts[2][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Home Phone</span>
                                <input name="emergency_contacts[2][home_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Work Phone</span>
                                <input name="emergency_contacts[2][work_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Mobile</span>
                                <input name="emergency_contacts[2][mobile]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="emergency_contacts[2][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">Tick to Authorise:</p>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[2][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Pick Up" id="tick-2-1">
                                    <label class="request__checkbox-label" for="tick-2-1">Pick Up</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[2][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Emergency medical treatment" id="tick-2-2">
                                    <label class="request__checkbox-label" for="tick-2-2">Emergency medical treatment</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[2][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Medication administration" id="tick-2-3">
                                    <label class="request__checkbox-label" for="tick-2-3">Medication administration</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[2][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Excursions" id="tick-2-4">
                                    <label class="request__checkbox-label" for="tick-2-4">Excursions</label>
                                </div>
                            </div>

                        </div>
                        <div class="enrolment__column enrolment__emergency-column">
                            <div class="enrolment__emergency-number">
                                <span class="enrolment__emergency-number-round">3</span>
                            </div>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="emergency_contacts[3][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="emergency_contacts[3][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Home Phone</span>
                                <input name="emergency_contacts[3][home_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Work Phone</span>
                                <input name="emergency_contacts[3][work_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Mobile</span>
                                <input name="emergency_contacts[3][mobile]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="emergency_contacts[3][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">Tick to Authorise:</p>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[3][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Pick Up" id="tick-3-1">
                                    <label class="request__checkbox-label" for="tick-3-1">Pick Up</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[3][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Emergency medical treatment" id="tick-3-2">
                                    <label class="request__checkbox-label" for="tick-3-2">Emergency medical treatment</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[3][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Medication administration" id="tick-3-3">
                                    <label class="request__checkbox-label" for="tick-3-3">Medication administration</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[3][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Excursions" id="tick-3-4">
                                    <label class="request__checkbox-label" for="tick-3-4">Excursions</label>
                                </div>
                            </div>

                        </div>
                        <div class="enrolment__column enrolment__emergency-column">
                            <div class="enrolment__emergency-number">
                                <span class="enrolment__emergency-number-round">4</span>
                            </div>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="emergency_contacts[4][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="emergency_contacts[4][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Home Phone</span>
                                <input name="emergency_contacts[4][home_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Work Phone</span>
                                <input name="emergency_contacts[4][work_phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Mobile</span>
                                <input name="emergency_contacts[4][mobile]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="emergency_contacts[4][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">Tick to Authorise:</p>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[4][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Pick Up" id="tick-4-1">
                                    <label class="request__checkbox-label" for="tick-4-1">Pick Up</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[4][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Emergency medical treatment" id="tick-4-2">
                                    <label class="request__checkbox-label" for="tick-4-2">Emergency medical treatment</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[4][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Medication administration" id="tick-4-3">
                                    <label class="request__checkbox-label" for="tick-4-3">Medication administration</label>
                                </div>
                                <div class="request__checkbox-group ">
                                    <input name="emergency_contacts[4][authorise][]" class="request__checkbox visually-hidden" type="checkbox" value="Excursions" id="tick-4-4">
                                    <label class="request__checkbox-label" for="tick-4-4">Excursions</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="enrolment__unauthorised">
                    <h2 class="enrolment__title title title--green">PEOPLE UNAUTHORISED TO COLLECT</h2>
                    <div class="enrolment__row enrolment__unauthorised-row">

                        <div class="enrolment__column">

                            <div class="enrolment__unauthorised-number">1</div>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="unauthorised_to_collect[1][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="unauthorised_to_collect[1][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="unauthorised_to_collect[1][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                        </div>

                        <div class="enrolment__column">

                            <div class="enrolment__unauthorised-number">2</div>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="unauthorised_to_collect[2][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="unauthorised_to_collect[2][address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Relationship to child</span>
                                <input name="unauthorised_to_collect[2][relationship_to_child]" class="request__input" type="text" requ>
                            </label>

                        </div>

                    </div>
                    <h4>Is there any other information regarding your child or family that the centre needs to be aware of?</h4>
                    <p class="enrolment__unauthorised-offer">
                        For example, custody, court orders, parenting orders, parenting plans, orders relating to child’s residence or contact with a parent or other persons, dietary or cultural restrictions?
                    </p>
                    <label class="request__text-block">
                        <span class="request__label">Please provide details</span>
                        <input name="other_information" class="request__input" type="text" requ>
                    </label>
                </div>

                <div class="enrolment__medical">
                    <h2 class="enrolment__title title title--green">MEDICAL INFORMATION</h2>
                    <div class="enrolment__row">
                        <div class="enrolment__column">
                            <h3>FAMILY DOCTOR</h3>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="doctor[name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="doctor[address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Phone</span>
                                <input name="doctor[phone]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Medicare Number</span>
                                <input name="doctor[medicare_number]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Health Care Fund</span>
                                <input name="doctor[health_care_fund]" class="request__input" type="text" requ>
                            </label>

                        </div>
                        <div class="enrolment__column">
                            <h3>DENTIST</h3>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Name</span>
                                <input name="dentist[name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Address</span>
                                <input name="dentist[address]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">Phone</span>
                                <input name="dentist[phone]" class="request__input" type="text" requ>
                            </label>

                        </div>
                    </div>

                    <div class="enrolment__medical-block">

                        <div class="enrolment__checkbox-group enrolment__medical-checkbox-group">
                            <p class="request__label">Is your child fully immunised?</p>
                            <div class="request__checkbox-group">
                                <input name="medical[immunised]" class="request__checkbox visually-hidden" type="radio" value="yes" id="immunised-yes">
                                <label class="request__checkbox-label" for="immunised-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[immunised]" class="request__checkbox visually-hidden" type="radio" value="no" id="immunised-no">
                                <label class="request__checkbox-label" for="immunised-no">No</label>
                            </div>
                            <p class="enrolment__checkbox-undertext">Your child’simmunisation history statement or exemption needs to be sited by the director and a copy taken.</p>

                            <p class="request__label">Sighted and copied-</p>
                            <div class="request__checkbox-group">
                                <input name="medical[simmunisation_history]" class="request__checkbox visually-hidden" type="radio" value="yes" id="copied-yes">
                                <label class="request__checkbox-label" for="copied-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[simmunisation_history]" class="request__checkbox visually-hidden" type="radio" value="no" id="copied-no">
                                <label class="request__checkbox-label" for="copied-no">No</label>
                            </div>
                        </div>

                        <label class="request__text-block  enrolment__medical-details">
                            <span class="request__label">Does your child have any specific health care needs: i.e. Asthma, diabetes?</span>
                            <input name="medical[specific_health_care_needs]" class="request__input" type="text" requ>
                        </label>
                    </div>

                    <div class="enrolment__medical-block">
                        <div class="enrolment__checkbox-group ">
                            <p class="request__label">Does your child suffer from any allergies or have they been diagnosed as at risk of anaphylaxis?</p>
                            <div class="request__checkbox-group">
                                <input name="medical[risk_of_anaphylaxis]" class="request__checkbox visually-hidden" type="radio" value="yes" id="allergies-yes">
                                <label class="request__checkbox-label" for="allergies-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[risk_of_anaphylaxis]" class="request__checkbox visually-hidden" type="radio" value="no" id="allergies-no">
                                <label class="request__checkbox-label" for="allergies-no">No</label>
                            </div>
                        </div>
                        <label class="request__text-block enrolment__medical-details">
                            <span class="request__label">If Yes, please provide details</span>
                            <input name="medical[risk_of_anaphylaxis_details]" class="request__input" type="text" requ>
                        </label>
                        <label class="request__text-block ">
                            <span class="request__label">Does your child have a medical management plan for any medical condition or allergy? Yes/No</span>
                            <input name="medical[medical_management_plan]" class="request__input" type="text" requ>
                        </label>
                        <p class="enrolment__medical-offer">If so please provide a copy (you must provide a hardcopy of the medical management plan directly to the school).</p>
                    </div>

                    <div class="enrolment__medical-block">
                        <div class="enrolment__checkbox-group ">
                            <p class="request__label">Does your child take prescribed medication or treatment on a regular basis? Yes/No</p>
                            <div class="request__checkbox-group">
                                <input name="medical[regular_treatment]" class="request__checkbox visually-hidden" type="radio" value="yes" id="prescribed-yes">
                                <label class="request__checkbox-label" for="prescribed-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[regular_treatment]" class="request__checkbox visually-hidden" type="radio" value="no" id="prescribed-no">
                                <label class="request__checkbox-label" for="prescribed-no">No</label>
                            </div>
                        </div>
                        <label class="request__text-block enrolment__medical-details">
                            <span class="request__label">If Yes, please provide details</span>
                            <input name="medical[regular_treatment_details]" class="request__input" type="text" requ>
                        </label>
                    </div>

                    <div class="enrolment__medical-block">
                        <div class="enrolment__checkbox-group ">
                            <p class="request__label">Does your child have a diagnosed disability or special need? Yes/No</p>
                            <div class="request__checkbox-group">
                                <input name="medical[disability_or_special_need]" class="request__checkbox visually-hidden" type="radio" value="yes" id="disability-yes">
                                <label class="request__checkbox-label" for="disability-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[disability_or_special_need]" class="request__checkbox visually-hidden" type="radio" value="no" id="disability-no">
                                <label class="request__checkbox-label" for="disability-no">No</label>
                            </div>
                        </div>
                        <label class="request__text-block enrolment__medical-details">
                            <span class="request__label">If Yes, please provide details</span>
                            <input name="medical[disability_or_special_need_details]" class="request__input" type="text" requ>
                        </label>
                    </div>

                    <div class="enrolment__medical-block">
                        <div class="enrolment__checkbox-group ">
                            <p class="request__label">Does your child attend any other services such as speech therapy, physiotherapy, etc.Yes/No</p>
                            <div class="request__checkbox-group">
                                <input name="medical[other_services]" class="request__checkbox visually-hidden" type="radio" value="yes" id="therapy-yes">
                                <label class="request__checkbox-label" for="therapy-yes">Yes</label>
                            </div>
                            <div class="request__checkbox-group">
                                <input name="medical[other_services]" class="request__checkbox visually-hidden" type="radio" value="no" id="therapy-no">
                                <label class="request__checkbox-label" for="therapy-no">No</label>
                            </div>
                        </div>
                        <label class="request__text-block enrolment__medical-details">
                            <span class="request__label">If Yes, please provide details</span>
                            <input name="medical[other_services_details]" class="request__input" type="text" requ>
                        </label>
                    </div>


                </div>

                <div class="enrolment__information">
                    <h2 class="enrolment__title title title--green">CHILD INFORMATION</h2>

                    <p class="request__label">At what age did your child first:</p>
                    <div class="enrolment__row">
                        <label class="request__text-block request__text-block--extrasmall">
                            <span class="request__label">Smile</span>
                            <input name="child_info[smile]" class="request__input" type="text" requ>
                        </label>
                        <label class="request__text-block request__text-block--extrasmall">
                            <span class="request__label">Sit</span>
                            <input name="child_info[sit]" class="request__input" type="text" requ>
                        </label>
                        <label class="request__text-block request__text-block--extrasmall">
                            <span class="request__label">Crawl</span>
                            <input name="child_info[crawl]" class="request__input" type="text" requ>
                        </label>
                        <label class="request__text-block request__text-block--extrasmall">
                            <span class="request__label">Walk</span>
                            <input name="child_info[walk]" class="request__input" type="text" requ>
                        </label>
                        <label class="request__text-block request__text-block--extrasmall">
                            <span class="request__label">Say First Word</span>
                            <input name="child_info[first_word]" class="request__input" type="text" requ>
                        </label>
                        <div class="request__text-block request__text-block--extrasmall request__text-block--empty"></div>
                    </div>

                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Does your child speak well enough to be understood?</span>
                        <input name="child_info[speak_well]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Does your child have a daytime sleep?</span>
                        <input name="child_info[daytime_sleep]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Times</span>
                        <input name="child_info[daytime_sleep_times]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Does your child have a comforter or any special habits or fears?</span>
                        <input name="child_info[special_habits_or_fears]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Has your child been toilet trained? Please give details if necessary</span>
                        <input name="child_info[toilet_trained]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Does your child have any “toilet” words or indicators?</span>
                        <input name="child_info[toilet_words]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Does your child have a bottle or a cup? Details of formula:</span>
                        <input name="child_info[bottle_or_cup]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block request__text-block  request__text-block--rows enrolment__information-text-block">
                        <span class="request__label request__label--rows">What information do you consider important to know each day and what is the best means of communication for you?</span>
                        <input name="child_info[important_information]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Are there any areas of your child’s development that you are concerned about?</span>
                        <input name="child_info[disturbing_areas]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Are you eligible for Childcare Subsidy? Yes/No</span>
                        <input name="child_info[childcare_subsidy]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">No Number of eligible hours</span>
                        <input name="child_info[no_number_of_eligible_hours]" class="request__input" type="text" requ>
                    </label>
                    <label class="request__text-block enrolment__information-text-block">
                        <span class="request__label">Number of children in care</span>
                        <input name="child_info[children_in_care]" class="request__input" type="text" requ>
                    </label>

                    <p class="enrolment__information-offer">
                        Do you have a preferred day/s that you would like your child to attend the centre? Please enter the details<br>
                        in the attached Booking Form.
                    </p>

                </div>

                <div class="enrolment__authorisations">
                    <h2 class="enrolment__authorisations-title enrolment__title title title--green">AUTHORISATIONS</h2>
                    <p class="enrolment__authorisations-subtitle">
                        You do not need to sign the Authorisations at the moment we will collect your signatures at Sea Urchins once your enrolment has been approved.
                    </p>

                    <div class="enrolment__authorisations-item">
                        <h3>MEDICAL TREATMENT</h3>
                        <p class="enrolment__authorisations-desc">In the case of accident or other emergency resulting in the need for medical or dental attention, I hereby give permission for the centre staff to arrange for my child to receive medical treatment from a registered medical practitioner, hospital or ambulance service and transportation of my child by an ambulance service, as is required and I agree to meet any and all medical expenses thereby incurred.</p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="enrolment__authorisations-item">
                        <h3>SUNSCREEN</h3>
                        <p class="enrolment__authorisations-desc">
                            I give permission for centre staff to apply appropriate mosquito repellent to my child’s skin when needed.
                        </p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="enrolment__authorisations-item">
                        <h3>MOSQUITO/SAND FLY REPELLANT</h3>
                        <p class="enrolment__authorisations-desc">
                            I give permission for centre staff to apply appropriate mosquito repellant to my child’sskinwhen.
                        </p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="enrolment__authorisations-item">
                        <h3>PHOTOGRAPHS</h3>
                        <p class="enrolment__authorisations-desc">
                            I give permission for my child to have their photo taken while at the centre for developmental and programming documentation. I understand that photographs will not be released to outside agencies, or used for promotional purposes without my written authority.
                        </p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="enrolment__authorisations-item">
                        <h3>DEVELOPMENTAL RECORDS</h3>
                        <p class="enrolment__authorisations-desc">
                            I give permission for the necessary information regarding my child’s development to be transferred to his/her primary school to enable easier transition.
                        </p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                    <div class="enrolment__authorisations-item">
                        <h3>CENTRE POLICIES</h3>
                        <p class="enrolment__authorisations-desc">
                            I have read and understand the conditions outlined in the parent Information Book and I accept all the policies therein, in particular the Fee Payment, Infectious Diseases, and Medication Policies.
                        </p>
                        <div class="enrolment__row">
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">SIGNED</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                            <div class="enrolment__column enrolment__authorisations-block">
                                <div class="request__label">DATE</div>
                                <div class="enrolment__authorisations-line"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="enrolment__booking">
                    <h2 class="enrolment__title title title--green">Sea Urchins Child Care Centre - <span class="title--lightblue">Booking Form</span></h2>

                    <div class="enrolment__row">
                        <div class="enrolment__column">
                            <h3 class="enrolment__booking-column-title">CHILD ONE</h3>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">CHILD’S NAME</span>
                                <input name="booking_form[1][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">D.O.B.</span>
                                <input name="booking_form[1][dob]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">BEGINNING On</span>
                                <input name="booking_form[1][beginning_on]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">SESSION (Please choose one)</p>
                                <div class="request__checkbox-group">
                                    <input name="booking_form[1][session]" class="request__checkbox visually-hidden" type="radio" value="Full day: 7:30 - 5:30" id="session-1-full">
                                    <label class="request__checkbox-label" for="session-1-full">
                                        <span class="request__checkbox-label--blue">Full day:</span> 7:30 - 5:30  →  <span class="request__checkbox-label--blue">$91</span>
                                    </label>
                                </div>
                                <div class="request__checkbox-group">
                                    <input name="booking_form[1][session]" class="request__checkbox visually-hidden" type="radio" value="8 hrs: 8:00 - 4:00" id="session-1-8">
                                    <label class="request__checkbox-label" for="session-1-8">
                                        <span class="request__checkbox-label--blue">8 hrs:</span> 8:00 - 4:00  →  <span class="request__checkbox-label--blue">$87</span>
                                    </label>
                                </div>
                            </div>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">DAYS OF CARE REQUIRED: (Please choose)</p>
                                <div class="request__days-list enrolment__booking-days">
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[1][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Monday" id="Monday">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Monday">Monday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[1][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Tuesday" id="Tuesday">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Tuesday">Tuesday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[1][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Wednesday" id="Wednesday">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Wednesday">Wednesday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[1][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Thursday" id="Thursday">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Thursday">Thursday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[1][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Friday" id="Friday">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Friday">Friday</label>
                                    </div>
                                </div>
                            </div>

                            <label class="request__text-block request__text-block--red request__text-block--small">
                                <span class="request__label">ROOM (to be filled by office)</span>
                                <input name="booking_form[1][room]" class="request__input" type="text" requ>
                            </label>

                        </div>
                        <div class="enrolment__column">
                            <h3 class="enrolment__booking-column-title">CHILD TWO</h3>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">CHILD’S NAME</span>
                                <input name="booking_form[2][name]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">DOB</span>
                                <input name="booking_form[2][dob]" class="request__input" type="text" requ>
                            </label>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">BEGINNING On</span>
                                <input name="booking_form[2][beginning_on]" class="request__input" type="text" requ>
                            </label>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">SESSION (Please choose one)</p>
                                <div class="request__checkbox-group">
                                    <input name="booking_form[2][session]" class="request__checkbox visually-hidden" type="radio" value="Full day 7:30 - 5:30" id="session-2-full">
                                    <label class="request__checkbox-label" for="session-2-full">
                                        <span class="request__checkbox-label--blue">Full day:</span> 7:30 - 5:30  →  <span class="request__checkbox-label--blue">$91</span>
                                    </label>
                                </div>
                                <div class="request__checkbox-group">
                                    <input name="booking_form[2][session]" class="request__checkbox visually-hidden" type="radio" value="8 hrs: 8:00 - 4:00" id="session-2-8">
                                    <label class="request__checkbox-label" for="session-2-8">
                                        <span class="request__checkbox-label--blue">8 hrs:</span> 8:00 - 4:00  →  <span class="request__checkbox-label--blue">$87</span>
                                    </label>
                                </div>
                            </div>

                            <div class="enrolment__checkbox-group">
                                <p class="request__label">DAYS OF CARE REQUIRED: (Please choose)</p>
                                <div class="request__days-list enrolment__booking-days">
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[2][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Monday" id="Monday-2">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Monday-2">Monday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[2][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Tuesday" id="Tuesday-2">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Tuesday-2">Tuesday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[2][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Wednesday" id="Wednesday-2">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Wednesday-2">Wednesday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[2][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Thursday" id="Thursday-2">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Thursday-2">Thursday</label>
                                    </div>
                                    <div class="request__days-item request__days-item--nomr">
                                        <input name="booking_form[2][days][]" class="request__checkbox visually-hidden" type="checkbox" value="Friday" id="Friday-2">
                                        <label class="request__checkbox-label request__checkbox-label--column" for="Friday-2">Friday</label>
                                    </div>
                                </div>
                            </div>

                            <label class="request__text-block request__text-block--small">
                                <span class="request__label">ROOM (to be filled by office)</span>
                                <input name="booking_form[2][room]" class="request__input" type="text" requ>
                            </label>

                        </div>
                    </div>

                </div>

                <div class="enrolment__general">
                    <h2 class="enrolment__title enrolment__general-title title title--lightblue">GENERAL INFORMATION</h2>
                    <p>
                        <b>Sea Urchins Childcare Centre</b> is a privately owned and operated centre providing care for children <b>aged 0 to 6 years.</b>
                        <br>We provide a safe, friendly, caring environment where children can explore and learn in challenging situations.
                    </p>
                    <p>
                        <b>Sea Urchins Childcare Centre</b> is licensed for 44 children and has three rooms
                    </p>
                    <ul>
                        <li><span class="enrolment__general-program">JELLYFISH:</span> 0 to 2 year old room,</li>
                        <li><span class="enrolment__general-program">STARFISH:</span> 2 - 3 year old room,</li>
                        <li><span class="enrolment__general-program">WHALES:</span> 3 - 5 year room.</li>
                    </ul>
                    <h3>HOURS OF OPERATION</h3>
                    <p><b>Sea Urchins Childcare Centre</b> is open from <span class="enrolment__general--blue">7.30am to 5.30 pm.</span></p>
                    <p>The centre is open <b>for 50 weeks of the year</b>, closing for two weeks over the Christmas and New Year Period.</p>
                    <h3>CHILDREN’S DAILY REQUIREMENTS</h3>
                    <ul>
                        <li>Bag to contain belongings.</li>
                        <li>Sheet for rest time, even if your child doesn’t sleep.</li>
                        <li>Spare clothing. Please label all your child’s clothes</li>
                        <li>Hat for outside play - legionnaire or bucket style.</li>
                        <li>A water bottle for your child to keep in their locker so they can get a drink whenever needed. Juice and cordial.<br>are not permitted due to their high sugar content.</li>
                        <li>Morning Tea - please pack a nutritious snack in a separate container/bag.</li>
                        <li>Lunch - please pack lunch in a separate bag/box.</li>
                        <li>Please place an ice brick in with any food that needs to be kept cold.</li>
                        <li>All containers need to be labeled.</li>
                        <li>Please refer to Nutrition Policy and Lunch Box Ideas. Parents are asked not to pack chips, chocolate or lollies.</li>
                        <li>Please let us know if your child has any food allergies or intolerances.</li>
                    </ul>
                    <h3>
                        NUT FREE
                    </h3>
                    <p><b>Sea Urchins is a nut free centre.</b> Please do not send nuts or food containing peanuts or tree nut products to the centre.</p>
                    <p>This includes peanut butter, nutella and other nut spreads. You will also need to check the information on packaged food such as muesli bars and biscuits. If it states ‘contains nuts,’ ‘may contain nuts,’ or ‘made on the same line as…’ then it is not acceptable.</p>
                    <p>This is <b>to protect children who have an allergy to nuts</b> from having a serious reaction. If you are unsure of a certain food, please ask a staff member.</p>
                    <p>We will also be asking children, staff and visitors to wash their hands on arrival at the centre. This will ensure that traces of food eaten at home will not be transferred to toys and equipment, as well as helping to control the spread of infections.</p>
                    <h3>SUN PROTECTION</h3>
                    <p>
                        Children need <b>to bring a hat for outside play</b>, or play in the shade. They also need to wear a shirt with sleeves to cover the shoulder and upper arms. The centre also provides sunscreen and parents are asked to apply this to their children when they arrive. Staff will reapply sunscreen during the day. Please refer to our <b>Sun Protection Policy.</b>
                    </p>
                </div>

                <input type="hidden" name="submitted" value="true">
                <button type="submit" class="button request__submit">Submit</button>

            </form>
        <?php else : ?>
            <div class="request__container container">
                <p class="title title--green">
                    Application sent successfully. We will contact you shortly
                </p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

