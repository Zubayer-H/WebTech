<?php
function getConnection()
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="manager";
	$conn=new mysqli($servername, $username, $password, $dbname);
	return $conn;
}
//;
// getConnection();
?>