<?php
session_start();
if(!($_SESSION["newsession"])){
	header("location:../login.html");
	exit;
}
?>
<html>
<title>Application for Internship/Industrial training</title>
<head>
<style >
@media print {
    #printbtn {
        display :  none;
    }
}
</style>
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
<div id="printbtn">
<a href="administrator.php" style="text-decoration:none"><button>Go back</button></a>
</div>
<div align="right"><input id ="printbtn" type="button" value="Print this page" onclick="window.print();" >
</div>
<br>
<h2 align="center">Application for Internship/Industrial training</h2>
<br>
<table id="customers" border="5" style="width:80%" align="center">
<?php
$course= $_POST['course'];
$specialization= $_POST['specialization'];
$start=$_POST['from'];
$end=$_POST['to'];
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
}
$sql="select * from RegistrationForm where Course like '$course' and specialization like '$specialization' and (Date_of_Registration >= '$start' && Date_of_Registration <= '$end') ";
$result=$conn->query($sql);
$row=$result->num_rows;
echo "<b>Course:$course<br>Specialization:$specialization<br>From:$start<br>To:$end<br><br></b>";
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
