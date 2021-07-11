<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<?php
$ip_add = getRealUserIp();


$select = "select * from customers where customer_ip= $ip_add";

$con = mysqli_query($con, $select);
$run = mysqli_num_rows($con);
$address =$run['customer_address'];

?>

<div class="box">
	<center style="height: 80%">
		<hi>Delivery address</hi>
		<form action="aa.php" method="POST">
			<textarea name="address" style="width: 70%; height: 90%"><?php echo $address; ?></textarea>

			<button name="submit" style="background-color: red; color:white; width: 40%" >update address</button>
			
			
		</form>


	    
	</center>
	    <div class="row" style="width: 100%; padding-left: 320PX;">
             <a href="checkout.php" style="width: 60%; height: 50%; background-color: orange"> <b style="color:blue">checkout</b> </a>
		<div class="col-sm-4">
		   
		</div>
</div>



