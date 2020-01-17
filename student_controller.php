<?php
include_once 'models/student_model.php';
include_once 'controllers/controller.php';

	
	 class student_controller{
	public function save_data($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw)
	{
	   // echo "student";
	    $obj = new student_model();
	    $res=$obj->insert($reg_no,$fname,$lname,$mobile,$email,$dept,$course,$year,$sem,$uname,$psw);
	    if($res){
	    	echo '<script> alert("successfully Registered"); window.location="index.php" </script>';


	    }
	    else{
	    	echo "error";
	    }
	}

	public function login($uname,$psw){
		$obj = new student_model();
		$res=$obj->login($uname,$psw);
		if($res){
	    	echo '<script> alert("successfully Login"); window.location="views/student_home.php" </script>';
	    }
	    else{
	    	echo "error";
	    }

	}
	public function home(){
		require('views/student_home.php');
	}

  }	

?>