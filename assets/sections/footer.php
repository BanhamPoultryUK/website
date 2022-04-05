	</div>
		<div id="ft">
			<div id="ft_nav">
				<p>Copyright &copy; <?php echo date('Y'); ?> Banham Poultry (2018) Limited &middot; Trading as "Banham Poultry"<br />
					Registered Office: 2nd Floor, Colmore Court, 9 Colmore Row, Birmingham, England, B3 2BJ<br />
					Registered in England &amp; Wales 11606211<br />
					VAT Registration No. 307 0082 45</p>
				<div class="ft_links">
					<a href="/assets/files/BanhamPoultryModernSlaveryPolicy.pdf">Modern Slavery Policy</a><br />
					<a href="https://mail.banhampoultryuk.com/owa/">Employee Mail</a><br />
					<a href="/assets/files/BanhamPoultrySupplierTermsAndConditions.pdf">Supplier Terms and Conditions</a>
				</div>
				<div class="ft_links">
				</div>
				<div class="ft_links">
				</div>
			</div>
		</div>

		<script>

			// Navigation Dimming

			var path = window.location.pathname;

			if ( path.slice(0, 21) == '/banhampoultryuk.com/' ) path = path.slice(21);
			else path = path.slice(1);

			if ( path.slice(-5) == '.html' ) path = path.slice(0, -5);
			if ( path.slice(-4) == '.php' ) path = path.slice(0, -4);

			if ( !path || path == 'index' ) path = 'home';

			element = document.getElementById('nav_'+path);
			if ( element ) element.className = element.className + ' current_page';

		</script>

		<?php include __DIR__.'/cookie-compliance.php'; ?>

	</body>
</html>
