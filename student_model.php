<?php
//prince peter

	include_once "controllers/student_controller.php";
 	
	
    
	class student_model
	{

	     public function insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
		 {
		 include_once('config/connection.php');
		 $connection = new PDO($dsn, $username, $password, $options);
	     $sql="insert into student (reg_no,fname, lname, mobile, email, dept_name, course_name,  year,semester,username, password)values('$reg_no','$fname','$lname','$mobile','$email','$dept','$course','$year','$sem','$uname','$psw')";
	     if($connection->exec($sql)){
	     	return true;
	     }
	     else{
	     	return false;
	     }
	    }

	    public function login($uname,$psw){
	    	require('config/connection.php');
			$connection = new PDO($dsn, $username, $password, $options);
		    $sql="select username,password from student where username='$uname' and password='$psw'";
		    $stm=$connection->prepare($sql);
		    $stm->execute();
		    $res=$stm->fetchAll();
		    if ($res && $stm->rowCount() > 0){
		    	session_start();
		    	$_SESSION['uname']=$uname;
		    	if(isset($_SESSION['uname'])){
		    		return TRUE;
		    	}
		    }
		    else{
		    	echo $sql;
		    }

	    }
	
	}	
?>
