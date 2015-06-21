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
</head>
<body>
<div id="Content" align="center"> 
<img src="../images/header.png"  style="width:1000px;height:140px;"  align="center;" />
</div>
<hr>
<br>
<h2 align="center">Application for Internship/Industrial training</h2>
<br>
<table id="customers" border="5" style="width:80%" align="center">
<?php
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
    header('Location: '.'failure.html');
		return false;
} 
$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=(SELECT max(Registration_Id) FROM RegistrationForm)";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo "<h3><tr class=alt><td>Registration Id:</td>"."<td>" . $row["Registration_Id"]."</td>";
        echo "</tr>";
        
          echo "<tr>";
        
        echo "<td>Name of the Applicant:</td>" ."<td>". $row["Name"]."</td>";
        echo "</tr>";
        
        
        echo "<tr class=alt>";
        echo "<td>Gender:</td> "."<td>" . $row["Gender"]."</td>";
        echo "</tr>";
        
        echo "<tr class=alt>";
        echo "<td>Date of Registration:</td> "."<td>" . $row["Date_of_Registration"]."</td>";
        echo "</tr>";
          echo "<tr>";
        
        echo "<td>Enrollment No:</td><td> " . $row["Enrollment"]."</td>";
        echo "</tr>";
        
        
        echo "<tr class=alt>";
       echo "<td>School:</td><td> " . $row["School"]."</td>";
       echo "</tr>";
       
	  echo "<tr>";
       
        echo "<td>Course:</td><td>  " . $row["Course"]."</td>";
        echo "</tr>";
        
          echo "<tr>";
       
        echo "<td>Specialization:</td><td>  " . $row["Specialization"]."</td>";
        echo "</tr>";
       
        echo "<tr class=alt>";;
        echo "<td>Semester:</td><td>  " . $row["Semester"]."</td>";
        echo "</tr>";
        
        
        echo "<tr >";
        echo "<td>Batch:</td><td> " . $row["Batch"]."</td>";
        echo "</tr>";
        
       
        echo "<tr class=alt>";
        echo "<td>Phone Number(Residence):</td><td> " . $row["Phone"]."</td>";
        echo "</tr>";
        
          echo "<tr>";
        
        echo "<td>Mobile: </td><td> " . $row["Mobile"]."</td>";
        echo "</tr>";
        
        
        echo "<tr class=alt>";
        echo "<td>Email:</td><td> " . $row["Email"]."</td>";
        echo "</tr>";
        
         echo "<tr>";
        
        echo "<td>Nature of Training:</td><td>  " . $row["Nature"]."</td>";
        echo "</tr>";
        
        
        echo "<tr class=alt>";
        echo "<td>Nature of the  organisation:</td><td> " . $row["Nature_of_organisation"]."</td>";
	echo "</tr>";
	
	  echo "<tr>";
        
	
	echo "<td>Full name of the official addresse:</td><td> " . $row["Full_name_of_the_official_addresse"]."</td>";
	echo "</tr>";
	
	
        echo "<tr class=alt>";
	echo "<td>Address of organisation:</td><td> " . $row["Address_of_organisation"]."</td>";
	echo "</tr>";
	
	  echo "<tr>";
        
	echo "<td>Designation:</td><td> " . $row["Designation"]."</td>";
	echo "</tr>";
	
	 
        echo "<tr class=alt>";
	echo "<td>Contact:</td><td> " . $row["Contact"]."</td>";
	echo "</tr>";
	
	  echo "<tr>";
       
	echo "<td>Email id: </td><td> " . $row["Email_id"]."</td>";
        echo "</tr>";
        
        
        echo "<tr class=alt>";
	echo "<td> Duration: </td><td> " . $row["Duration"]."</td>";
        echo "</tr>";
        
        
          echo "<tr>";
        
        echo "<td>Staring date:</td><td> " . $row["Start_date"]."</td>";
        echo "</tr>";
        
          echo "<tr>";
        echo "<tr class=alt>";
        echo "<td>End Date:</td><td> " . $row["End_date"] ."</td></h3>" ;
        echo "</tr>";
	
      }
  
   	
$conn->close();
?>
<tr class=table_size>
    <td>Signature of student:</td><td></td>
</tr>

<tr class=table_size >
    <td>Signature of HOD:</td><td></td>
</tr>

<tr class=table_size  >
    <td>Signature of Head-CIR:</td><td></td>	
</tr>
</table>
</body>
</html>