

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=(SELECT max(Registration_Id) FROM RegistrationForm)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo "<br><br>";
        echo "Registration_Id: " . $row["Registration_Id"]."<br>";
        echo "- Name: " . $row["Name"]."<br>";
        echo "Date_of_Registration: " . $row["Date_of_Registration"]."<br>";
        echo " -Enrollment: " . $row["Enrollment"]."<br>";
        echo "School: " . $row["School"]."<br>";
        echo " - Course: " . $row["Course"]."<br>";
        echo "Semester: " . $row["Semester"]."<br>";
        echo " - Batch: " . $row["Batch"]."<br>";
        echo "Phone: " . $row["Phone"]."<br>";
        echo " - Mobile: " . $row["Mobile"]."<br>";
        echo "Email: " . $row["Email"]."<br>";
        echo " - Nature: " . $row["Nature"]."<br>";
        echo "Nature_of_organisation: " . $row["Nature_of_organisation"]."<br>";
	echo " - Full_name_of_the_official_addresse: " . $row["Full_name_of_the_official_addresse"]."<br>";
	echo "Address_of_organisation: " . $row["Address_of_organisation"]."<br>";
	echo " - Designation: " . $row["Designation"]."<br>";
	echo "Contact: " . $row["Contact"]."<br>";
	echo " - Email_id: " . $row["Email_id"]."<br>";
        echo "Duration: " . $row["Duration"]."<br>";
        echo " - Start_date: " . $row["Start_date"]."<br>";
        echo "End_date: " . $row["End_date"] ."<br>" ;
    }
} 

 

   	
$conn->close();
?>
