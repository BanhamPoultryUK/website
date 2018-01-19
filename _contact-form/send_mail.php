<?php

/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "sales@banhampoultryuk.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "../contact_us.php";
$error_page = "../form_error.php";
$reply_page = "../form_reply.php";
$confirm_email_page = "../form_confirm_email.php";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email'] ;
$confirm_email = $_REQUEST['confirm_email'] ;
$Message = 'Title: '.$_REQUEST['suggestion'];
$Message .= "\nName: ".$_REQUEST['name'];
$Message .= "\nCompany Name: ".$_REQUEST['company_name'];
$Message .= "\nJob Title: ".$_REQUEST['job_title'];
$Message .= "\nEmail: ".$_REQUEST['confirm_email'];
$Message .= "\nAddress: ".$_REQUEST['address'];
$Message .= "\nTel No: ".$_REQUEST['tel_no'];
$Message .= "\nEnquiry: ".$_REQUEST['comments'];


/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_REQUEST['email'])) {

header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($email_address)) {
header( "Location: $error_page" );
}

// If email addresses do not match, redirect to the error page.
elseif ($email_address != $confirm_email) {
header( "Location: $confirm_email_page" );
}

// If email injection is detected, redirect to the error page.
elseif ( isInjected($email_address) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
mail( "$webmaster_email", "Enquiry via Website",
$Message, "From: ".$_REQUEST['email'] );
header( "Location: $reply_page" );
}
?>