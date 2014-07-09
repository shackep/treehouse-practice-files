<?php
$products = array();

$products[101] = array(
	"name" => "Logo Shirt, Red",
	"price" => 18,
	"img" => "img/shirts/shirt-101.jpg"
	);

$products[102] = array(
	"name" => "Mike the Frog Shirt, Black",
	"price" => 20,
	"img" => "img/shirts/shirt-102.jpg"
	);

$products[103] = array(
	"name" => "Mike the Frog Shirt, Blue",
	"price" => 25,
	"img" => "img/shirts/shirt-103.jpg"
	);

$products[104] = array(
	"name" => "Logo Shirt, Green",
	"price" => 25,
	"img" => "img/shirts/shirt-104.jpg"
	);

$products[106] = array(
	"name" => "Logo Shirt, Gray",
	"price" => 20,
	"img" => "img/shirts/shirt-106.jpg"
	);

$products[107] = array(
	"name" => "Logo Shirt, Turquoise",
	"price" => 20,
	"img" => "img/shirts/shirt-107.jpg"
	);

$products[108] = array(
	"name" => "Logo Shirt, Orange",
	"price" => 20,
	"img" => "img/shirts/shirt-108.jpg"
	);
?><?php
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include('inc/header.php'); ?>

		<div class="section shirtspage">
			<div class="wrapper">
			<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

			<ul class="products">
				<?php foreach($products as $product) {
					echo "<li>";
					echo '<a href="#">';
					echo '<img src="' . $product["img"] .'"alt="'. $product["name"]'">'
					echo "<p>View Details</p>";
					echo "</a>";
					echo "</li>";
					}
			?>
			</ul>
		</div>


<?php include('inc/footer.php') ?>
