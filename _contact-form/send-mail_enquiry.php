<?php

// ***** BEGIN CONFIG *****

// Where to send the mail to
if ( $_POST['enquiry_type'] = 'hr') {
	$to_email = 'recruitment@banhampoultryuk.com';
} else if ( $_POST['enquiry_type'] = 'sales') {
	$to_email = 'sales@banhampoultryuk.com';
} else {
	$to_email = 'elly@banhampoultryuk.com';
}

// This bit sets the URLs of the supporting pages.
// If you change the names of any of the pages, you will need to change the values here.
$reply_page = 'pages/thank-you_sales.php';

// This next bit loads the form field data into variables.
// If you add a form field, you will need to add it here.
$replyto = $_POST['email'];
$Message = 'Title: '.$_POST['suggestion'];
$Message .= "\nName: ".$_POST['name'];
$Message .= "\nCompany Name: ".$_POST['company_name'];
$Message .= "\nJob Title: ".$_POST['job_title'];
$Message .= "\nEmail: ".$_POST['email'];
$Message .= "\nAddress: ".$_POST['address'];
$Message .= "\nTel No: ".$_POST['tel_no'];
$Message .= "\nEnquiry: \n\n".$_POST['comments'];

// ***** END CONFIG *****

require 'settings.browning.custom.php';
require 'function.browning.php';

$Mail = Browning(
	$to_email,
	'Enquiry via Website by '.$_POST['name'],
	$Message,
	$_POST['name'],
	$replyto,
	true
);

if ( $Mail['Success'] ) {
	//echo 'Success! We managed to send the E-Mail.'.PHP_EOL;
	header('Location: '.$reply_page);
} else {
	echo 'Sorry, we failed to send the E-Mail.'.PHP_EOL;
	echo $Mail['Error'].PHP_EOL;
	echo '<!--'.PHP_EOL;
	var_dump($Mail);
	echo PHP_EOL.'-->'.PHP_EOL;
}
