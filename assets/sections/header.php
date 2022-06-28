<?php date_default_timezone_set('Europe/London'); ?><!DOCTYPE html>
<!--
	
	Copyright Banham Poultry (2018) Limited
	
	Based on the original design and development by Lucy Brooks
	Email: lucybrooks01@aol.com
	
-->
<html lang="en">
<head>
	
	<meta charset="utf-8" />
	
	<title><?php echo (!empty($Title) ? $Title : 'Welcome to Banham Poultry &middot; Suppliers of High Quality Fresh Norfolk Chicken'); ?></title>
	
	<meta name="description" content="<?php echo (!empty($Description) ? $Description : 'We are the biggest employer in the mid Norfolk constituency and we produce the best quality chicken anywhere to be found. Banham Poultry as a company is committed to providing the highest quality products and service to all our customers.'); ?>" />
	<meta name="keywords" content="<?php echo (!empty($Keywords) ? $Keywords : 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers'); ?>" />
	
	<meta name="google-site-verification" content="TLOdfBwhEPBj9pcV6yeqJ4Y3N4Af-Xs0WIIpKQ5d5z4" />
	<meta name="robots" content="index,follow" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
	<link rel="manifest" href="/assets/favicons/manifest.json">
	<link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#c0392b">
	<link rel="shortcut icon" href="/assets/favicons/favicon.ico">
	<meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" type="text/css" media="all" href="https://cdn.jsdelivr.net/combine/gh/eustasy/colors.css@1/colors.min.css,gh/necolas/normalize.css@8/normalize.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic" />
	<link rel="stylesheet" type="text/css" media="all" href="/assets/css/main.css" />
	<link rel="stylesheet" type="text/css" media="print" href="/assets/css/print.css" />
	<?php if ( !empty($Custom) ) echo $Custom; ?>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-93011721-1', 'auto');
		ga('send', 'pageview');
	</script>
	
</head>
<body>

<div id="skiptocontent">
	<a href="#main">skip to main content</a>
</div>

<div id="wrapper">
	<div id="hd">
		<a href="/" title="Home"><img id="hd_logo" src="/assets/images/new_hd.png" alt="Banham Poultry Logo"></a>
		<div id="hd_links">
			<a href="/cookie-policy">Cookie Policy</a>
			<span>&nbsp;&middot;&nbsp;</span>
			<a href="/assets/files/BanhamPoultryPrivacyPolicy.pdf" title="">Privacy Policy</a>
			<span>&nbsp;&middot;&nbsp;</span>
			<a href="/assets/files/BanhamPoultryTermsOfUse.pdf" title="">Terms of Use</a>
		</div>
	</div>
	<div id="navigation">
		<ul id="nav">
			<li id="nav_home"><a href="/" title="">Home</a></li>
			<li id="nav_about_us"><a href="/about_us" title="">About Us</a></li>
			<li id="nav_products"><a href="/products" title="">Products</a></li>
			<li id="nav_agriculture"><a href="/agriculture" title="">Agriculture</a></li>
			<li id="nav_environment"><a href="/environment" title="">Environment</a></li>
			<li id="nav_careers"><a href="/careers" title="">Careers</a></li>
			<li id="nav_contact_us"><a href="/contact_us" title="">Contact Us</a></li>
		</ul>
	</div>
