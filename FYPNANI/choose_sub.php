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
	table,tr,th
			{	
				border: 1px solid black;
				height: 200;
				text-align:center;
				font-size:18px;	
				background-color:#FFF;
			}
			td{
				border: 1px solid black;
				text-align:center;
				font-size:15px;
				height: 200;	
				}
			form{
				font-size: 20px;
				text-align:center;
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

<body>
<?php
$con=mysqli_connect("localhost", "root", "", "ttms");

$query1 = "SELECT * FROM lecturer";
$query2 = "SELECT * FROM batch";
$query3 = "SELECT * FROM class";
$query4 = "SELECT * FROM subject";

$result1 = mysqli_query($con, $query1);
$result2 = mysqli_query($con, $query2);
$result3 = mysqli_query($con, $query3);
$result4 = mysqli_query($con, $query4);

?>
<center>
<h1>Lecturer's Registration</h1>
<form action="php_action/choosesub_action.php" method="post">
<center>
       <label>Lecturer:</label>

        <select name="lect_id">

        <option value="">~~ Choose Lecturer ~~</option>
        <?php while($row1 = mysqli_fetch_array($result1)):;?>
        <option value="<?php echo $row1['lect_id'];?>"><?php echo $row1[1];?></option>
        <?php endwhile;?>
        </select>
        
    <br><br>
        <label>Batch:</label>

        <select name="batch_id">

        <option value="">~~ Choose Batch ~~</option>
        <?php while($row2 = mysqli_fetch_array($result2)):;?>
        <option value="<?php echo $row2['batch_id'];?>"><?php echo $row2[1];?></option>
        <?php endwhile;?>
        </select>
        
         <br><br>
        <label>Class:</label>

        <select name="class_id">
        <option value="">~~ Choose Class ~~</option>
        <?php while($row3 = mysqli_fetch_array($result3)):;?>
        <option value="<?php echo $row3['class_id'];?>"><?php echo $row3[1];?></option>
        <?php endwhile;?>
        </select>
    <br><br>
    

<?php
if(isset($_POST['search']))
{
	$level = $_POST['value'];
	$query = "SELECT * FROM `subject` WHERE CONCAT (`sub_name`, `sub_id`) LIKE '%".$level."%'";
	$SearchResult = filterTable($query);
	
}
else{
	$query = "SELECT * FROM `subject`";
	$SearchResult = filterTable($query);
}

function filterTable($query)
{	
	$username="root";
	$password="";
	$database="ttms";
	$connect = mysqli_connect("localhost",$username,$password,$database);
	$filter_Result = mysqli_query($connect,$query);
	return $filter_Result;
}
  	

?>
    <center><label>Choose Subject:</label><br>
            <form action="choosesub_action.php" method="post">
        	<table width="1000" align="center">
            	<tr>
                	<th width="100"></th>
                	<th width="250">Subject Code</th>
                    <th width="350">Subject Name</th>  
                </tr>
                <?php while($row = mysqli_fetch_array($SearchResult)):?>
                <tr>
                    <td><input type="checkbox" name="subject[]" value="<?php echo $row['sub_id']; ?>" ><br></td>
                	<td><?php echo $row['sub_id'];?></td>
                    <td><?php echo $row['sub_name'];?></td>

                <?php endwhile;?>
            </table><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="reset" value="Reset">
            <center><a href="display_choosesub.php"><h4>View</h4></a></center>
</table>


</body>
</html>
