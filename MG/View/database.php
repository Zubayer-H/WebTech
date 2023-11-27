<?php 
 session_start();
 if(!isset($_SESSION['username'])){
	header('location: login.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manager Dashboard</title>
  <link rel="stylesheet" href="./css/database.css">
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

	

	<h2 style=text-align:center>Manager Dashboard</h2>
	<br>
	<br>	
	<form action="../Controller/memberController.php" method="POST">
		<div align="center">
			<h3>Assign New Employee</h3>
			<table>
				<tr>
					<td>
						<label  for =" ">Name:</label>
					</td>
					<td>
						<input type="text" placeholder="Enter Your Name" name="name">
					</td>	

				</tr>
				<tr>
					<td>
					 <label for="">Phone Number:</label>	
					</td>
					<td>
						<input type="number" placeholder="+880" name="phone">
					</td>
				</tr>
				<tr>
					<td>
					<label for="">Address:</label>
					</td>
					<td>

						<textarea name="address"></textarea>
					</td>
				</tr>
				
			</table>
			<button style="padding: 10px 30px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;"type="submit">Insert</button>

			
			<a href="dashboard.php"><button style="padding: 10px 30px; background-color: yellow; color: #ffffff; border: none; border-radius: 10px;">
		Go Back</a></button>
    
			 
		</div>
		
	</form><br>
	

</body>
</html>







