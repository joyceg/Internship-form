<html>
<title>Print Letter</title>

<body>
<br>
<h3 align="center">Aum Amriteswaryai Namah</h3>
<?php
echo "<div align=right>";
$id=$_POST['letter_id'];

$now = new DateTime();
echo $now->format('d-m-Y');
echo "</div>";
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
   return false;
}
$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=$id";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<br>".$row["Full_name_of_the_official_addresse"];
                echo "<br>".$row["Designation"];
                echo "<br>".$row["Address_of_organisation"];
                echo "<br><h3>Sub-</h3>";
                echo "Dear madam/sir,<br>";
                if($row["School"]=='Amrita school of Engineering')
                  {
                    echo "Amrita School of Engineering (ASE) is one of the several professional" ;
                    echo"institutions under Amrita Vishwa Vidyapeetham, established under section 3";
                    echo " of the UGC Act, 1956. Engineering (B. Tech) students studying in ASE are advised";
                    echo  "do Internship in reputed organizations. This will give them some practical experience";
                    echo " which will contribute substantially to their learning process.";
                  }
                  else
                    {
                      echo "Amrita School of Arts and Sciences (ASAS) is one of the several";
                      echo" professional institutions";
                      echo " under Amrita Vishwa Vidyapeetham, established under section 3";
                      echo "of the UGC Act, 1956.";
                      echo " Management (BBM) students studying in ASAS are advised do";
                      echo "Internship in reputed organizations.";
                      echo " This will give them some practical experience which will";
                      echo " contribute substantially to their learning process.";
                    }
                    echo "<br><br>";
                    if($row["Gender"]=="Male")
                    echo 'Mr. ';
                    else
                    echo 'Mrs. ';
                    echo $row["Name"]." wishes to do internship in your esteemed organization.";
                    echo " Your acceptance of this";
                    echo "request will encourage him greatly, and help in enhancing his";
                    echo " academic performance.";
                    echo "<br>Course:".$row["Course"]."  Semester: ".$row["Semester"];
                    echo "<br>".$row["Nature"]." Duraton:";
                    echo $row["Start_date"];
                    echo " to ";
                    echo $row["End_date"];

                    echo"<br><br>Thanking you,";
                    echo "<br>Ever in Amma's service,";
                    echo "<br>Biju Kumar<br>Head-Corporate & Industry Relations";
                    echo "<br>Amritapuri Campus";


        }
  ?>
</body>
</html>
