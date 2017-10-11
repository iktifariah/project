

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
	
	$class_name=$_POST['class_name'];
    

$query= mysql_query("INSERT INTO class (class_name) VALUES ('$class_name')");

    
echo '<br> data inserted...';
header("location:http://localhost/FYPNANI/class.php");


}?>

