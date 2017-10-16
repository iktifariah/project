 <?php 

include __dir__ . "/php_action/config.php";

 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TTMS</title>
</head>
<style>
ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #5F5F5F;
}

/* Float the list items side by side */
ul.topnav li {float: left;}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: #D6D6D6;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 25px;
	font-family:REVOLUTION;
}

/* Change background color of links on hover */
ul.topnav li a:hover {background-color: #B1DBD3;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}

body{
	background-color:#6C9;
	}
tr{
	background-color:#FFF;
		}
td{
	font-size:20;
	}
	
</style>

<body><center>
<img src="header1.jpg" width="950" height="170" alt=""/>
</center>

<ul class="topnav" id="myTopnav">
  <li><a href="home.php">Home</a></li>
  <li><a href="batch.php">Batch</a></li>
   <li><a href="class.php">Class</a></li>
   <li><a href="subject.php">Subject</a></li>
   <li><a href="lecturer.php">Lecturer</a></li>
   <li><a href="choose_sub.php">Choose Subject</a></li>
   <li><a href="timetable.php">Timetable</a></li>
   <li><a href="logout.php">Logout</a></li>
   
   
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>

</body>
</html>

<html>
<style>
body{
	background-color:#6C9;
	}
tr{
	background-color:#FFF;
		}
th{
	font-size:20;
	}
</style>

<center><h1>Info</h1></center>

<body>
<div align="center">    
<table width="974" height="58" border="1">
<tr>
<th width="128">Lecturer Name</th>
<th width="128">Batch</th>
<th width="128">Class</th>
<th width="128">Subject Code</th>
<th width="128">Subject Name</th>
<th width="95">Choose</th>
<th width="95">Edit</th>
<th width="97">Delete</th>
</tr>
<?php


if(isset($_GET['del'])){
	$del_lect_id = $_GET['del'];
if(mysqli_query($con, "Delete from lecturer where lect_id = '$del_lect_id'")){
	echo "<script> alert('Lecturer : $del_lect_id ... Deleted Successful.')</script>";
	}
}
$run = mysqli_query($con, "Select lect_name, batch_name, class_name, sub_name, lect_register.sub_id from lect_register INNER JOIN subject ON subject.sub_id = lect_register.sub_id INNER JOIN lecturer ON lecturer.lect_id = lect_register.lect_id INNER JOIN class ON class.class_id = lect_register.class_id INNER JOIN batch ON batch.batch_id = lect_register.batch_id;");

while($row=mysqli_fetch_array($run))
{
	
	echo"<tr align='center'>
				
				<td>{$row['lect_name']}</td>
				<td>{$row['batch_name']}</td>
				<td>{$row['class_name']}</td>
				<td>{$row['sub_id']}</td>
				<td>{$row['sub_name']}</td>
				<td><a href='timetable.php?edit='>Choose</td>
				<td><a href='editlect.php?edit='>Edit</td>
				<td><a href='lecturer.php?del='>Delete</td>
			</tr>";
		
		
}
?>
</table>


</body>
</html>