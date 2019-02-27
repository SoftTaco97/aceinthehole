<?php
// Stop the file from being called without a post method
if($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST['form'])) die('403 Access Denied');



/* DB Constants */

/* REDACTED */

/* Email Constants */

const EMAIL_ADDRESS = 'no';

function formValidation()
{
    global $name, $email, $number, $message, $form;
    /* Form validation */
    if(empty($name))
        die(json_encode(array('status' => 400, 'message' => 'Please enter a name')));

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        die(json_encode(array('status' => 400, 'message' => 'Please enter a valid name')));

    if(empty($number) || !preg_match("/^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/", $number))
        die(json_encode(array('status' => 400, 'message' => 'Please enter a valid phone number.')));
    if($form !== 'contactForm'){
        global $ec_name, $age, $gender, $saturday_registration, $saturday_event, $sunday_registration, $sunday_event;
        if(empty($ec_name))
            die(json_encode(array('status' => 400, 'message' => 'Please enter an Emergency Contact')));
        if(empty($age))
            die(json_encode(array('status' => 400, 'message' => 'Please enter a valid age')));
        if(empty($gender) || $gender == 'Gender')
            die(json_encode(array('status' => 400, 'message' => 'Please enter a valid gender')));
        if((empty($saturday_registration) || $saturday_registration == 'N/A') && (empty($sunday_registration) || $sunday_registration == 'N/A'))
            die(json_encode(array('status' => 400, 'message' => 'Please enter a valid registration type.')));
        if((empty($saturday_event) || $saturday_event == 'N/A') && (empty($sunday_event) || $sunday_event == 'N/A'))
            die(json_encode(array('status' => 400, 'message' => 'Please enter an event.')));
    }
}

function formEmail()
{
    global $name, $email, $number, $message, $form;
    // Escaping Information
    $email_name = htmlentities($name);
    $email_email = htmlentities($email);
    $email_number = htmlentities($number);
    $email_message = wordwrap(htmlentities($message), 70);

    if($form == 'contactForm'){
        $subject = "Contact Form Submission From: " . $email_name;
        $body = "
            $email_name has filled out your contact form. \n
            Name: $email_name \n
            Email: $email_email \n 
            Number: $email_number \n 
            Message: \n 
            $email_message
        ";
    } else {
        global $ec_name, $age, $gender, $saturday_registration, $saturday_event, $sunday_registration, $sunday_event;
        $email_ec_name = htmlentities($ec_name);
        $email_age = htmlentities($age);
        $email_gender = htmlentities($gender);
        $email_saturday_register = htmlentities($saturday_registration);
        $email_saturday_event = htmlentities($saturday_event);
        $email_sunday_register = htmlentities($sunday_registration);
        $email_sunday_event = htmlentities($sunday_event);

        $subject = "Registration Form Submission From: " . $email_name;
        $body = "
            $email_name has filled out your registration form. \n
            Name: $email_name \n
            Email: $email_email \n
            Emergency Contact: $email_ec_name \n
            Emergency Contact Number: $email_number \n
            Gender: $email_gender \n
            Age: $email_age \n
            
            Events interested in: \n
            Saturday:$email_saturday_event \n
            Sunday: $email_sunday_event \n

            Interested in being: \n
            Saturday: $email_saturday_register \n
            Sunday: $email_sunday_register \n
            Special notes: \n
            $email_message 
        ";
    }

    if(!mail(EMAIL_ADDRESS, $subject, $body)) die(json_encode(array('status' => 500, 'message' => 'Message could not be sent. Please contact the website administrator. - Email')));
}

function formQuery()
{

    // Connecting to database
    $db = new mysqli(
        SERVER_NAME, 
        USER_NAME, 
        PASSWORD,
        DB_NAME
    );

    if ($db->connect_error) die(json_encode(array('status' => 500, 'message' => 'Message could not be sent. Please contact the website administrator.')));

    global $name, $email, $number, $message, $form;
    // Information - SANATIZED
    $safe_name = $db->real_escape_string($name);
    $safe_email = $db->real_escape_string($email);
    $safe_telephone = $db->real_escape_string($number);
    $safe_message = $db->real_escape_string($message);

    if($form != 'contactForm'){
        global $ec_name, $age, $gender, $saturday_registration, $saturday_event, $sunday_registration, $sunday_event;

        // Information - SANATIZED
        $safe_ec_name = $db->real_escape_string($ec_name);
        $safe_age = $db->real_escape_string($age);
        $safe_gender = $db->real_escape_string($gender);
        $safe_saturday_event = $db->real_escape_string($saturday_event);
        $safe_saturday_registration = $db->real_escape_string($saturday_registration);
        $safe_sunday_event = $db->real_escape_string($sunday_event);
        $safe_sunday_registration = $db->real_escape_string($sunday_registration);
    }

    if($form == 'contactForm'){
        $query ="
            INSERT INTO `contact_form`
                    (
                    `name`,
                    `email`,
                    `telephone`,
                    `message`,
                    `date`
                    )
            VALUES  (
                    '$safe_name',
                    '$safe_email',
                    '$safe_telephone',
                    '$safe_message',
                    CURRENT_TIMESTAMP
                    );
        ";
    } else{
        $query = "
            INSERT INTO `registration_form` (
                                        `Name`,
                                        `Email`,
                                        `Emergency Contact`,
                                        `Emergency Contact Number`,
                                        `Age`,
                                        `Gender`,
                                        `Saturday Event`,
                                        `Saturday Registration Type`,
                                        `Sunday Event`,
                                        `Sunday Registration Type`,
                                        `Special Notes`,
                                        `Date Submitted`
                                        )
            VALUES  (
                    '$safe_name',
                    '$safe_email',
                    '$safe_ec_name',
                    '$safe_telephone',
                    '$safe_age',
                    '$safe_gender',
                    '$safe_saturday_event',
                    '$safe_saturday_registration',
                    '$safe_sunday_event',
                    '$safe_sunday_registration',
                    '$safe_message',
                    CURRENT_TIMESTAMP
                    );
        ";
    }

    // Checking query
    if (!$db->query($query)) {
        $db->close();
        die(json_encode(array('status' => 500, 'message' => 'Message could not be sent. Please contact the website administrator.'))); 
    } 

    // Success message
    $db->close();
    exit(json_encode(array('status' => 200, 'message' => 'Thank you! Your message has successfully been submitted.')));
}

function formSubmission()
{
    /* Information */
    global $name, $email, $number, $message, $form;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['telephone'];
    $message = $_POST['message'];
    $form = $_POST['form'];

    if($form !== 'contactForm'){
        global $ec_name, $age, $gender, $saturday_registration, $saturday_event, $sunday_registration, $sunday_event;

        $ec_name = $_POST['ecName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $saturday_registration = $_POST['satRegister'];
        $sunday_registration = $_POST['sunRegister'];
        $saturday_event = $_POST['satEvent'];
        $sunday_event = $_POST['sunEvent'];

    }

    /* Helper Functions */
    formValidation(); // Validating Forms
    formEmail(); // Sending Emails
    formQuery(); // Sending Info to the DB
}
formSubmission();