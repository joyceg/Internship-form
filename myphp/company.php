<?php
session_start();
if(!($_SESSION["newsession"])){
	header("location:../login.html");
	exit;
}
?>
<html>
<title>Application for Internship/Industrial training</title>
<head>
<style>
table, td, th {
    border: 1px solid black;
}
td{
padding:0.8%;
}

#customers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
#customers tr.table_size td{

    padding:2.5%;
}

</style>
<style >
@media print {
    #printbtn {
        display :  none;
    }
}
</style>
</head>
<body>
<div id="Content" align="center">
<img src="../images/header.png"  style="width:1000px;height:140px;"  align="center;" />
</div>
<hr>
<div id="printbtn">
<a href="administrator.php" style="text-decoration:none"><button>Go back</button></a>
</div>
<div align="right"><input id ="printbtn" type="button" value="Print this page" onclick="window.print();" >
</div>
<br>
<h2 align="center">Companies Enrolled</h2>
<br>
<table id="customers" border="5" style="width:80%" align="center">
<?php
$start=$_POST['start1'];
$end=$_POST['end1'];
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
}
echo "$start to  $end<br><br><br>";
$sql = "SELECT * FROM RegistrationForm where (Date_of_Registration >= '$start' && Date_of_Registration <= '$end') ";
$result = $conn->query($sql);
$row=$result->num_rows;
if($row)
          {
            echo "<tr><td><b>Name of the organisation</b></td><td><b>      Address      </b></td><td><b>Name of official addresse</b></td><td><b>Designation</td></b><td><b>    Email-Id     </td></b><td><b>Conatact Number</td></b>";
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["Name_of_organisation"]."</td>";
							$address="";
							$address1=$row["Address1"];
							if($address1!='--')
								{
									$address.=$address1;
								}
							$address2=$row["Address1"];
							if($address2!='--')
								{	$address.=",";
									$address.=$address2;
								}
							$address3=$row["Address1"];
							if($address3!='--')
								{	$address.=",";
									$address.=$address3;
								}
							$address4=$row["Address1"];
							if($address1!='--')
								{	$address.=",";
									$address.=$address4;
								}
              echo "<td>".$address."</td>";
              echo "<td>".$row["Full_name_of_the_official_addresse"]."</td>";
              echo  "<td>".$row["Designation"]."</td>";
              echo  "<td>".$row["Email_id"]."</td>";
              if($row["Contact"]==0)
              {echo  "<td>--</td>";}
              else
              {echo  "<td>".$row["Contact"]."</td>";}

            }
         	echo "</tr>";
        }
        else
        {echo "Sorry.No valid data found.";}
$conn->close();
?>
</table>
</body>
</html>
