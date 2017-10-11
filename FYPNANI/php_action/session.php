<?php 

session_start();

require_once 'config.php';

// echo $_SESSION['user_ic'];

if(!$_SESSION['user_ic']) {
	header('location: http://localhost/FYPNANI/index.php');	
} 



?>