<?php
session_start();

include('functions/functions.php');
require_once("db.php");
	$db_handle = new DBController();
	if(isset($_POST["ssss"])) {

	$name = $_POST["search"];
	$query ="SELECT * FROM products WHERE product_title like '" . $_POST["search"] . "%' ORDER BY product_title LIMIT 0,12";
	$result = mysqli_query($con,$query);
	if(!empty($row_products)){
		while($row_products=mysqli_fetch_array($result)){

				$pro_id = $row_products['product_id'];

				$pro_title = $row_products['product_title'];

				$pro_price = $row_products['product_price'];

				$pro_img1 = $row_products['product_img1'];

				$pro_label = $row_products['product_label'];

				$manufacturer_id = $row_products['manufacturer_id'];

				$get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

				$run_manufacturer = mysqli_query($con,$get_manufacturer);

				$row_manufacturer = mysqli_fetch_array($run_manufacturer);

				$manufacturer_name = $row_manufacturer['manufacturer_title'];

				$pro_psp_price = $row_products['product_psp_price'];

				$pro_url = $row_products['product_url'];

				if($pro_label == "Sale" or $pro_label == "Gift"){

				$product_price = "<del> sh$pro_price </del>";

				$product_psp_price = "| sh$pro_psp_price";

				}
				else{

				$product_psp_price = "";

				$product_price = "sh$pro_price";

				}


				$product_label = "

				<a class='label sale' href='#' style='color:black;'>

				<div class='thelabel' style='background-color:red'>$pro_label</div>

				<div class='label-background'> </div>

				</a>

				";

				}


				echo "

				<div class='col-md-4 col-sm-6 single' >

				<div class='product' >

				<a href='$pro_url' >

				<img src='admin_area/product_images/$pro_img1' class='img-responsive' >

				</a>

				<div class='text' >




				<p class='buttons' >

				<a href='$pro_url' class='btn btn-default' style='background-color:white;'>View details</a>

				<a href='$pro_url' class='btn btn-primary' style='background-color:red'>

				<i class='fa fa-shopping-cart' style='color:orange'></i>Add to cart

				</a>


				</p>
				<p style='background-color:grey'>
				<h5><a href='$pro_url' style='color:black' >$pro_title</a></h5>
				<p class='price' style='color:black'> $product_price $product_psp_price </p></p>
				</div>

				$product_label


				</div>

				</div>";


	}else{
		echo "<script>alert('result not found')</script>";

         echo "<script>window.open('index.php','_self')</script>";
	}





?>