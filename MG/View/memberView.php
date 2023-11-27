<?php 
require("../Model/db.php");
$result =memberView();

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
    <title>MemberView</title>
	<style>
		#member {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 800px
		}

		#member td, #member th {
		border: 1px solid #ddd;
		padding: 8px;
		}

		#member tr:nth-child(even){background-color: #f2f2f2;}

		#member tr:hover {background-color: #ddd;}

		#member th {
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

	
    <h2 style=text-align:center>Employee List</h2><br>
    <table id="member" border=1>
		<tbody>
			<tr>
				<th>Employee ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th colspan="2">Action</th>
			</tr>
			<?php 
				if($result->num_rows > 0){
					while($data = $result->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $data["m_id"]; ?></td>
					<td><?php echo $data["name"]; ?></a></td>
					<td><?php echo $data["phone"]; ?></td>
					<td><?php echo $data["address"]; ?></td>
					<td><a  href="editMember.php?id='<?php echo $data["m_id"]; ?>'"><button class="edit" style="padding: 10px 30px; background-color: #04AA6D; color: #ffffff; border: none; border-radius: 10px;">Update</button></a></td>
					<td><a href="deleteMember.php?id='<?php echo $data["m_id"]; ?>'"><button style="padding: 10px 30px; background-color: red; color: #ffffff; border: none; border-radius: 10px;">Delete</button></a></td>
				</tr>
			<?php
				}
			}
			else {
				echo "<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>";
			}
			?>
		</tbody>
	</table>

    <br>
    
        <a href="dashboard.php"><button style="padding: 10px 30px; background-color: blue; color: #ffffff; border: none; border-radius: 10px;">
		Go Back</button></a>
    
    
</body>
</html>


