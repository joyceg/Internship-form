`<?php
session_start();
if(!($_SESSION["newsession"])){
 header("location:../../login.html");
 exit;
}
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

 if ( !require_once('admin.php') ) {
  return false;
 }
 $conn=mysqli_connect($server, $user_name, $password, $database);
 if ( !$conn ) {
  header('Location: failure.html');
  return false;
 }

 insertIntoDatabase($conn);

}
function insertIntoDatabase( $conn ) {
 $id=$_SESSION["Id"];
 $name= $conn->real_escape_string( $_POST['name'] );
 $name=ucwords(strtolower($name));
 $Gender= $conn->real_escape_string( $_POST['Gender'] );
 $enrollment= $conn->real_escape_string( $_POST['enrollment'] );
 $enrollment=strtoupper($enrollment);
 $school= $conn->real_escape_string( $_POST['school'] );
 $phone= $conn->real_escape_string( $_POST['phone'] );
 //$mobile= $conn->real_escape_string( $_POST['mobile'] );
 $email = $conn->real_escape_string( $_POST['email'] );
 $email=strtolower($email);
 $nature = $conn->real_escape_string( $_POST['nature'] );
 $nameoforganisation = $conn->real_escape_string( $_POST['nameoforganisation'] );
 $nameoforganisation=ucwords(strtolower($nameoforganisation));
 $fullnameoforganisation = $conn->real_escape_string( $_POST['fullname'] );
 $fullnameoforganisation=ucwords(strtolower($fullnameoforganisation));
 $designation= $conn->real_escape_string( $_POST['designation'] );
 $designation=ucwords(strtolower($designation));
 $contact = $conn->real_escape_string( $_POST['contact'] );
 $emailid = $conn->real_escape_string( $_POST['emailid'] );
 $emailid=strtolower($emailid);
 $start = $conn->real_escape_string( $_POST['start'] );
 $end = $conn->real_escape_string( $_POST['end'] );
 $address1 = $conn->real_escape_string( $_POST['address1'] );
 //to give a space after every comma.
 $substr = ',';
 $attachment = ' ';
 $address1 = str_replace($substr, $substr.$attachment, $address1);
 $address1=ucwords(strtolower($address1));
 /*$address2 = $conn->real_escape_string( $_POST['address2'] );
 $address2 = str_replace($substr, $substr.$attachment, $address2);
 $address2=ucwords(strtolower($address2));
 $address3 = $conn->real_escape_string( $_POST['address3'] );
 $address3 = str_replace($substr, $substr.$attachment, $address3);
 $address3=ucwords(strtolower($address3));
 $address4 = $conn->real_escape_string( $_POST['address4'] );
 $address4 = str_replace($substr, $substr.$attachment, $address4);
 $address4=ucwords(strtolower($address4));
 */
 $member2=$conn->real_escape_string( $_POST['member2'] );
 $member2=ucwords(strtolower($member2));
 $Gender2=$conn->real_escape_string( $_POST['Gender2'] );
 $member3=$conn->real_escape_string( $_POST['member3'] );
 //		$member2=((is_null($member2))?"lah":$member2);
 $member3=ucwords(strtolower($member3));
 $Gender3=$conn->real_escape_string( $_POST['Gender3'] );
 $member4=$conn->real_escape_string( $_POST['member4'] );
 $member4=ucwords(strtolower($member4));
 $Gender4=$conn->real_escape_string( $_POST['Gender4'] );
 $member5=$conn->real_escape_string( $_POST['member5'] );
 $member5=ucwords(strtolower($member5));
 $Gender5=$conn->real_escape_string( $_POST['Gender5'] );
 $DateAdded = date("Y-m-d");

 if($contact == '')
  $contact='0';
 if($emailid== '')
  $emailid='--';
 if($nameoforganisation== '')
  $nameoforganisation='--';
 if($fullnameoforganisation== '')
  $fullnameoforganisation='--';
 if($designation== '')
  $designation='--';
 if(($address1== '')/*&&($address2== '')&&($address3== '')&&($address4== '')*/)
 {
  $addressoforganisation='--';
 }
 if(($address1)!= '')
 {
  $addressoforganisation.=$address1;
 }/*
	if(($address2)!= '')
	{	$addressoforganisation.="$";
		$addressoforganisation.=$address2;
	}
	if(($address3)!= '')
	{	$addressoforganisation.="$";
		$addressoforganisation.=$address3;
	}
	if(($address4)!= '')
	{	$addressoforganisation.="$";
		$addressoforganisation.=$address4;
	}*/
 $Duration = (1+(strtotime($end)- strtotime($start))/24/3600) ." days";

 $sql = "UPDATE RegistrationForm SET Name=\"$name\",  Gender=\"$Gender\",Enrollment=\"$enrollment\",School=\"$school\", Phone=\"$phone\", Email=\"$email\", Nature=\"$nature\",
 	Name_of_organisation=\"$nameoforganisation\", Full_name_of_the_official_addresse=\"$fullnameoforganisation\",Address_of_organisation=\"$addressoforganisation\",Designation=\"$designation\", Contact=\"$contact\",
 	Email_id=\"$emailid\",Start_date=\"$start\", End_date=\"$end\",Duration=\"$Duration\",member2=\"$member2\",Gender2=\"$Gender2\",member3=\"$member3\",Gender3=\"$Gender3\",member4=\"$member4\",Gender4=\"$Gender4\",member5=\"$member5\",Gender5=\"$Gender5\" where Registration_Id=\"$id\" ";

 if ( mysqli_query( $conn, $sql ) == false ) {
  return false;
 } else {
  header('Location: ../html/updatedSuccess.html');
  return true;
 }
}


?>
