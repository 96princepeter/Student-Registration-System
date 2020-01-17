<?php 
	/**
	 * 
	 */
	class student 
	{
		public function home(){
			include_once('../views/student_home.php');
		}
		public function prof(){
			header('location:../views/student_profile.php');
		}
		public function logout(){
			header('location:../views/logout.php');
		}
	
	}
 ?>