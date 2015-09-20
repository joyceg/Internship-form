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
<button><a href="administrator.php" style="text-decoration:none">Go back</a></button>
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
	{   echo "<h2 >Course:B.Tech</h2>";
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
	{   echo "<h2>Course:M.Tech</h2>";
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
	{   echo "<h2>Course:MCA</h2>";
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
	{   echo "<h2>Course:BSC</h2>";
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
	{   echo "<h2>Course:MSC</h2>";
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
	{   echo "<h2>Course:BCOM</h2>";
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
	{   echo "<h2>Course:MCOM</h2>";
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
	{   echo "<h2>Course:BBM</h2>";
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
	{   echo "<h2>Course:MA</h2>";
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
