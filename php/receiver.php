<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if ( checkIfInValidPost() ) {
		header('Location: '.'failure.html');
		return;
	}
	if ( !require_once('admin.php') ) {
		return false;
	}
	$conn=mysqli_connect($server, $user_name, $password, $database);
	if ( !$conn ) {
		header('Location: '.'failure.html');
		return false;
	}
	$sql = "CREATE TABLE IF NOT EXISTS RegistrationForm (
		Registration_Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		Date_of_Registration date NOT NULL,
		Name varchar(50)  NOT NULL,
		Gender varchar(10)  NOT NULL,
		Enrollment varchar(50) NOT NULL,
		School varchar(100)  NOT NULL,
		Course varchar(100)  NOT NULL,
		Specialization varchar(100) NOT NULL,
		Semester varchar(30) NOT NULL,
		Batch int(35) NULL,
		Phone varchar(15) NOT  NULL,
		Mobile varchar(15) NOT NULL,
		Email varchar(30)  NOT NULL,
		Nature varchar(255)  NOT NULL,
		Nature_of_organisation varchar( 400 ) NOT NULL,
		Full_name_of_the_official_addresse varchar( 400 ) NOT NULL,
		Address_of_organisation varchar( 200 )  NOT NULL,
		Designation varchar( 50 )  NOT NULL,
		Contact varchar( 25 )  NOT NULL,
		Email_id varchar( 50 ) NOT NULL,
		Start_date date  NOT NULL,
		End_date date  NOT NULL,
		Duration varchar(20) NOT  NULL
	)";
	if ( $conn->query($sql) === false ) {
		header('Location: '.'failure.html');
		return false;
	}
	insertIntoDatabase($conn);
}
function checkIfInValidPost() {
	foreach( $_POST as $key => $value ) {
		if ( $value === "" ) {
			return true;
		}
	}
	return false;
}
function insertIntoDatabase( $conn ) {
	$name= $conn->real_escape_string( $_POST['name'] );
	$Gender= $conn->real_escape_string( $_POST['Gender'] );
	$enrollment= $conn->real_escape_string( $_POST['enrollment'] );
	$school= $conn->real_escape_string( $_POST['school'] );
	$course= $conn->real_escape_string( $_POST['course'] );
	$specialization= $conn->real_escape_string( $_POST['specialization'] );
	$semester= $conn->real_escape_string( $_POST['semester']);
	$batch= $conn->real_escape_string($_POST['batch'] );
	$phone= $conn->real_escape_string( $_POST['phone'] );
	$mobile= $conn->real_escape_string( $_POST['mobile'] );
	$email = $conn->real_escape_string( $_POST['email'] );
	$nature = $conn->real_escape_string( $_POST['nature'] );
	$natureoforganisation = $conn->real_escape_string( $_POST['natureoforganisation'] );
	$fullnameoforganisation = $conn->real_escape_string( $_POST['fullname'] );
	$designation= $conn->real_escape_string( $_POST['designation'] );
	$contact = $conn->real_escape_string( $_POST['contact'] );
	$emailid = $conn->real_escape_string( $_POST['emailid'] );
	$start = $conn->real_escape_string( $_POST['start'] );
	$end = $conn->real_escape_string( $_POST['end'] );
	$addressoforganisation = $conn->real_escape_string( $_POST['address'] );
        $DateAdded = date("Y/m/d");
       
  
	$Duration = (1+(strtotime($end)- strtotime($start))/24/3600) ." days";

	  
	$sql = "INSERT INTO RegistrationForm(Registration_Id,Name,Gender,Date_of_Registration,Enrollment,School,Course,Specialization,Semester, Batch, Phone, Mobile, Email, Nature,
 	Nature_of_organisation, Full_name_of_the_official_addresse, Address_of_organisation, Designation, Contact,
 	Email_id,Start_date, End_date,Duration) VALUES (\"$Registration_Id\",\"$name\",\"$Gender\",\"$DateAdded\",\"$enrollment\",\"$school\",\"$course\",\"$specialization\",$semester,
 	\"$batch\",$phone,$mobile,\"$email\",\"$nature\",\"$natureoforganisation\",\"$fullnameoforganisation\",
 	\"$addressoforganisation\",\"$designation\",$contact,\"$emailid\",\"$start\",\"$end\",\"$Duration\")";
 	
	if ( mysqli_query( $conn, $sql ) == false ) {
		header('Location: '.'failure.html');
		return false;
	} else {
		header('Location: '.'success.html');
		return true;
	}
}
?>