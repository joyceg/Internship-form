<html>
<title>Administrator</title>
<head>
<style>
.logout
  {
    float:right;
    display:inline-block;
    padding:2px 5px;
    background:#ccc;
    color:#fff;


  }

</style>


</head>
<body bgcolor="#E6E6FA">
<br>
<div align="center" style="color:#D90026" >
<button><h1 >WELCOME TO THE ADMINISTRATOR ACCOUNTS</h1></button>
</div>

<div class="logout" align="right">

<a href="logout.html"  style="text-decoration:none">Logout</a>

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
echo "<div align='center'>";
    while($row = $result->fetch_assoc()) {
        echo "<button><tr class=alt><td>Total Number of Applications received: </td>"."<td>" . $row["Registration_Id"]."</td></h3></button>";
        }
        echo "</div>";
$conn->close();
?>
<br>
<br>
<form method="post" action="single_application_view.php">
Registration ID: <input type="text" name="test_reg" value="" required placeholder="Enter registration Id" /><br>
<br><input type="submit" value="Submit">

</form>

<h2>Print Application</h2>
<form method="post" action="PrintApplication.php">
Registration ID: <input type="text" name="application_id" value="" required placeholder="Enter registraion Id"/><br>
<br><input type="submit" value="Submit">
</form>
<h2>Print Application-Letter</h2>
<form method="post" action="PrintLetter.php">
Registration ID: <input type="text" name="letter_id" value="" required placeholder="Enter registration Id"/><br>
<br><input type="submit" value="Submit">
<br>
<br>

</form>


<a href="MoreDetails.html">More information</a>

</body>
</html>
