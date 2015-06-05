<html>
<title>Application for Internship/Industrial training</title>
<body >
<h1 align="center">Application for Internship/Industrial training</h1>
<table border="10" style="width:80%">
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=(SELECT max(Registration_Id) FROM RegistrationForm)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
	
        echo "<h3><tr>";
        echo "<td>Registration Id:</td>"."<td>" . $row["Registration_Id"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Name of the Applicant:</td>" ."<td>". $row["Name"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Date of Registration:</td> "."<td>" . $row["Date_of_Registration"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Enrollment No:</td><td> " . $row["Enrollment"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
       echo "<td>School:</td><td> " . $row["School"]."<td><br>";
       echo "</tr>";
       
	echo "<tr>";
        echo "<td>Course:</td><td>  " . $row["Course"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Semester:</td><td>  " . $row["Semester"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Batch:</td><td> " . $row["Batch"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Phone Number(Residence):</td><td> " . $row["Phone"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Mobile: </td><td> " . $row["Mobile"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Email:</td><td> " . $row["Email"]."<td><br>";
        echo "</tr>";
        
       echo "<tr>";
        echo "<td>Nature of Training:</td><td>  " . $row["Nature"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Nature of the  organisation:</td><td> " . $row["Nature_of_organisation"]."<td><br>";
	echo "</tr>";
	
	echo "<tr>";
	
	echo "<td>Full name of the official addresse:</td><td> " . $row["Full_name_of_the_official_addresse"]."<td><br>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Address of organisation:</td><td> " . $row["Address_of_organisation"]."<td><br>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Designation:</td><td> " . $row["Designation"]."<td><br>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Contact:</td><td> " . $row["Contact"]."<td><br>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>Email_id: </td><td> " . $row["Email_id"]."<td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Duration of training:</td><td>  " . $row["Duration"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>Staring t_date:</td><td> " . $row["Start_date"]."</td><br>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td>End Date:</td><td> " . $row["End_date"] ."</td><br></h3>" ;
        echo "</tr>";
	
      }
} 
   	
$conn->close();
?>
<tr>
    <td><h3>Signature of student:<td><td></td></h3></td>
</tr>

</tr>
    <td><h3>Signature of HOD:<td><td></td></h3></td>
</tr>

</tr>
    <td><h3>Signature of Head-CIR:<td><td></td></h3></td>
</tr>

</table>
</body>
</html>

	