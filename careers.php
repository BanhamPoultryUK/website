<?php

	$Title = 'Banham Poultry &middot; Careers';
	$Description = 'Search for vacancies at Banham Poultry.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	$Custom = '<script type="text/javascript" src="assets/js/gen_validatorv31.js"></script>';
	include 'assets/sections/header.php';
?>
		<div id="main">
		<div id="attach_form_div">
		<form id='contactus' action="/_contact-form/send-mail_recruitment.php" method="post" enctype="multipart/form-data">
			<fieldset >
				<h3 class="heading">Contact us</h3>
				<p>If you would like to send us your cv, please attach it with this form.</p><br /><br />
			<div class='container'>
				<h3><label for='name'>Name <span>*</span></label></h3>
				<input type='text' name='name' id='name' value='' maxlength="50" required /><br/>
			</div>
			<div class='container'>
				<h3><label for='email'>Email Address <span>*</span></label></h3>
				<input type='text' name='email' id='email' value='' maxlength="50" required /><br/>
			</div>
			<div class='container'>
				<h3><label for='message'>Message</label></h3>
				<textarea rows="10" cols="50" name='message' id='message'></textarea>
			</div>
			<!-- TODO File uploads
			<div style="clear:both"></div>
			<div class='container'>
				<h3><label for='cv'>Upload your CV</label></h3>
				<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
				<input type="file" name='cv' id='cv' /><br/>
			</div>
			-->
			<div class='container'>
				<p>By submitting your details you consent to Banham Poultry (2018) Limited retaining them for legitimate business interests in line with current GDPR legislation.</p>
				<br />
				<input type='submit' id='submit' name='Submit' value='Send' />
			</div>
		</fieldset>
	</form>
		</div>
			<div id="job_desc_div">
				<h3 class="heading">Job Vacancies</h3>
				<br>
				<hr>
				<br>
				<h4>Multi-skilled Warehouse operative</h4>
				<p>Banham Poultry LTD has exciting new position available – Multi Skilled Warehouse operative in food manufacturing plant with immediate start!</p>
				<p>Responsibilities:
					<ul>
						<li>Scanning, packing, loading, documenting packed goods for despatch
						<li>Operating forklift to load and unload goods
						<li>Keeping your workplace clean up to company standards
						<li>Working according to health and safety standards
					</ul>
				</p>
				<p>Pay structure / rates:
					<ul>
						<li>Day shift 0600-1800 3 on / 1 off / 3 on / 7 off
						<li>Night shift Monday to Friday 1800-0300 or 2100-0600
						<li>Starting pay rate £10.30 p/h, after probation period - £10.61p/h.
						<li>Overtimes available with increased rates!
					</ul>
				</p>
				<p>Requirements:
					<ul>
						<li>Forklift licence (preferred but not essential)
						<li>Experience preferred but not essential as training will be given
						<li>Own transport due to location of the factory
					</ul>
				</p>
				<p>If you are interested please apply and we will contact you to arrange interview.</p>
				<!--
				<p>We have no open positions at this time.</p>
				-->
				<br>
				<hr>
				<br>
				<h4>Discounted staff sales, life insurance, and on-site parking and canteen are available.</h4>
				<br>
				<h4>Please contact <a href="mailto:hr@banhampoultryuk.com">hr@banhampoultryuk.com</a> for further information.</h4>
				<br>
				<h4>We do not accept correspondence via Recruitment Agencies.</h4>
				<br>
				<p>If you have submitted a CV or Application Form you will hear from us, but please be patient.</p>
				<p>Thank you for your interest.</p>
			</div>
		</div>
	</div>

<?php include 'assets/sections/footer.php'; ?>
