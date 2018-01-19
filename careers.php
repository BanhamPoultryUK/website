<?php

	$Title = 'Banham Poultry Limited &#45; Careers';
	$Description = 'Search for vacancies at Banham Poultry Limited.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	$Custom = '<script type="text/javascript" src="assets/js/gen_validatorv31.js"></script>';
	include 'assets/sections/header.php';

/*
	Contact Form from HTML Form Guide
	This program is free software published under the
	terms of the GNU Lesser General Public License.
	See this page for more info:
	http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/

require __DIR__.'/_contact-form/fgcontactform.php';

$formproc = new FGContactForm();

// 1. Add your email address here.
// You can add more than one receipients.
$formproc->AddRecipient('recruitment@banhampoultryuk.com'); //<<---Put your email address here

// 2. For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

$formproc->AddFileUploadField('photo','pdf,doc,docx',2024);

if ( isset($_POST['submitted']) ) {
	if ( $formproc->ProcessForm() ) {
		$formproc->RedirectToURL("cv_reply.php");
	}
}

?>
		<div id="main">
		<div id="attach_form_div">
		<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
			<fieldset >
				<h3 class="heading">Contact us</h3>
				<p>If you would like to send us your cv, please attach it with this form.</p><br /><br />
				<input type='hidden' name='submitted' id='submitted' value='1'/>
				<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
				<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
				<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
			<div class='container'>
				<h3><label for='name' >Name<span> *</span></label></h3>
				<input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
				<span id='contactus_name_errorloc' class='error'></span>
			</div>
			<div class='container'>
				<h3><label for='email' >Email Address<span> *</span></label></h3>
				<input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
				<span id='contactus_email_errorloc' class='error'></span>
			</div>
			<div class='container'>
				<h3><label for='message' >Message</label></h3>
				<span id='contactus_message_errorloc' class='error'></span>
				<textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
			</div>
			<div style="clear:both"></div>
			<div class='container'>
				<h3><label for='photo' >Upload your CV</label></h3>
				<input type="file" name='photo' id='photo' /><br/>
				<span id='contactus_photo_errorloc' class='error'></span>
			</div>
			<div class='container'>
				<input type='submit' id='submit' name='Submit' value='Send' />
			</div>
		</fieldset>
	</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->
	<script type='text/javascript'>
	var frmvalidator  = new Validator("contactus");
	frmvalidator.EnableOnPageErrorDisplay();
	frmvalidator.EnableMsgsTogether();
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email address");
	frmvalidator.addValidation("email","email","Please provide a valid email address");
	frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
	frmvalidator.addValidation("photo","file_extn=pdf;doc;docx","Supported file types are: pdf, doc, docx");
	</script>
		</div>
			<div id="job_desc_div">
				<h3 class="heading">Job Vacancies</h3>
				<br>
				<hr>
				<br>
				<h4>IMMEDIATE START AVAILABLE - PERMANENT JOB</h4>
				<ul>
					<li>We are currently looking for Live Bird Hangers to join our team, working days.
					<li>Full training can be given and you will require a certificate of competence which we will fund.
					<li>This is a permanent job working 37.5 hours per week on a continental style shift system 6am - 6.30pm 3 days per week (Thursday, Friday, Saturday – Sunday Off and Monday, Tuesday, Wednesday followed by 7 days off )
					<li>Extra shifts are available and the job will pay £9.00 per hour (plus paid breaks).
					<li>This job would be ideal for anyone with a background in poultry, live bird catching or collection.
					<li>Overtime is available
				</ul>
				<br>
				<h4>Hygiene Cleaners (Night Shift)</h4>
				<ul>
					<li>Previous hygiene experience desirable.
					<li>10pm to 6am, Sunday-Thursday / Tuesday-Saturday.
					<li>Starting rate £7.85
				</ul>
				<br>
				<h4>Production Operatives</h4>
				<ul>
					<li>Rotating Shifts 6am to 6.30pm (as per Live Hanger vacancy)
					<li>Starting rate £7.65
				</ul>
				<br>
				<h4>Production Operatives (Night Shift)</h4>
				<ul>
					<li>6.30pm to 3am (Monday to Friday)
					<li>Starting rate £7.65
				</ul>
				<!--
				<p>We have no open positions at this time.</h4>
				-->
				<br>
				<hr>
				<br>
				<h4>Discounted staff sales, life insurance and parking on-site are available.</h4>
				<br>
				<h4>Please contact <a href="mailto:recruitment@banhampoultryuk.com">recruitment@banhampoultryuk.com</a> for further information.</h4>
				<br>
				<h4>We do not accept correspondence via Recruitment Agencies.</h4>
				<br>
				<p>If you have submitted a CV or Application Form you will hear from us, but please be patient.</p>
				<p>Thank you for your interest.</p>
			</div>
		</div>
	</div>

<?php include 'assets/sections/footer.php'; ?>
