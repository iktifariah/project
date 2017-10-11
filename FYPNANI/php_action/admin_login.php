<?php

include("config.php");
   session_start();
      
	  		//Function to sanitize values received from the form. Prevents SQL injection
		function clean($con, $str) {
			$str = @trim($str);
			if(get_magic_quotes_gpc()) {
				$str = stripslashes($str);
			}
			return mysqli_real_escape_string($con, $str);
		}
	
		//Sanitize the POST values
		$username = clean($con, $_POST['username']);
		$pass = clean($con, $_POST['pass']);
	
		//Create query
		$qry="SELECT admin_id from admin where username='$username' and pass='$pass'";
		$result=mysqli_query($con, $qry);
		//Check whether the query was successful or not
		if($result) {
			if(mysqli_num_rows($result) == 1) {
				//Login Successful
				$member = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$userID = $member['lect_id'];
				$_SESSION['SESS_MEMBER_ID'] = $userID;
				session_write_close();
				
				
				header("location: http://localhost/FYPNANI/home.php");
				exit();
			} else {
				header("location: http://localhost/FYPNANI/index.php?error=true");
				exit();
			}
		} else {
			echo("Error description: " . mysqli_error($con));
			exit();
		}

?>