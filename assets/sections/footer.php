	</div>
		<div id="ft">
			<div id="ft_nav">
				<p>Copyright &copy; <?php echo date('Y'); ?> Banham Poultry (2018) Limited &middot; Trading as "Banham Poultry"<br />
					Registered Office: Station Road, Attleborough, Norfolk NR17 2AT United Kingdom<br />
					Registered in England &amp; Wales 11606211 <!-- TODO VAT Registration &middot; VAT Registration No. 995 9214 62--></p>
				<div class="ft_links">
					<a href="/careers.php">Careers</a><br />
					<a href="https://mg.banhampoultryuk.com/owa">Employee Mail</a>
				</div>
				<div class="ft_links">
					<a href="/agriculture.php">Agriculture</a><br />
					<a href="/environment.php">Environment</a><br />
					<a href="/contact_us.php">Contact Us</a>
				</div>
				<div class="ft_links">
					<a href="/index.php">Home</a><br />
					<a href="/about_us.php">About Us</a><br />
					<a href="/products.php">Products</a>
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