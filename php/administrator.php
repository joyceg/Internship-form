<html>
<title>Administrator</title>
<body>
<br>
<div align="center" style="color:#D90026">
<h1 >WELCOME TO THE ADMINISTRATOR ACCOUNTS</h1>
</div>
<br>
<br>
<?php
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
}
$sql = "SELECT Registration_Id FROM RegistrationForm WHERE Registration_Id=(SELECT max(Registration_Id) FROM RegistrationForm)";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<button><tr class=alt><td>Total Number of Applications received: </td>"."<td>" . $row["Registration_Id"]."</td></h3></button>";
        }
$conn->close();
?>
<br>
<br>
<form method="post" action="single_application_view.php">
Registration ID: <input type="text" name="test_reg" value=""><br>
<br><input type="submit" value="Submit">

</form>
<h2>Print Application</h2>
<form method="post" action="PrintApplication.php">
Registration ID: <input type="text" name="application_id" value=""><br>
<br><input type="submit" value="Submit">
</form>
<h2>Print Application-Letter</h2>
<form method="post" action="PrintLetter.php">
Registration ID: <input type="text" name="letter_id" value=""><br>
<br><input type="submit" value="Submit">
</form>
</body>
</html>
