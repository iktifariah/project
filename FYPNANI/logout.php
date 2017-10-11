<?php 

require_once 'php_action/session.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('location: http://localhost/FYPNANI/index.php');

?>