`<?php
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
		Date_of_Registration text NOT NULL ,
		Name varchar(50)  NOT NULL,
		Gender varchar(10)  NOT NULL,
		Enrollment varchar(50) NOT NULL,
		School varchar(100)  NOT NULL,
		Course varchar(100)  NOT NULL,
		Specialization varchar(100) NOT NULL,
		Semester varchar(30) NOT NULL,
		Batch int(35) NOT NULL,
		Phone varchar(15) NOT NULL,
		Email varchar(30)  NOT NULL,
		Nature varchar(255)  NOT NULL,
		Name_of_organisation varchar( 400 ) NOT NULL,
		Full_name_of_the_official_addresse varchar( 400 ) NOT NULL,
		Address_of_organisation varchar( 200 )  NOT NULL,
		Designation varchar( 50 )  NOT NULL,
		Contact varchar( 25 )  NOT NULL,
		Email_id varchar( 50 ) NOT NULL,
		Start_date text  NOT NULL,
		End_date text  NOT NULL ,
		Duration varchar(20) NOT  NULL,
		member2 varchar(20)   NULL,
		Gender2 varchar(8) NULL,
		member3 varchar(20) NULL,
		Gender3 varchar(8) NULL,
		member4 varchar(20)  NULL,
		Gender4 varchar(8) NULL,
		member5 varchar(20)  NULL,
		Gender5 varchar(8) NULL
	)";
	if ( $conn->query($sql) === false ) {
		header('Location: '.'failure.html');
		return false;
	}

	insertIntoDatabase($conn);
}
function checkIfInValidPost() {
	/*foreach( $_POST as $key => $value ) {
		if ( $value === "" ) {
			return false;
		}
	}
	return false;
	*/
	if(!eregi ('[a-zA-Z]',$_POST['name']))
	  {
	  return true;

	  }
	  if(!eregi ('[0-9]',$_POST['phone']))
	    {
	    return true;
	    }
	     if(!eregi ('[0-9]',$_POST['contact']))
	    {
	    return true;
	    }

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
	//$mobile= $conn->real_escape_string( $_POST['mobile'] );
	$email = $conn->real_escape_string( $_POST['email'] );
	$nature = $conn->real_escape_string( $_POST['nature'] );
	$nameoforganisation = $conn->real_escape_string( $_POST['nameoforganisation'] );
	$fullnameoforganisation = $conn->real_escape_string( $_POST['fullname'] );
	$designation= $conn->real_escape_string( $_POST['designation'] );
	$contact = $conn->real_escape_string( $_POST['contact'] );
	$emailid = $conn->real_escape_string( $_POST['emailid'] );
	$start = $conn->real_escape_string( $_POST['start'] );
	$end = $conn->real_escape_string( $_POST['end'] );
	$addressoforganisation = $conn->real_escape_string( $_POST['address'] );
	$member2=$conn->real_escape_string( $_POST['member2'] );
	$Gender2=$conn->real_escape_string( $_POST['Gender2'] );
        $member3=$conn->real_escape_string( $_POST['member3'] );
		//		$member2=((is_null($member2))?"lah":$member2);
        $Gender3=$conn->real_escape_string( $_POST['Gender3'] );
        $member4=$conn->real_escape_string( $_POST['member4'] );
        $Gender4=$conn->real_escape_string( $_POST['Gender4'] );
        $member5=$conn->real_escape_string( $_POST['member5'] );
        $Gender5=$conn->real_escape_string( $_POST['Gender5'] );
        $DateAdded = date("d-m-Y");

	$Duration = (1+(strtotime($end)- strtotime($start))/24/3600) ." days";

		$sql = "INSERT INTO RegistrationForm(Registration_Id,Name,Gender,Date_of_Registration,Enrollment,School,Course,Specialization,Semester, Batch, Phone, Email, Nature,
 	Name_of_organisation, Full_name_of_the_official_addresse, Address_of_organisation, Designation, Contact,
 	Email_id,Start_date, End_date,Duration,member2,Gender2,member3,Gender3,member4,Gender4,member5,Gender5) VALUES (\"$Registration_Id\",\"$name\",\"$Gender\",\"$DateAdded\",\"$enrollment\",\"$school\",\"$course\",\"$specialization\",$semester,
 	\"$batch\",\"$phone\",\"$email\",\"$nature\",\"$nameoforganisation\",\"$fullnameoforganisation\",
 	\"$addressoforganisation\",\"$designation\",$contact,\"$emailid\",\"$start\",\"$end\",\"$Duration\",\"$member2\",\"$Gender2\",\"$member3\",\"$Gender3\",\"$member4\",\"$Gender4\",\"$member5\",\"$Gender5\")";

	if ( mysqli_query( $conn, $sql ) == false ) {
		header('Location: '.'failure.html');
		return false;
	} else {
		header('Location: '.'success.html');
		return true;
	}
}


?>
