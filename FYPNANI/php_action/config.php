<?php
   // Create connection
session_start();
$con=mysqli_connect("localhost", "root", "", "ttms");

// Check connection
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function dd($value){

	echo "<pre>";
	var_dump($value);
	echo "</pre>";
}
?>