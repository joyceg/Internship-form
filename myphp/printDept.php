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
<style >
@media print {
    #printbtn {
        display :  none;
    }
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
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
}
$sql = "SELECT * FROM RegistrationForm where Course like 'Btech' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
    echo "<h2 align='center'>B.Tech</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }
      ?>
      </table>
      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'MTech' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
    echo "<h2 align='center'>M.Tech</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }
	?>
	</table>

      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'MCA' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{echo "<br><br><hr><br><br>";
    echo "<h2 align='center'>MCA</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'BSC' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
      echo "<h2 align='center'>BSC</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'MSC' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
     echo "<h2 align='center'>MSC</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'BCOM' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
    echo "<h2 align='center'>BCOM</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'MCOM' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{  echo "<br><br><hr><br><br>";
     echo "<h2 align='center'>MCOM</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'BBM' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{ echo "<br><br><hr><br><br>";
    echo "<h2 align='center'>BBM</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }
	?>
	</table>


      <table id="customers" border="5" style="width:80%" align="center">
      <?php
      //MTEch
      $sql = "SELECT * FROM RegistrationForm where Course like 'MA' ";


	$result = $conn->query($sql);
	$row=$result->num_rows;
	$serial_number=1;
	if($row)
	{   echo "<br><br><hr><br><br>";
      echo "<h2>Course:MA</h2>";
	    echo "<tr><td><b>S.No</b></td><td><b>Registration ID</b></td><td><b>Date of Registration</b></td><td><b>Enrollment Number</b></td><td><b>Name</td></b>";
	    while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$serial_number."</td>";
		echo "<td>".$row["Registration_Id"]."</td>";
		echo "<td>".$row["Date_of_Registration"]."</td>";
		echo "<td>" . $row["Enrollment"]."</td>";
		echo  "<td>".$row["Name"]."</td>";
		$serial_number+=1;
	      }
		echo "</tr>";
      }

	?>
	</table>

	</table>
</body>
</html>
