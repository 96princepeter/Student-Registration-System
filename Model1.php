<?php
include_once('model/Model.php');
class Model {
	
public function getlogin()
{
	echo $_REQUEST['username']." ".$_REQUEST['password'];
// here goes some hardcoded values to simulate the database
if(isset($_REQUEST[‘username’]) && isset($_REQUEST[‘password’])){
if($_REQUEST[‘username’]==’admin’ && $_REQUEST[‘password’]==’admin’){
return ‘login1’;
}
           else{
return 'invalid user';
}
}
}
}
?>
