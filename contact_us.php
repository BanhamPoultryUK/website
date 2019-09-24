<?php

	$Title = 'Banham Poultry &middot; Contact Us';
	$Description = 'Write to us, contact us, get directions to our site and request product literature.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	include 'assets/sections/header.php';

?>
		<div id="main">
			<div id="contact_div">

				<div class="detail">
					<h3 class="heading">Write to us</h3>
					<p>Banham Poultry (2018) Limited<br />Station Road<br />Attleborough<br />Norfolk<br />NR17 2AT<br />United Kingdom</p>
				</div>

				<div class="detail">
					<h3 class="heading">Contact us</h3>
					<p><span>t </span> +44 (0)1953 455001</p><br />
					<p><span>f </span> +44 (0)1953 455466</p><br />
<a id="email_link" href="mailto:&#115;&#097;&#108;&#101;&#115;&#064;&#098;&#097;&#110;&#104;&#097;&#109;&#112;&#111;&#117;&#108;&#116;&#114;&#121;&#117;&#107;&#046;&#099;&#111;&#109;?subject=Enquiry%20via%20website">sales@banhampoultryuk.com</a><br />
<a href="careers.php">For careers please click here</a>
				</div>
				<div class="detail">
					<h3 class="heading">Find Us</h3>
					<form id="direction" action="http://maps.google.com/maps" method="get">
						<label for="direction_input">Source Address</label>
						<input id="direction_input" type="text" onfocus="if(this.value=='Enter your postal code')this.value=''" onblur="if(this.value=='')this.value='Enter your postal code'" title="" value="Enter your postal code" name="saddr"/>
						<input type="hidden" name="daddr" value="Banham Poultry, Station Road, Attleborough NR17 2AT, UK"/><br /><br />
						<input id="direction_icon" type="image" src="assets/images/1340469161_Contacts.png" title="Get Directions" alt="Get Directions"/>
					</form>
				</div>

			</div>
			<div id="registration_div">

				<h3 class="heading">Contact us</h3>
				<p>Please use this form to make an enquiry or to request product literature</p><br/>
				<p><span>&#42;</span> required fields</p><br/>
				
				

				<form id="registration" action="/_contact-form/send-mail_enquiry.php" method="post">
					
					<label for="suggestion" class="formlabel">Title</label>
					<div class="formfield">
						<select id="suggestion" name="suggestion">
							<option selected="selected">Mr</option>
							<option>Mrs</option>
							<option>Ms</option>
							<option>Miss</option>
							<option>Dr</option>
						</select>
					</div>
					
					<label for="name" class="formlabel">Name</label>
					<div class="formfield"><input class="field" type="text" id="name" name="name" size="45"/></div>

					<label for="company_name" class="formlabel">Company Name</label>
					<div class="formfield"><input class="field" type="text" id="company_name" name="company_name" size="45"/></div>

					<label for="job_title" class="formlabel">Job Title</label>
					<div class="formfield"><input class="field" type="text" id="job_title" name="job_title" size="45"/></div>

					<label for="email" class="formlabel">Email <span>&#42;</span></label>
					<div class="formfield"><input class="field" type="email" id="email" name="email" size="45"/></div>

					<label for="address" class="formlabel">Address</label>
					<div class="formfield">
						<textarea id="address" name="address" rows="5" cols="40"></textarea>
					</div>

					<label for="tel_no" class="formlabel">Telephone</label>
					<div class="formfield"><input class="field" type="text" id="tel_no" name="tel_no" size="45"/></div>

					<label for="comments" class="formlabel">Nature of your enquiry</label>
					<div class="formfield">
						<select name="enquiry_type">
							<option value="hr">HR</option>
							<option value="sales" selected>Sales</option>
							<option value="other">Other</option>
						</select>
						<br />
						<textarea id="comments" name="comments" rows="6" cols="40"></textarea>
					</div>
					
					<div id="button_div">
						<input class="form_button" type="submit" value="Send" />
						<input class="form_button" type="reset" value="Reset" />
					</div>
					
				</form>
				
				
				
			</div>
			
		</div>
	</div>

<?php include 'assets/sections/footer.php'; ?>
