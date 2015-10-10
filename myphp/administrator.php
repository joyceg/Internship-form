<?php
session_start();
if(!($_SESSION["newsession"])){
	header("location:../login.html");
	exit;
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>CIR Internship</title>


		<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="CIR" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <style>
            #keyinfo {
                text-align: center;
            }
	    </style>

			<script type="text/javascript" src="js/calendar.js"></script>
			<script src="js/jquery-1.6.2.min.js"></script>
			<script src="js/jquery-ui-1.8.15.custom.min.js"></script>
			<link rel="stylesheet" href="js/jqueryCalendar.css">
			<script>
			                jQuery(function() {
			                $("#start").datepicker({ dateFormat: 'dd-mm-yy' });
			                                jQuery( "#start" ).datepicker();
			                });
			                </script>
			                <script>
			                jQuery(function() {
			                $("#end").datepicker({ dateFormat: 'dd-mm-yy' });
			                                jQuery( "#end" ).datepicker();
			                });
			                </script>
											<script>
																			jQuery(function() {
																			$("#from").datepicker({ dateFormat: 'dd-mm-yy' });
																											jQuery( "#from" ).datepicker();
																			});
																			</script>
																			<script>
																			jQuery(function() {
																			$("#to").datepicker({ dateFormat: 'dd-mm-yy' });
																											jQuery( "#to" ).datepicker();
																			});
																			</script>

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-42366838-3', 'auto');
        ga('send', 'pageview')
        </script>

        <script src="js/smooth-scroll.js"></script>
        <script>
            smoothScroll.init({
                speed: 1000
            } );
        </script>
				<style>
				  .conditional_form_part {
				    display: none;
				  }
				  .conditional_form_part_activator:checked + .conditional_form_part {
				    display: block;
				  }
				</style>
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<IMG STYLE="position:absolute; TOP:35px; LEFT:170px; WIDTH:100px; HEIGHT:110px" SRC="images/logo.png">

				<div STYLE="position:absolute; TOP:35px; LEFT:190px; WIDTH:1000px; HEIGHT:110px"><font size='7' color="red"> Online Internship Registration Portal</font></div>
				<div STYLE="position:absolute; TOP:55px; LEFT:1100px; WIDTH:200px; HEIGHT:210px"><font face="catull" color="blue">Corporate & Industry Relations(CIR),Amritapuri
				</font></div>

			<br>
                <br>
                <br>
                <br>
								<br>
                <a data-scroll href="#application" class="button">Application</a>  &nbsp
								<a data-scroll href="#printApplication" class="button">Print Application</a>  &nbsp
								<a data-scroll href="#printLetter" class="button">Print Letter</a>  &nbsp
								<a  href="printall.php" class="button">Print condensed data</a>
								<br><br>
								<a  href="printDept.php" class="button">Department wise data</a>  &nbsp
								<a  href="#company" class="button">Companies enrolled</a>  &nbsp
								<a data-scroll href="#filter" class="button">Filter</a>  &nbsp
								<a  href="logout.php" class="button">LOGOUT</a>
								<br>
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
												echo "<a href='#' class='button'>" . "Total Number of Applications received:" . $row["Registration_Id"];
												}
												echo "</a>";
								$conn->close();
								?>





			</div>
			<header id="application">
				</header>

                <div class="container box">
					<section>
		<h3>				Application</h3>

						<form id="form_1003621" class="appnitro"  method="post" action="single_application_view.php">
									<div class="form_description">

							<ul >

<div class="row">

	<div class="6u 12u(mobilep)">

 <input type="text" name="test_reg" value="" required placeholder="Enter registration Id" /><br>
	<br><input type="submit" value="Submit">
</div>
</div>
</ul>
</div>
	</form>


		</section>
</div>







	                <div class="container box">
						<section>
							<header id="printApplication">
								</header>

							<h3>			Print 	Application</h3>

							<form id="form_1003621" class="appnitro"  method="post" action="PrintApplication.php">
										<div class="form_description">

								<ul >

	<div class="row">

		<div class="6u 12u(mobilep)">

<input type="text" name="application_id" value="" required placeholder="Enter registraion Id"/><br>
	<br><input type="submit" value="Submit">

</div>
</div>
</div>
</ul>
	</form>



		</section>
</div>







<div class="container box">
<section>
	<header id="printLetter">
		</header>
<h3>Print Letter</h3>

<form id="form_1003621" class="appnitro"  method="post" action="PrintLetter.php">
	<div class="form_description">

<ul >

<div class="row">

<div class="6u 12u(mobilep)">
<input type="text" name="letter_id" value="" required placeholder="Enter registraion Id"/><br>
<br><input type="submit" value="Submit">

</div>
</div>
</div>
</ul>
</form>


</section>
</div>





<div class="container box">
<section>
	<header id="company">
		</header>
<h3>Companies Enrolled</h3>

<form id="form_1003621" class="appnitro"  method="post" action="company.php">
	<div class="form_description">

<ul >

<div class="row">

<div class="6u 12u(mobilep)">

	<input class="text" id="start" name="start1" required placeholder="From"/>

</div>
<div class="6u 12u(mobilep)">
	<input class="text"  id="end" name="end1" required placeholder="To"/>
	</div>
<br><br>
		</li><br><input type="submit" value="Submit">

</div>
</div>
</ul>
</form>


</section>
</div>












<div class="container box">
<section>
	<header id="filter">
		</header>
<h3>Filter</h3>

<form id="form_1003621" class="appnitro"  method="post" action="DisplayMore.php">
	<div class="form_description">

<ul >

<div class="row">

<div class="6u 12u(mobilep)">
	<div>

		<select id='courses' onchange='courseChanged(this.value);' name="course" required>
		<option value=''>Select Course</option>
		<option value='Btech'>Btech</option>
		<option value='MTech'>MTech</option>
		<option value='BCA'>BCA</option>
		<option value='MCA'>MCA</option>
		<option value='BSC'>BSC</option>
		<option value='MSC'>MSC</option>
		<option value='BCOM'>BCOM</option>
		<option value='MCOM'>MCOM</option>
		<option value='BBM'>BBM</option>
		<option value='MA'>MA</option>

	</select>
	&nbsp;&nbsp;

	</div>
	</li>

	<li id="li_180" >

		<div>
	<select id='specialization' onchange='SpecializationChanged(this.value);' name="specialization" required>
		<option value=''>Select specialization</option>
	</select>
	&nbsp;&nbsp;


		</div></li>

	<script type="text/javascript">
	 var statesBtech=["CSE", "ECE", "EEE","ME"];
	 var statesMTech=["CIN", "CSE", "CSN","ELT", "PR", "RAU","TF","VLSI","WNA"];
	 var statesMCA=["Not Applicable", "Other"];
	 var statesBCA=["Not Applicable", "Other"];
	 var statesBCOM=["Not Applicable", "Other"];
	 var statesBBM=["Not Applicable", "Other"];
	 var statesMCOM=["Not Applicable", "Other"];
	 var statesBSC=["Chemistry", "CS", "Maths","Physics"];
	 var statesMSC=["Chemistry", "CS", "Maths","Physics"];
	 var statesMA=["Not Applicable", "Other"];
	 function courseChanged(courses)
	 {
			var selectSpecialization = document.getElementById('specialization');
			var ln = selectSpecialization.length - 1;
			while (ln > 0)
			{
				selectSpecialization.remove(1);
				ln--;
			}
			var stateArray;
			switch(courses)
			{
				case "Btech":
						stateArray=statesBtech;
						break;
				case "MTech":
						stateArray=statesMTech;
						break;
				case "BCA":
						stateArray=statesBCA;
						break;
				case "MCA":
						stateArray=statesMCA;
						break;
				case "BBM":
						stateArray=statesBBM;
						break;
				case "MSC":
						stateArray=statesMSC;
						break;
				case "BSC":
						stateArray=statesBSC;
						break;
				case "BCOM":
						stateArray=statesBCOM;
						break;
				case "MCOM":
						stateArray=statesMCOM;
						break;
				case "MA":
						stateArray=statesMA;
						break;
				default:
			}
			for (i = 0; i < stateArray.length; i++)
			{
				var option = document.createElement('option');
				option.text = stateArray[i];
				option.value = stateArray[i];
				selectSpecialization.add(option);
			}
	}

	</script>


	<div class="6u 12u(mobilep)">

		<input class="text" id="from" name="from" required placeholder="From"/>

	</div>
	<div class="6u 12u(mobilep)">
		<input class="text"  id="to" name="to" required placeholder="To"/>
		</div>

		</li><br><input type="submit" value="Submit">

</div>
</div>
</ul>
</form>


</section>
</div>



<div align="center">
	<a href="http://amritafoss.in">Generated by Joyce George and FOSS@Amrita</a>								</body>
</div>
				</html>
