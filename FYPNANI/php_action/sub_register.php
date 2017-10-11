

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
	
	$sub_id=$_POST['sub_id'];
	$sub_name=$_POST['sub_name'];
    

$query= mysql_query("INSERT INTO subject (sub_id, sub_name) VALUES ('$sub_id', '$sub_name')");

    
echo '<br> data inserted...';
header("location:http://localhost/FYPNANI/subject.php");


}?>

