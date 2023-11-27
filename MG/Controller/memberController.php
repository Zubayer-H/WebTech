<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if($name==""|| $phone=="" || $address=="")
    {
        
        header("Location: ../View/database.php");
    }
    else
    {
        memberAdd($name, $phone, $address);
    header("location: ../View/memberView.php");
    } 
       

}
?>