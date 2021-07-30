<?php
function create_pdf_from_enrolment($labels, $data)
{
//    echo '<pre>';
//    var_dump($data);
//    echo '</pre>';

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFillColor(256,256,256);
    $pdf->SetLineWidth(0.01);
    $pdf->SetDrawColor(100,100,100);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(190, 10, 'Enrolment', "", 0, 'l');
    $pdf->ln();
    $pdf->ln();

    /*****************************************************************************/
    /*                            Child's information                            */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Child\'s information', "", 0, 'l');
    $pdf->ln();

    foreach ($labels['child'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['child'][$key], "LRBT");
    }
    $pdf->ln();


    /*****************************************************************************/
    /*                           Parent's information                            */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Parent\'s information', "", 0, 'l');
    $pdf->ln();

    // Mother
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Mother', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['mother'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['mother'][$key], "LRBT");
    }
    $pdf->ln();

    // Father
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Father', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['father'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['father'][$key], "LRBT");
    }
    $pdf->ln();

    // Other
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Other family information', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['other'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['other'][$key], "LRBT");
    }
    $pdf->ln();


    /*****************************************************************************/
    /*                            Emergency contacts                             */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Emergency contacts ', "", 0, 'l');
    $pdf->ln();

    foreach ($data['emergency_contacts'] as $contact) {
        if (trim($contact['name']) == '') {
            break;
        }

        foreach ($labels['emergency_contacts'] as $key => $label) {
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
            $pdf->SetFont('Arial', '', 10);

            if (isset($contact['authorise'])) {
                if ($key == 'authorise') {
                    $contact['authorise'] = implode(', ', $contact['authorise']);
                }
            }

            $pdf->MultiCell(130, 9, $contact[$key], "LRBT");
        }
        $pdf->ln();
    }


    /*****************************************************************************/
    /*                      People unauthorised to collect                       */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'People unauthorised to collect ', "", 0, 'l');
    $pdf->ln();

    foreach ($data['unauthorised_to_collect'] as $data_item) {
        foreach ($labels['unauthorised_to_collect'] as $key => $label) {
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->MultiCell(130, 9, $data_item[$key], "LRBT");
        }
        $pdf->ln();
    }


    /*****************************************************************************/
    /*                 Other information regarding your child or family          */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Other information regarding child or family', "", 0, 'l');
    $pdf->ln();

    $pdf->SetFont('Arial', '', 10);
    $pdf->MultiCell(190, 9, $data['other_information'], "LRBT");
    $pdf->ln();


    /*****************************************************************************/
    /*                           Medical information                             */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Medical information', "", 0, 'l');
    $pdf->ln();

    // Doctor
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Doctor', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['doctor'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['doctor'][$key], "LRBT");
    }
    $pdf->ln();

    // Dentist
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Dentist', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['dentist'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['dentist'][$key], "LRBT");
    }
    $pdf->ln();

    // Medical
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 9, 'Medical', "", 0, 'l');
    $pdf->ln();
    foreach ($labels['medical'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->MultiCell(190, 5, $label, "", 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(190, 5, $data['medical'][$key], "");
        $pdf->ln(4);
    }
    $pdf->ln();


    /*****************************************************************************/
    /*                         Child's more information                         */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Child\'s more information', "", 0, 'l');
    $pdf->ln();

    foreach ($labels['child_info'] as $key => $label) {
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(130, 9, $data['child_info'][$key], "LRBT");
    }
    $pdf->ln();


    /*****************************************************************************/
    /*                             Booking form                                  */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Booking form', "", 0, 'l');
    $pdf->ln();

    foreach ($data['booking_form'] as $data_item) {
        foreach ($labels['booking_form'] as $key => $label) {
            if (isset($data_item['days'])) {
                if ($key == 'days') {
                    $data_item['days'] = implode(', ', $data_item['days']);
                }
            }

            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(60, 9, $label, "LRBT", 0, 'L');
            $pdf->SetFont('Arial', '', 10);
            $pdf->MultiCell(130, 9, $data_item[$key], "LRBT");
        }
        $pdf->ln();
    }


    /*****************************************************************************/
    /*                             Authorisations                                */
    /*****************************************************************************/
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 9, 'Authorisations', "", 0, 'l');
    $pdf->ln();
    $pdf->SetFont('Arial', '', 10);
    $offer = 'You do not need to sign the Authorisations at the moment we will collect your signatures at Sea Urchins once your enrolment has been approved.';
    $pdf->MultiCell(190, 5, $offer, "", 'L');
    $pdf->ln();

    $blocks = [
        [
            'title' => 'Medical treatment',
            'text' => 'In the case of accident or other emergency resulting in the need for medical or dental attention, I hereby give permission for the centre staff to arrange for my child to receive medical treatment from a registered medical practitioner, hospital or ambulance service and transportation of my child by an ambulance service, as is required and I agree to meet any and all medical expenses thereby incurred.',
        ],
        [
            'title' => 'Sunscreen',
            'text' => 'I give permission for centre staff to apply appropriate mosquito repellent to my child’s skin when needed.',
        ],
        [
            'title' => 'Mosquito/sand fly repellant',
            'text' => 'I give permission for centre staff to apply appropriate mosquito repellant to my child’sskinwhen.',
        ],
        [
            'title' => 'Photographs',
            'text' => 'I give permission for my child to have their photo taken while at the centre for developmental and programming documentation. I understand that photographs will not be released to outside agencies, or used for promotional purposes without my written authority.',
        ],
        [
            'title' => 'Developmental records',
            'text' => 'I give permission for the necessary information regarding my child’s development to be transferred to his/her primary school to enable easier transition.',
        ],
        [
            'title' => 'Centre policies',
            'text' => 'I have read and understand the conditions outlined in the parent Information Book and I accept all the policies therein, in particular the Fee Payment, Infectious Diseases, and Medication Policies.',
        ],
    ];


    foreach ($blocks as $block) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 9, $block['title'], "", 0, 'L');
        $pdf->ln();

        $pdf->SetFont('Arial', '', 10);
        $pdf->MultiCell(190, 5, $block['text'], "", 'L');
        $pdf->ln();

        $pdf->Cell(90, 9, 'SIGNED', "B", 0, 'L');
        $pdf->Cell(10, 9, '', '', 0, 'L');
        $pdf->Cell(90, 9, 'DATE', "B", 0, 'L');
        $pdf->ln(24);
    }

    return $pdf->Output('', 'S');
}

function create_pdf_from_waiting_list($fields, $data)
{
    $pdf = new FPDF();
    $pdf->AddPage();

    foreach ($fields as $key => $name) {
        if (isset($data['days_of_care'])) {
            if ($key == 'days_of_care') {
                $data['days_of_care'] = implode(', ', $data['days_of_care']);
            }
        }

        $pdf->SetFont('Arial', 'B');
        $pdf->Cell(60, 10, $name, "LRBT", 0, 'LR');
        $pdf->SetFont('Arial', '');
        $pdf->MultiCell(120, 10, $data[$key], "LRBT");
    }

    return $pdf->Output('', 'S');
}

function send_pdf($subject, $doc)
{
    if (get_field('email_for_forms', 'option')) {
        $to = get_field('email_for_forms', 'option');
    } else {
        $to = get_option('admin_email');
    }

    // email stuff (change data below)
    $from = "seaurchins@email.com";
    $message = "<p>New request</p>";

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (we use a PHP end of line constant)
    $eol = PHP_EOL;

    // attachment name
    $filename = "Waiting-list.pdf";

    // encode data (puts attachment in proper format)
    $attachment = chunk_split(base64_encode($doc));

    // main header
    $headers  = "From: ".$from.$eol;
    $headers .= "MIME-Version: 1.0".$eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

    // no more headers after this, we start the body! //
    $body = "--".$separator.$eol;
    $body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;

    // message
    $body .= "--".$separator.$eol;
    $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
    $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
    $body .= $message.$eol;

    // attachment
    $body .= "--".$separator.$eol;
    $body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol;
    $body .= "Content-Transfer-Encoding: base64".$eol;
    $body .= "Content-Disposition: attachment".$eol.$eol;
    $body .= $attachment.$eol;
    $body .= "--".$separator."--";

    // send message
    mail($to, $subject, $body, $headers);
}