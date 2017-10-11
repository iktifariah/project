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
<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("ttms",$link);

$edit_batch = $_GET['edit'];
$run = mysql_query("select * from batch where batch_id = $edit_b");
while($row = mysql_fetch_array($run))
{
	$studname = $row[0];
	$studic = $row[1];
	$studphoneno = $row[2];
	$parentphoneno = $row[3];
	$password = $row[4];
}
?>
<html>
	<head>
    	<title>EDITSTUD</title>
     </head>
<style>
body{
	background-color:#6C9;
	}
tr,td{
	text-align:left;
	font-size:20px;
	background-color:#FFF;
	}


</style>
<body>
<center>
<h1>Batch's Registration</h1>
<form action="php_action/batch_register.php" method="post">
<center>
	
       <label>Batch Name</label>
        <label><input name="batch_name"  value="<?php echo $batch_name?>" type = "text" size="40"/></label>
    <br>
      <p>
        <p>
        <input type="submit" name="update" value="Update"/>
        <input type="reset" name="reset" value="Reset" id="reset"/>
      </p> 
      </p>      
</form>
</center>
<br>

<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("tuisyen",$link);

if(isset($_POST['update']))
{
	$studname = $_POST['studname'];
	$studic = $_GET['edit_form'];
	$studphoneno = $_POST['studphoneno'];
	$parentphoneno = $_POST['parentphoneno'];
	$password = $_POST['password'];
	if(mysql_query("Update student set studname = '$studname',studphoneno = '$studphoneno',parentphoneno = '$parentphoneno',password = '$password' where studic = '$studic'"))
	{
		header("location:studprofile.php");
	}
	
}
?>
</body>
</html>    