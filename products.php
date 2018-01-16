<?php
	
	$Title = 'Banham Poultry Limited &#45; Product Profile';
	$Description = 'As a company we our committed to providing the highest quality products and service to all our customers. We consider that the quality of the product supplied to our customers is of the utmost importance to the long term success and growth of our company. The Company supplies chicken to major supermarkets, and other established stores and wholesalers throughout the UK.';
	$Keywords = 'banham poultry,banham group,fresh british chicken,poultry products,poultry processors,poultry farmers';
	include 'assets/sections/header.php';
	
?>
			
			<div id="display_bg">
				<div id="display">
					<img src="assets/images/prod_newer.png" width="920" height="245" alt=""/>
				</div>
			</div>
				<div id="breadcrumbs_div">
					<ul>
						<li><a href="/" title="">Home<span>&nbsp;&#187;</span></a></li>
						<li id="current_bc">Products</li>
					</ul>
				</div>
			<div id="main_prod">
				<div id="content_div">
				<a href="#mark_desc">&#187; Market Description</a><br />
				<a href="#profile">&#187; Product Profile</a>
				</div>
			<div id="main_content">
				<div class="content_div">
					<h3 class="heading" id="mark_desc">Market Description</h3>
					<p>As a company, we operate primarily in the fresh retail sector, but still maintain our traditional links to the wholesale and export markets.  In an ever-changing market place we are constantly updating our manufacturing process to maintain our reputation as market leaders in both quality and service. We were the first UK Company to offer leak proof packaging for whole bird with the Ulma pacific flow wrapper.  We have recently invested heavily in IQF production for retail, wholesale and export markets.  This is part of an onward investment programme aimed at maintaining our market strength.</p>
				</div>
				<div class="content_div">
					<h3 class="heading" id="profile">Product Profile</h3>
					<p>Products currently supplied by Banham Poultry Limited</p>
					<h5 class="sub_heading">Fresh Range</h5>
					<p>Leak Proof Oven Ready Whole Bird, Boneless/Skinless Breast Fillet, Skin-On Breast Fillet, Oyster Cut Thighs, Drumsticks, Oyster Cut Legs, Leg Quarters, Rotisserie, Hearts, Wings, Gizzards, Liver Tubs, Inner Breast Fillet/Goujons, Diced/Sliced Breast Fillet.</p>
					</div>
					<div class="content_div">
						<img src="assets/images/two_prod.png" width="578" height="165" title="" alt="" />
					</div>
					<div class="content_div">
						<h5 class="sub_heading">Frozen Range</h5>
						<p>Large Roasting Chicken, Bulk Drumsticks, Bulk Thighs, Inner Fillets, Bulk Liver, Gizzards, Hearts, Wings, Mechanically Recovered Meat (MRM), Baader Mince, Leg Quarters.</p>
					</div>
					<div class="content_div">
						<h5 class="sub_heading">Frozen IQF Range</h5>
						<p>Breast Fillets, Inner Fillets, Drumsticks, Thighs, Wings.</p>
					</div>
					<?php
						// IF not passed the 22nd of December 2014
						if( time() < 1419206400 ) {
					?>
					<div class="content_div">
						<h5 class="sub_heading">Free Range</h5>
						<p>Whole Chicken, Diced, Leg Quarters, Livers, Thighs, Drumsticks, Bulk Fillets, Breast Fillets.</p>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		
<?php include 'assets/sections/footer.php'; ?>