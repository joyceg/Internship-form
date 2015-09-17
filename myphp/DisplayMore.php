<html>
<title>Application for Internship/Industrial training</title>
<head>
<style>
table, td, th {
    border: 1px solid black;
}
td{
padding:0.8%;
}

#customers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
#customers tr.table_size td{
   
    padding:2.5%;
}

</style>
</head>
<body>
<div id="Content" align="center"> 
<img src="../images/header.png"  style="width:1000px;height:140px;"  align="center;" />
</div>
<hr>
<br>
<h2 align="center">Application for Internship/Industrial training</h2>
<br>
<table id="customers" border="5" style="width:80%" align="center">
<?php
$course= $_POST['course'];
$specialization= $_POST['specialization'];
$sem=$_POST['semester'];
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
} 
$sql="select * from RegistrationForm where Course like '$course' and specialization like '$specialization' and semester like '$sem'";
$result=$conn->query($sql);
$row=$result->num_rows;
if($row)
{
    echo "<tr><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Registration_Id"]."</td>";
        echo "<td>".$row["Date_of_Registration"]."</td>";
        echo "<td>" . $row["Enrollment"]."</td>";
        echo  "<td>".$row["Name"]."</td>";
        }
   	echo "</tr>";
   	}
   	else
   	{
	  echo "Sorry.No valid data found.";
	  }
$conn->close();
?>
</table>
</body>
</html>