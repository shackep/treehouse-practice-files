<?php
$products = array();
$products[101] = "Log Shirt, Red";
$products[102] = "Mike the Frog Shirt, Black";
$products[103] = "Mike the Frog Shirt, Blue";
$products[104] = "Logo Shirt, Green";
Here we have some text that does not belong!
?><?php
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

		<div class="section page">
			<div class="wrapper">

			<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

			<ul>
				<?php foreach($products as $product) {?> 
				<li><?php echo $product; ?></li>
				<?php} ?>
			</ul>
		</div>


<?php include('inc/footer.php') ?>
