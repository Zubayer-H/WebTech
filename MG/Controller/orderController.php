
<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST") {
	$food_name=$_POST['food_name'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	
	
	if($food_name==""|| $quantity=="" || $price=="")
		{
            header("location: ../View/orderlist.php");
             
        }
		else{
            inorderlist($food_name, $quantity, $price);
			
            header("Location: ../View/dashboard.php");
		}

	
}

?>

