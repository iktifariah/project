
<!DOCTYPE html>
<html>
<head>
<title>View Time Table</title>

<style>
th,td
{
margin: 0;
text-align: center;
border-collapse: collapse;
outline: 1px solid #e3e3e3;

}

td
{
padding: 5px 10px;
}

th
{
background: #666;
color: white;
padding: 5px 10px;
}

input[type=button]
{
	float:right;
}

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
<body>	
<br>
<h2>&nbsp; Time Table by Lecturer</h2>

<center>
<br>
<center>
<table width="90%">
    <div id="head_nav">
    <tr>
    	<th>Time</th>
        <th>MONDAY</th>
		<th>TUESDAY</th>
		<th>WEDNESDAY</th>
		<th>THURSDAY</th>
		<th>FRIDAY</th>
    </tr>
</div>  

    <tr>
        <th>9.00-11.00</th>
        
            <td><input type="checkbox" name=""></td>
            <td><input type="checkbox" name=""></td>
            <td><input type="checkbox" name=""></td>
            <td><input type="checkbox" name=""></td>
            <td><input type="checkbox" name=""></td>
    </tr>

    <tr>
        <th>11.00-1.00</th>
        
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
    </tr>

    <tr>
        <th>1.00-2.00</th>
           <td colspan="5"align="center"><b>L  U  N  C  H</b></TD>    
    </tr>

    <tr>
        <th>2.00-4.00</th>
        
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
                        
            <td>SUBJECT<br>CLASS<br>BATCH
            
    </tr>

    <tr>
        <th>4.00-6.00</th>
        
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
                        
            <td>SUBJECT<br>CLASS<br>BATCH
            
            <td>SUBJECT<br>CLASS<br>BATCH
                        
            <td>SUBJECT<br>CLASS<br>BATCH
                </tr>
</table>

</body>
</html>
