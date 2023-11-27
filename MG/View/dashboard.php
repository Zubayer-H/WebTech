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
  <style>
	.container{
		height:300px ;
		overflow-y: scroll;
		margin:15px 0px ;
	}
		#order {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 500px;
		
		}

		#order td, #order th {
		border: 1px solid #ddd;
		padding: 8px;
		}

		#order tr:nth-child(even){background-color: #f2f2f2;}

		#order tr:hover {background-color: #ddd;}

		#order th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #04AA6D;
		color: white;
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

	 

	<h2 style=text-align:center>Welcome to Manager Panel</h2>
	
	
		
		<div class="container">

			
			<hr>
			
     
		<?php 

		   $result = orderlist();
		  
		  echo "<table id='order' border = 1> 
		        <h3>Food Order List</h3><br>
		        
		        <tr>
		            <th>Food Id</th>
					<th>Food Name</th>
					<th>Food Quantity</th>
					<th>Food Price</th>
					<th>Order Request</th>
			
				</tr> " ;
		   while ($data = mysqli_fetch_assoc($result)) {
		    	

		   	$id = $data['o_id'];
		    $food_name = $data['food_name'];
		    $food_quantity = $data['quantity'];
		    $food_price = $data['price'];
		   echo "<tr>
		         <td>$id</td>
		         <td>$food_name</td>
		         <td>$food_quantity</td>
		         <td>$food_price</td>
               <td>
               <button><a href='dashboard.php?status=Your order is on going'>Accept</a></button>
               </td>
               <td>
			   <button><a href='dashboard.php?status=Your order is rejected'>Reject</a></button>
               </td>
		       </tr>" ;

		    } ;
		   
		    
		 ?>
	     
			
		
		<div class="backBtn">
     		
     	</div>
		</table>
		
		
		</div>
		<?php
		if(isset($_GET['status']))
			echo "<h4>Order status:". $_GET['status'] ."</h4>";
		?><br>
		<button  style="padding: 10px 10px; background-color: skyblue; color: #ffffff; border: none; border-radius: 10px;"><a href="orderlist.php">Order Food</a></button>
		
</body>
</html>


<div class="container">

			
			<hr>
			
     
		<?php 

		   $result = roomview();
		  
		  echo "<table id='order' border = 1> 
		        <h3>Room Details</h3><br>
		        
		        <tr>
		            <th>Room Id</th>
					<th>Room Quality</th>
					<th>Reserved Room</th>
					
					<th>Status</th>
			
				</tr> " ;
		   while ($data = mysqli_fetch_assoc($result)) {
		    	

		   	$id = $data['id'];
		    $room_quality = $data['room_quality'];
		    $room_status = $data['room_status'];
		    
		   echo "<tr>
		         <td>$id</td>
		         <td>$room_quality</td>
		         <td>$room_status</td>
		         
               <td>
               <button><a href='dashboard.php?details=Room Is Available'>Available</a></button>
               </td>
               <td>
			   <button><a href='dashboard.php?details=Room Is Unavailable'>Unavailable</a></button>
               </td>
		       </tr>" ;

		    } ;
		   
		    
		 ?>
	     
			
		
		<div class="backBtn">
     		
     	</div>
		</table>
		<?php
		if(isset($_GET['details']))
			echo "<h4>Room Status:". $_GET['details'] ."</h4>";
		?><br>
		<button  style="padding: 10px 10px; background-color: skyblue; color: #ffffff; border: none; border-radius: 10px;"><a href="roomView.php">Book Room</a></button>
		</div>
		
		
</body>
</html>