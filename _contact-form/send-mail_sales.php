<?php

// Where to send the mail to
$to_email = 'lewis.goddard@banhampoultryuk.com';

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$form_page = '../contact_us.php';
$error_page = 'pages/form_error.php';
$reply_page = 'pages/form_reply.php';

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email'] ;
$Message = 'Title: '.$_REQUEST['suggestion'];
$Message .= "\nName: ".$_REQUEST['name'];
$Message .= "\nCompany Name: ".$_REQUEST['company_name'];
$Message .= "\nJob Title: ".$_REQUEST['job_title'];
$Message .= "\nEmail: ".$_REQUEST['confirm_email'];
$Message .= "\nAddress: ".$_REQUEST['address'];
$Message .= "\nTel No: ".$_REQUEST['tel_no'];
$Message .= "\nEnquiry: \n\n".$_REQUEST['comments'];


/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array(
		'(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if ( preg_match($inject, $str) ) {
		return true;
	} else {
		return false;
	}
}

// If the user tries to access this script directly, redirect them to the form.
if ( !isset($_REQUEST['email']) ) {
	header('Location: '.$form_page);

// If the form fields are empty, redirect to the error page.
} else if ( empty($email_address) ) {
	header('Location: '.$error_page);

// If email injection is detected, redirect to the error page.
} else if ( isInjected($email_address) ) {
	header('Location: '.$error_page);

// If we passed all previous tests, send the email then redirect to the thank you page.
} else {
	$result = mail(
		$to_email,
		'Enquiry via Website',
		$Message,
		'From: '.$_REQUEST['email']
	);
	echo $to_email;
	echo $Message;
	var_dump($result);
	//header('Location: '.$reply_page);
}
