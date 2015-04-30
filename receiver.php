<?PHP

/*$user_name = "root";
$password = "root";
$database = "mydb";
$server = "localhost";*/

require_once('/var/www/html/form/admin.php'); 
  $conn=mysqli_connect($server, $user_name, $password, $database);

print "Connection to the Server opened";

$name=$_POST['element_1'];
$enrollment=$_POST['element_2'];
$branch=$_POST['element_8']; 
$semester=$_POST['element_9'];
$batch=$_POST['element_10'];
$phone=$_POST['element_3'];
$mobile=$_POST['element_4'];
$email=$_POST['element_5'];
$nature=$_POST['element_11'];
$natureoforganisation=$_POST['element_11'];
$fullnameoforganisation=$_POST['element_12'];
$designation=$_POST['element_13'];
$contact=$_POST['element_14'];
$emailid=$_POST['element_15'];
$duration=$_POST['element_19'];
$start=$_POST['element_16'];
$end=$_POST['element_17'];
$addressoforganisation=$_POST['element_7'];


$sql = "INSERT INTO form(Name, Enrollment, Branch, Semester, Batch, Phone, Mobile, Email, Natureoftraining, Natureoforganisation, Addressoftheorganization, Fullname, Designation, Contactnumber, EmailID, Durationoftraining, StartingDate, EndDate)
VALUES (\"$name\",\"$enrollment\",\"$branch\",$semester,\"$batch\",$phone,$mobile,\"$email\",\"$nature\",\"$natureoforganisation\",\"$fullnameoforganisation\",\"$Addressoforganisation\",\"$designation\",$contact,\"$emailid\",\"$duration\",\"$start\",\"$end\")";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>