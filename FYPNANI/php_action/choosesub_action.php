<?php

include "config.php";

// var_dump($_POST);
// die();

if(isset($_POST['submit']))
{

//$sql="INSERT INTO lecturer (lect_id, lect_name) VALUES('".$_SESSION['SESS_MEMBER_ID']."','$_POST[lect_name]')";
//mysql_query($sql); 

//$sql1="INSERT INTO batch(batch_id, batch_name, lect_id) VALUES('".mysql_insert_id()."','$_POST[batch_name]','".$_SESSION['SESS_MEMBER_ID']."')";
//mysql_query($sql1); 

   // $query=mysql_query("INSERT INTO lecturer(lect_id, lect_name) VALUES('".$_SESSION['SESS_MEMBER_ID']."','$_POST[lect_name]')");
	
foreach ($_POST['subject'] as $value) {
	mysqli_query($con, "INSERT INTO lect_register(lect_id,batch_id,class_id,sub_id) VALUES('{$_POST['lect_id']}', '{$_POST['batch_id']}', '{$_POST['class_id']}', '$value')");
}

echo '<br> data inserted...';
header("location:../display_choosesub.php");


}?>

