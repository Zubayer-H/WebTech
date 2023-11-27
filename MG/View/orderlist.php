<?php 
 require("../Model/db.php");

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

	 

	<h2 style=text-align:center>Welcome to Manager Panel</h2>

    <?php 




     ?>
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>customer</title>
    
</head>
<body>
	
     <form action="../Controller/orderController.php" method="POST">
     	<div class="backBtn">
     		
     	</div>
     	<div class="container">
     		<h2>Order Food:</h2><br>
     		<div class="inputItems">
     		<input type="text" name="food_name" placeholder="Food name"><br><br>
     		<input type="text" name="quantity" placeholder="Enter food quantity"><br><br>
     		<input type="text" name="price" placeholder="Enter food price"><br><br>
     		<a href="database.php"><button style="padding: 10px 10px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;">
		order</button></a>
             <button  style="padding: 10px 10px; background-color: skyblue; color: #ffffff; border: none; border-radius: 10px;"><a href="dashboard.php">Back</a></button>
     		</div>
     		
     	</div>
     	<br>
     	<br>
	
</body>
</html>




