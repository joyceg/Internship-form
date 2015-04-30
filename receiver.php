<?PHP
/*$user_name = "root";
$password = "root";
$database = "mydb";
$server = "localhost";*/
require_once('/var/www/html/form/admin.php'); 
  $conn=mysqli_connect($server, $user_name, $password, $database);

$sql = "CREATE TABLE IF NOT EXISTS RegistrationForm (

	Registration_Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,												
	Name varchar(50) NOT NULL,
	Enrollment varchar(50) NOT NULL,
	Branch varchar(20) NOT NULL,
	Semester varchar(30) NOT NULL,
	Batch varchar(35) NOT NULL,
	Phone varchar(15) NOT NULL,
	Mobile varchar(15) NOT NULL,
	Email varchar(30) NOT NULL,
	Nature varchar(255) NOT NULL,
	Nature_of_organisation varchar( 400 ) NOT NULL,
	Full_name_of_the_official_addresse varchar( 400 ) NOT NULL,
	Address_of_organisation varchar( 200 ) NOT  NULL,

	Designation varchar( 50 ) NOT NULL,
	Contact varchar( 25 ) NOT NULL,	
	Email_id varchar( 50 ) NOT NULL,
	Duration varchar( 20 ) NOT  NULL,
	Start_date date NOT  NULL,
	End_date date NOT NULL
	
)";

if ($conn->query($sql) === TRUE) {
   /* echo "Table MyGuests created successfully";*/
} else {
    echo "Error creating table: " . $conn->error;
}


$name=$_POST['name'];
$enrollment=$_POST['enrollment'];
$branch=$_POST['branch']; 
$semester=$_POST['semester'];
$batch=$_POST['batch'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$nature=$_POST['nature'];
$natureoforganisation=$_POST['natureoforganisation'];
$fullnameoforganisation=$_POST['fullname'];
$designation=$_POST['designation'];
$contact=$_POST['contact'];
$emailid=$_POST['emailid'];
$duration=$_POST['duration'];
$start=$_POST['start'];
$End=$_POST['end'];
$addressoforganisation=$_POST['address'];

$sql = "INSERT INTO RegistrationForm(Name,Enrollment,Branch,Semester, Batch, Phone, Mobile, Email, Nature, Nature_of_organisation, Full_name_of_the_official_addresse, Address_of_organisation, Designation, Contact, Email_id, Duration, Start_date, End_date)
VALUES (\"$name\",\"$enrollment\",\"$branch\",$semester,\"$batch\",$phone,$mobile,\"$email\",\"$nature\",\"$natureoforganisation\",\"$fullnameoforganisation\",\"$addressoforganisation\",\"$designation\",$contact,\"$emailid\",\"$duration\",\"$start\",\"$End\")";

if (mysqli_query($conn, $sql)) {
    /*echo "Thank You,Your Application has been recoreded";*/
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
