<html>
<head><style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>
<title>Print Letter</title>
</head>
<body>
  <div id="printbtn">
<a href="administrator.php" style="text-decoration:none"><button>Go back</button></a>
 </div>
  <div align="right"><input id ="printbtn" type="button" value="Print this page" onclick="window.print();" >
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 align="center">Aum Amriteswaryai Namah</h3>
<?php
echo "<div align=right>";
$id=$_POST['letter_id'];

$now = new DateTime();
#echo $now->format('d-m-Y');
echo $now->format('Y-m-d');
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
                echo '<br>'.$row['Name_of_organisation'].'<br>';
                $str = $row['Address_of_organisation'];
$strlen = strlen( $str );
for( $i = 0; $i <= $strlen; $i++ ) {
    $char = substr( $str, $i, 1 );
    if($char == ',')
    echo "<br>";
    else
    echo $char;
    // $char contains the current character, so do your processing here
}

                echo "<br><h3>Subject-Request for ".$row['Nature']." for ".$row['Course'];
                if($row['member2']!='')
                echo " students";
                else
                echo " student";
                echo " </h3>";
                echo "Dear madam/sir,<br>";
                if($row["School"]=='Amrita school of Engineering')
                  {
                    echo "Amrita School of Engineering (ASE) is one of the several professional " ;
                    echo"institutions under Amrita Vishwa Vidyapeetham, established under section 3";
                    echo " of the UGC Act, 1956. Engineering (B. Tech) students studying in ASE are advised to" ;
                    echo  " do Internship in reputed organizations. This will give them some practical experience";
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
                    if(($row["member2"])=="")
                      {
                            if($row["Gender"]=="Male")
                            echo 'Mr. ';
                            else
                            echo 'Mrs. ';
                            echo $row["Name"]." wishes to do internship in your esteemed organization.";
                            echo " Your acceptance of this";
                            echo " request will encourage him greatly, and help in enhancing his";
                            echo " academic performance.";
                        }
                        else
                          {
                            echo "The following students wish to do Internship in your ";
                            echo "esteemed organization. Your acceptance of this request ";
                             echo " will encourage them greatly, and help in enhancing their";
                              echo "academic performance.";
                              echo "<br>1.";
				    if($row["Gender"]=='Male')
				      echo 'Mr.';
				      else
				      echo 'Mrs.';
					echo $row["Name"];

                              echo "<br>2.";
				    if($row["Gender2"]=='Male')
				      echo 'Mr.';
				      else
				      echo 'Mrs.';
					echo $row["member2"];
                              if($row["member3"]!='')
                               { echo "<br>3.";
				    if($row["Gender3"]=='Male')
				      echo 'Mr.';
				      else
				      echo 'Mrs.';
					echo $row["member3"];
					}
                                if($row["member4"]!='')
                                 { echo "<br>4.";
				    if($row["Gender4"]=='Male')
				      echo 'Mr.';
				      else
				      echo 'Mrs.';
					echo $row["member4"];
					}
                                  if($row["member5"]!='')
                                    {
                                    echo "<br>5.";
				    if($row["Gender5"]=='Male')
				      echo 'Mr.';
				      else
				      echo 'Mrs.';
					echo $row["member5"];
					}
                          }
                            echo "<br>Course:".$row["Course"]." Specialization: ".$row["Specialization"]."     Semester: ".$row["Semester"];
                            echo "<br>".$row["Nature"]." Duraton:";
                            echo $row["Start_date"];
                            echo " to ";
                            echo $row["End_date"];


                    echo"<br><br><br><br>Thanking you,";
                    echo "<br>Ever in Amma's service,";
                    echo "<br>Biju Kumar<br>Head-Corporate & Industry Relations";
                    echo "<br>Amritapuri Campus";


        }

  ?>
</body>
</html>
