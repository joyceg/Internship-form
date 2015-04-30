<?PHP
/*$user_name = "root";
$password = "root";
$database = "mydb";
$server = "localhost";*/
require_once('/var/www/html/form/admin.php'); 
  $conn=mysqli_connect($server, $user_name, $password, $database);

  /*print "Connection to the Server opened";*/
$sql = "CREATE TABLE IF NOT EXISTS RegistrationForm (

													
	Name varchar(50) NOT NULL,
	Enrollment varchar(50) NOT NULL PRIMARY KEY,
	Branch varchar(20) NOT NULL,
	Semester varchar(30) NOT NULL,
	Batch varchar(35) NOT NULL,
	Phone int(30) NOT NULL,
	Mobile int(20) NOT NULL,
	Email varchar(30) NOT NULL,
	Nature varchar(255) NOT NULL,
	Natureoforganisation varchar( 400 ) NOT NULL,
	Fullname varchar( 400 ) NOT NULL,
	Addressoforganisation varchar( 200 ) NOT  NULL,

	Designation varchar( 50 ) NOT NULL,
	Contact int( 20 ) NOT NULL,	
	Emailid varchar( 50 ) NOT NULL,
	Duration varchar( 20 ) NOT  NULL,
	Start date NOT  NULL,
	EndDate date NOT NULL
	
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$name=$_POST['element_1'];
$enrollment=$_POST['element_2'];
$branch=$_POST['element_8']; 
$semester=$_POST['element_9'];
$batch=$_POST['element_10'];
$phone=$_POST['element_3'];
$mobile=$_POST['element_4'];
$email=$_POST['element_5'];
$nature=$_POST['element_11'];
$natureoforganisation=$_POST['element_6'];
$fullnameoforganisation=$_POST['element_12'];
$designation=$_POST['element_13'];
$contact=$_POST['element_14'];
$emailid=$_POST['element_15'];
$duration=$_POST['element_19'];
$start=$_POST['element_16'];
$End=$_POST['element_17'];
$addressoforganisation=$_POST['element_7'];

$sql = "INSERT INTO RegistrationForm(Name,Enrollment,Branch,Semester, Batch, Phone, Mobile, Email, Nature, Natureoforganisation, Fullname, Addressoforganisation, Designation, Contact, Emailid, Duration, Start, EndDate)
VALUES (\"$name\",\"$enrollment\",\"$branch\",$semester,\"$batch\",$phone,$mobile,\"$email\",\"$nature\",\"$natureoforganisation\",\"$fullnameoforganisation\",\"$addressoforganisation\",\"$designation\",$contact,\"$emailid\",\"$duration\",\"$start\",\"$End\")";
if (mysqli_query($conn, $sql)) {
    echo "Thank You,Your Application has been recoreded";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
