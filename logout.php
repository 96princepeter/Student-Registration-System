<?php
session_start();
unset($_SESSION["uname"]);
session_destroy();
 require('../controllers/logout.php');
 $con=new logout();
 $con->logout();
 ?>