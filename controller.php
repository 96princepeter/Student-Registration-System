<?php

class controller{

	public function index()
	{
		include_once('views/index.php');
	}
	public function reg(){
		include_once('views/registration.php');
	}
	public function login(){
		include_once('views/login.php');
		//include_once();
	}
}


?>