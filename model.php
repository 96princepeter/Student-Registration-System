<?php
 // include '../controller/controller.php';require "../config/connection.php";

	
  class model{
  	public function insert($uname, $passw){
  		require("../config/connection.php");
  		$conn = new PDO($dsn, $username, $password, $options); 
  		$sql="insert into exe (name,password)values('$uname','$passw')";
  		//echo $sql;
  		if($conn->exec($sql)===1){
  			echo "Succssfully ADDED";

  		}
  		else{
  			echo "FALIED";
  		}


  		
  }
}
 ?>