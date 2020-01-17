	<?php 
 session_start();
 if(isset($_SESSION["uname"])){
 	include_once("header.php");
	include_once("student_header.php");
 	$uname=$_SESSION["uname"];
 ?>   

<!DOCTYPE html>
<head>

	<title>PROFILE</title>
<style>
*{ margin:0px;
}
td,tr
{padding:10px;
	text-align:left;
 }
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<center>
		<div style="height:440px  "class="log">
		<form name="create"
			  method="POST"
			  onsubmit=""	>
<div class="head">
		<h2 style="text-align:center;color:white">
		 <?php echo $_SESSION["uname"];  ?>	PROFILE</h2>
</div>
		

<?php

include("../config/connection.php");
$conn = new PDO($dsn, $username, $password, $options);
$sql="select * from student where username='$uname'";
$res=$conn->query($sql);

if($res)
{
	foreach($res as $row)
	{
?>
<center>
<table style="padding:20px;" >
			<tr>
				<td><b> REG NO </b></td>
				<td>
					<?php
						echo $row["reg_no"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> First NAME </b></td>
				<td>
					<?php
						echo $row["fname"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Last NAME </b></td>
				<td>
					<?php
						echo $row["lname"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Mobile </b></td>
				<td>
					<?php
						echo $row["mobile"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Email </b></td>
				<td>
					<?php
						echo $row["email"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Department </b></td>
				<td>
					<?php
						echo $row["dept_name"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Course </b></td>
				<td>
					<?php
						echo $row["course_name"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Year </b></td>
				<td>
					<?php
						echo $row["year"];
					?>
				</td>
			</tr>
			<tr>
				<td><b> Semester </b></td>
				<td>
					<?php
						echo $row["semester"];
					?>
				</td>
			</tr>
            
		    
			
		</table>
<?php
}}
?>
		</form>
		</div>
	</center>
 <?php
include('footer.php');
}
else{
	header('location:../index.php');
}
?>