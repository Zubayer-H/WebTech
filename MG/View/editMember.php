<?php

require("../Model/db.php");
$id = $_GET["id"];
$result = getEditMember($id);


 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/database.css">
    <title>Edit Member</title>
	<style>
  label{

	margin: 10px 10px ;
  }
  input,textarea{
	margin: 10px 10px ;
	padding: 10px ;
	border-radius: 5px;
	width: 100%;
	
  }
  table{
	width: 400px;
  }

  </style>
</head>
<body>
<div class="mainContainer">
			
			<div class="header">
				<div class="header"><h1 align="center">MyHome</h1>

			</div>
			<div class="sideNav">
	<a href="dashboard.php"><button class="adem">Dashboard</button></a><br>
	
	<a href="database.php"><button class="adem">Add Employee</button></a><br>
	
	<a href="memberView.php"><button class="dlem">View Employee</button></a><br>
	<a href="logout.php" ><button class="dlem">Logout</button></a><br>
	
				
				</div>
			
				
				
			

		</div>

	
    
	<form action="../Controller/editMemberController.php" method="POST">
		<div align="center">
		<h3>Update Employee Profile</h3>
		<input type="text" name="id" value="<?php echo $result["m_id"] ?>" hidden>
		<table>
			<tr>
				<td>
				<label for="">Name:</label>	
				</td>
                 <td>
                 	<input type="text" placeholder="Enter Your Name" value="<?php echo $result["name"] ?>" name="name">
                 </td>	

			</tr>
			<tr>
				<td>
				<label for="">Phone Number:</label>	
				</td>
				<td>
					<input type="number" placeholder="+880" value="<?php echo $result["phone"] ?>" name="phone">
				</td>
			</tr>
			<tr>
				<td>
				<label for="">Address:</label>	
				</td>
				<td>

					<textarea name="address"><?php echo $result["address"] ?></textarea>
				</td>
			</tr>
		</table>
		<button style="padding: 10px 30px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;" type="submit" 
		>Update</button>
		<a href="memberView.php"><button style="padding: 10px 30px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;">
		Go Back</button></a>

		</div>
       
	</form>
    
</body>
</html>