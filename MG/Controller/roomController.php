<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST") {
	$room_quality=$_POST['room_quality'];
	$room_status=$_POST['room_status'];
	
	
	
	if($room_quality==""|| $room_status=="")
		{
            header("location: ../View/roomView.php");
             
        }
		else{
            roomdetails($room_quality, $room_status,);
			
            header("Location: ../View/dashboard.php");
		}

	
}

?>
