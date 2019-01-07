<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ***** BEGIN CONFIG *****

// Where to send the mail to
$to_email = 'sales@banhampoultryuk.com';

// This bit sets the URLs of the supporting pages.
// If you change the names of any of the pages, you will need to change the values here.
$form_page = '../contact_us.php';
$reply_page = 'pages/thank-you_sales.php';

// This next bit loads the form field data into variables.
// If you add a form field, you will need to add it here.
$replyto = $_POST['email'] ;
$Message = 'Title: '.$_POST['suggestion'];
$Message .= "\nName: ".$_POST['name'];
$Message .= "\nCompany Name: ".$_POST['company_name'];
$Message .= "\nJob Title: ".$_POST['job_title'];
$Message .= "\nEmail: ".$_POST['email'];
$Message .= "\nAddress: ".$_POST['address'];
$Message .= "\nTel No: ".$_POST['tel_no'];
$Message .= "\nEnquiry: \n\n".$_POST['comments'];

// ***** END CONFIG *****

require 'PHPMailer-6.0.6/src/Exception.php';
require 'PHPMailer-6.0.6/src/PHPMailer.php';
require 'PHPMailer-6.0.6/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 4;                                 // Enable verbose debug output
    //$mail->isSMTP();                                      // Set mailer to use SMTP
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    //$mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'user@example.com';                 // SMTP username
    //$mail->Password = 'secret';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //$mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('website@banhampoultryuk.com', 'Website');
    $mail->addAddress($to_email);                         // Add a recipient
    $mail->addReplyTo($replyto, $_POST['name']);
    $mail->addBCC('it@banhampoultryuk.com');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Enquiry via Website by '.$_POST['name'];
    $mail->Body    = $Message;
    $mail->AltBody = $Message;

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
} catch (\Exception $e) {
   echo 'Message could not be sent. System Error: ', $e->getMessage();
}

header('Location: '.$reply_page);