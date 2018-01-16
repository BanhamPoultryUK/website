<?php
	
	$Title = 'Banham Poultry Limited &#45; Contact Us';
	$Description = 'Write to us, contact us, get directions to our site and request product literature.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	include 'assets/sections/header.php';
	
?>
			<div id="main">
				<div id="contact_div">
					<div class="detail">
						<h3 class="heading">Write to us</h3>
						<p>Banham Poultry Limited<br />Station Road<br />Attleborough<br />Norfolk<br />NR17 2AT<br />United Kingdom</p>
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
							<input id="direction_input" type="text" onfocus="if(this.value=='Enter your postal code')this.value=''" onblur="if(this.value=='')this.value='Enter your postal code'" title="" value="Enter your postal code" name="saddr"/>
							<input type="hidden" name="daddr" value="Banham Poultry, Station Road, Attleborough NR17 2AT, UK"/><br /><br />		   
							<input id="direction_icon" type="image" src="assets/images/1340469161_Contacts.png" title="Get Directions" alt="Get Directions"/>
						</form>
					</div>
				</div>
			<div id="registration_div">
					<h3 class="heading">Supplier/Customer Registration</h3>
					<p>Please use this form to make an enquiry or to request product literature</p><br/>
					<p><span>&#42;</span> required fields</p><br/>
				<form id="registration" action="php/send_mail.php" method="post">
			<div class="formlabel">Title</div>
				<div class="formfield">
					<select name="suggestion">
					<option selected="selected">Mr</option>
					<option>Mrs</option>	
					<option>Ms</option>	
					<option>Miss</option>	
					<option>Dr</option>	
				</select>
			</div>		
		<div class="formlabel">Name</div>
		<div class="formfield"> <input class="field" type="text" name="name" size="45"/></div>
		
		<div class="formlabel">Company Name</div>
		<div class="formfield"> <input class="field" type="text" name="company_name" size="45"/></div>
		
		<div class="formlabel">Job Title</div>
		<div class="formfield"> <input class="field" type="text" name="job_title" size="45"/></div>

		<div class="formlabel">Email <span>&#42;</span></div>
		<div class="formfield"> <input class="field" type="email" name="email" size="45"/></div>

		<div class="formlabel">Confirm Email <span>&#42;</span></div>
		<div class="formfield"> <input class="field" type="email" name="confirm_email" size="45"/></div>
		<div class="formlabel">Address</div>
		<div class="formfield">
			<textarea name="address" rows="5" cols="40"></textarea>
		</div>
		
		<div class="formlabel">Telephone</div>
		<div class="formfield"> <input class="field" type="text" name="tel_no" size="45"/></div>
			
		<div class="formlabel">Nature of your enquiry</div>
		<div class="formfield">
			<textarea name="comments" rows="6" cols="40"></textarea>
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