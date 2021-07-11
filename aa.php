<?php
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");


$ip_add = getRealUserIp();


if(isset($_POST['submit'])){
	$adres = $_POST['address']; 
	$upd = "UPDATE customers SET customer_address=$adres WHERE customer_ip=$ip_add";
	$ex = mysqli_query($con, $upd);

	echo "<script>alert('your delivery address has been updated ')</script>";

    echo "<script>window.open('checkout.php','_self')</script>";

} ?>