<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$mid= $_POST['id'];
	$name= $_POST['name'];
	$phone=$_POST['phone'];
	$add=$_POST['address'];
    editMember($mid, $name, $phone, $add);
	
    header("location: ../View/memberView.php");
}

?>
