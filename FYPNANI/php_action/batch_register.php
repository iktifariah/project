

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
	
	$batch_name=$_POST['batch_name'];
    

$query= mysql_query("INSERT INTO batch (batch_name) VALUES ('$batch_name')");

    
echo '<br> data inserted...';
header("location:http://localhost/FYPNANI/batch.php");


}?>

