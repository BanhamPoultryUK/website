<?php

	$Title = 'Banham Poultry Limited &#45; Careers';
	$Description = 'Search for vacancies at Banham Poultry Limited.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	$Custom = '<script type="text/javascript" src="assets/js/gen_validatorv31.js"></script>';
	include 'assets/sections/header.php';

require_once '_contact-form/fgcontactform.php';
$formproc = new FGContactForm();
// 1. Add your email address here.
// You can add more than one receipients.
$formproc->AddRecipient('recruitment@banhampoultryuk.com'); //<<---Put your email address here
// 2. For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');
$formproc->AddFileUploadField('photo', 'pdf,doc,docx', 10240);

if ( isset($_POST['submitted']) ) {
	if ( $formproc->ProcessForm() ) {
		$formproc->RedirectToURL('_contact-form/pages/thank-you_recruitment.php');
	}
}

?>
		<div id="main">
		<div id="attach_form_div">
		<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
			<fieldset >
				<h3 class="heading">Contact us</h3>
				<p>If you would like to send us your cv, please attach it with this form.</p><br /><br />
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
				<p>By submitting your details you consent to Banham Poultry Limited retaining them for legitimate business interests in line with current GDPR legislation.</p>
				<br />
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
	frmvalidator.addValidation("message","maxlen=10240","The message is too long!(more than 10MB!)");
	frmvalidator.addValidation("photo","file_extn=pdf;doc;docx","Supported file types are: pdf, doc, docx");
	</script>
		</div>
			<div id="job_desc_div">
				<h3 class="heading">Job Vacancies</h3>
				<br>
				<hr>
				<br>
				<h4>Production Operatives</h4>
				<ul>
					<li>Shift Thursday, Friday, Saturday, Monday, Tuesday, Wednesday then 7 days off.
					<li>Attractive rates of pay.
				</ul>
				<br>
				<h4>Hygiene Cleaners (Night Shift)</h4>
				<ul>
					<li>Previous hygiene experience desirable.
					<li>10pm to 6am, Sunday-Thursday / Tuesday-Saturday.
					<li>£8.20 per hour
				</ul>
				<br>
				<h4>Electrical/Mechanical Engineers</h4>
				<ul>
					<li>Shift - 5 days on 5 days off 5 nights
					<li>Competitive rates of pay
				</ul>
				<br>
				<h4>Refrigeration Engineer</h4>
				<ul>
					<li>Shift – Monday to Friday days
					<li>Competitive rates of pay
				</ul>
				<br>
				<h4>Dry Goods Storeperson</h4>
				<ul>
					<li>Days 7.30am to 4pm
					<li>FLT licence
					<li>Experience of working in confined spaces
					<li>Computer skills
					<li>Previous experience although training will be given
				</ul>
				<!--
				<p>We have no open positions at this time.</p>
				-->
				<br>
				<hr>
				<br>
				<h4>Discounted staff sales, life insurance and parking on-site are available.</h4>
				<br>
				<h4>Please contact <a href="&#x6D;&#x61;&#x69;&#x6C;&#x74;&#x6F;&#x3A;&#x72;&#x65;&#x63;&#x72;&#x75;&#x69;&#x74;&#x6D;&#x65;&#x6E;&#x74;&#x40;&#x62;&#x61;&#x6E;&#x68;&#x61;&#x6D;&#x70;&#x6F;&#x75;&#x6C;&#x74;&#x72;&#x79;&#x75;&#x6B;&#x2E;&#x63;&#x6F;&#x6D;">recruitment@banhampoultryuk.com</a> for further information.</h4>
				<br>
				<h4>We do not accept correspondence via Recruitment Agencies.</h4>
				<br>
				<p>If you have submitted a CV or Application Form you will hear from us, but please be patient.</p>
				<p>Thank you for your interest.</p>
			</div>
		</div>
	</div>

<?php include 'assets/sections/footer.php'; ?>
