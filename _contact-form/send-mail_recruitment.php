<?php

// ***** BEGIN CONFIG *****

// Where to send the mail to
//$to_email = 'recruitment@banhampoultryuk.com';
$to_email = 'it@banhampoultryuk.com';

// This bit sets the URLs of the supporting pages.
// If you change the names of any of the pages, you will need to change the values here.
$form_page = '../careers.php';
$reply_page = 'pages/thank-you_recruitment.php';

// This next bit loads the form field data into variables.
// If you add a form field, you will need to add it here.
$replyto = $_POST['email'] ;
$Message = "\nName: ".$_POST['name'];
$Message .= "\nEmail: ".$_POST['email'];
$Message .= "\nEnquiry: \n\n".$_POST['message'];

// ***** END CONFIG *****

require 'settings.browning.php';
require 'function.browning.php';

$Mail = Browning(
	$to_email,
	'Enquiry via Website by '.$_POST['name'],
	$_POST['message'],
	$_POST['name'],
	$replyto,
	true
);

if ( $Mail['Success'] ) {
	echo 'Success! We managed to send the E-Mail.'.PHP_EOL;
	//header('Location: '.$reply_page);
} else {
	echo 'Sorry, we failed to send the E-Mail.'.PHP_EOL;
	echo $Mail['Error'].PHP_EOL;
	echo '<!--'.PHP_EOL;
	var_dump($Mail);
	echo PHP_EOL.'-->'.;
}