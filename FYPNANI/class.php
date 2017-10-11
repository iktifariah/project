 <?php session_start();?>
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
   <li><a href="timetable.php">Timetable</a></li>
   <li><a href="logout.php">Logout</a></li>
   
   
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>

</body>
</html>

<body>
<center>
<h1>Room Registration</h1>
<form action="php_action/class_register.php" method="post">
<center>
	
       <label>Room Name</label>
        <label><input name="class_name" type = "text" size="40"/></label>
    <br>
      <p>
        <input type="submit" name="submit" value="Submit"/>
        <input type="reset" name="reset" value="Reset" id="reset"/>
      </p>      
</form>
</center>
<br>



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

<center><h1>Room's Info</h1></center>

<body>
<div align="center">    
<table width="974" height="58" border="1">
<tr>
<th width="128">Room Name</th>
<th width="95">Edit</th>
<th width="97">Delete</th>
</tr>
<?php

$link = mysql_connect("localhost","root","");
mysql_select_db("ttms",$link);

if(isset($_GET['del'])){
	$del_class_id = $_GET['del'];
if(mysql_query("Delete from class where batch_id = '$del_class_id'")){
	echo "<script> alert('Batch : $del_class_id ... Deleted Successful.')</script>";
	}
}
$run = mysql_query("Select * from class");
while($row=mysql_fetch_array($run))
{
	$showclass_id = $row[0];
	$showclass_name = $row[1];
	
	echo"<tr align='center'>
				<td>$showclass_name</td>
				<td><a href='editclass.php?edit=$showclass_id'>Edit</td>
				<td><a href='class.php?del=$showclass_id'>Delete</td>
			</tr>";
		
		
}
?>
</table>


</body>
</html>