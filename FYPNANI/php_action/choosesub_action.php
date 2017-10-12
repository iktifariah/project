

<?php
//connect to database
$con=mysql_connect('localhost','root','');

$db=mysql_select_db('ttms');



if($con)

{

	echo 'success ';

}

else

{die('error');

}



if($db)

{

	echo ' <br> successful ';

}

else

{die('error .not found db');

}

if(isset($_POST['submit']))
{

//$sql="INSERT INTO lecturer (lect_id, lect_name) VALUES('".$_SESSION['SESS_MEMBER_ID']."','$_POST[lect_name]')";
//mysql_query($sql); 

//$sql1="INSERT INTO batch(batch_id, batch_name, lect_id) VALUES('".mysql_insert_id()."','$_POST[batch_name]','".$_SESSION['SESS_MEMBER_ID']."')";
//mysql_query($sql1); 

   // $query=mysql_query("INSERT INTO lecturer(lect_id, lect_name) VALUES('".$_SESSION['SESS_MEMBER_ID']."','$_POST[lect_name]')");
	
	mysql_query("INSERT INTO lect_register(lect_id,batch_id,class_id,sub_id) VALUES('".$_SESSION['SESS_MEMBER_ID']."', '$_POST[batch_id]', '$_POST[class_id]', '$_POST[sub_id]')");

echo '<br> data inserted...';
header("location:http://localhost/FYPNANI/display_choosesub.php");


}?>

