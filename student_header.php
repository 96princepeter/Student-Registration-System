<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>
</title>
<style>
</style>
</head>
<body>
<div class="menubar">
<ul>
<li>
	<a href="/Student_Registration_System/views/student_home.php?prof=0">HOME</a>
</li>

<li>
	<a href="report_attend.php">ATTENDANCE</a>
</li>
<li>
	<a href="leave.php">APPLY LEAVE</a>
</li>
<li>
	<a href="/Student_Registration_System/views/student_home.php?prof=1">PROFILE</a>
</li>
<li>
	<a href="/Student_Registration_System/views/student_home.php?prof=logout">LOG OUT</a>
</li>
</ul>
</div> </body> </html>

<?php 
  include_once "../controllers/student.php";
	if(isset($_GET['prof'])){
		$id=$_GET['prof'];
		
		if($id==0){
			$con=new student();
			$con->home();
		}	
		if($id==1){
			$con=new student();
			$con->prof();
		}	
		if($id=='logout'){
			$con=new student();
			$con->logout();
		}
		
	}