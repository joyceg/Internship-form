<html>
<title>Application for Internship/Industrial training</title>
<body>
<div id="Content" align="center"> 
<img src="../images/Amrita-university.jpg"  style="width:40px;height:40px;"  align="center;" />
</div>

<h3 align="center">Application for Internship/Industrial training</h3>
<table border="1" style="width:60%" align="center">
<?php
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
} 
$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=(SELECT max(Registration_Id) FROM RegistrationForm)";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<h3><tr><td>Registration Id:</td>"."<td>" . $row["Registration_Id"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Name of the Applicant:</td>" ."<td>". $row["Name"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Date of Registration:</td> "."<td>" . $row["Date_of_Registration"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Enrollment No:</td><td> " . $row["Enrollment"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
       echo "<td>School:</td><td> " . $row["School"]."<td>";
       echo "</tr>";
       
	echo "<tr>";
        echo "<td>Course:</td><td>  " . $row["Course"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Semester:</td><td>  " . $row["Semester"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Batch:</td><td> " . $row["Batch"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Phone Number(Residence):</td><td> " . $row["Phone"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Mobile: </td><td> " . $row["Mobile"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Email:</td><td> " . $row["Email"]."<td>";
        echo "</tr>";
        
       echo "<tr>";
        echo "<td>Nature of Training:</td><td>  " . $row["Nature"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Nature of the  organisation:</td><td> " . $row["Nature_of_organisation"]."<td>";
	echo "</tr>";
	
	echo "<tr>";
	
	echo "<td>Full name of the official addresse:</td><td> " . $row["Full_name_of_the_official_addresse"]."<td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Address of organisation:</td><td> " . $row["Address_of_organisation"]."<td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Designation:</td><td> " . $row["Designation"]."<td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Contact:</td><td> " . $row["Contact"]."<td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Email id: </td><td> " . $row["Email_id"]."<td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Duration of training:</td><td>  " . $row["Duration"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Staring date:</td><td> " . $row["Start_date"]."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>End Date:</td><td> " . $row["End_date"] ."</td></h3>" ;
        echo "</tr>";
	
      }
  
   	
$conn->close();
?>
<tr>
    <td>Signature of student:</td><td></td>
</tr>

</tr>
    <td>Signature of HOD:</td><td></td>
</tr>

</tr>
    <td>Signature of Head-CIR:</td><td></td>	
</tr>
</table>
</body>
</html>