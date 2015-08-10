<html>
<title>Administrator</title>
<body>

<h1>Welcome,you are now redirected to the administrator page</h1>

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
        echo "<h3><tr class=alt><td>Total Number of Applications received:</td>"."<td>" . $row["Registration_Id"]."</td></h3>";
        }
$conn->close();
?>

<form method="post" action="single_application_view.php">
Registration ID: <input type="text" name="test_reg" value=""><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
