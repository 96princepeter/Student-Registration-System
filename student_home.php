<?php
session_start();
 if(isset($_SESSION["uname"])){
 	include_once("header.php");
	include_once("student_header.php");
 	$uname=$_SESSION["uname"];
 ?>   

<h1 align="center">Welcome <?php if(isset($_SESSION["uname"]) ){
				echo $_SESSION["uname"];
				//echo $_SESSION["sid"];	 
			?> </h1>

<?php }include("footer.php");
}
else{
	include_once '../controllers/controller.php';
	$con=new controller();
	$con->login();
}

?>