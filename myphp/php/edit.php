<?php
session_start();
if(!($_SESSION["newsession"])){
 header("location:../../login.html");
 exit;
}

$id=$_POST['application_id'];
require_once('admin.php');
$conn=mysqli_connect($server, $user_name, $password, $database);
if ($conn->connect_error) {
 header('Location: failure.html');
 return false;
}
$sql = "SELECT * FROM RegistrationForm WHERE Registration_Id=$id";
session_start();
$_SESSION["Id"] = $id;
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
?>

<!DOCTYPE HTML>

<html>
<head>
 <title>CIR Internship</title>


 <link rel="apple-touch-icon" sizes="57x57" href="../images/favicon/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="../images/favicon/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="../images/favicon/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="../images/favicon/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="../images/favicon/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon/favicon-96x96.png">
 <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
 <link rel="manifest" href="manifest.json">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
 <meta name="theme-color" content="#ffffff">

 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <meta name="description" content="" />
 <meta name="keywords" content="CIR" />
 <!--[if lte IE 8]><script src="../css/ie/html5shiv.js"></script><![endif]-->

 <script src="../js/jquery.min.js"></script>
 <script src="../js/skel.min.js"></script>
 <script src="../js/init.js"></script>
 <noscript>
  <link rel="stylesheet" href="../css/skel.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/style-wide.css" />
 </noscript>
 <!--[if lte IE 8]><link rel="stylesheet" href="../css/ie/v8.css" /><![endif]-->

 <script type="text/javascript" >

  function disableMyText(){
   if(document.getElementById("checkMe").checked == true){
    document.getElementById("myText").disabled = true;
    document.getElementById("address1").disabled = true;
    document.getElementById("address2").disabled = true;
    document.getElementById("address3").disabled = true;
    document.getElementById("address4").disabled = true;
    document.getElementById("fullname").disabled = true;
    document.getElementById("designation").disabled = true;
    document.getElementById("contact").disabled = true;
    document.getElementById("emailid").disabled = true;
   }else{
    document.getElementById("myText").disabled = false;
    document.getElementById("address1").disabled = false;
    document.getElementById("address2").disabled = false;
    document.getElementById("address3").disabled = false;
    document.getElementById("address4").disabled = false;
    document.getElementById("fullname").disabled = false;
    document.getElementById("designation").disabled = false;
    document.getElementById("contact").disabled = false;
    document.getElementById("emailid").disabled = false;
   }
  }
 </script>

 <style>
  #keyinfo {
   text-align: center;
  }
 </style>
 <script type="text/javascript" src="../js/calendar.js"></script>
 <script src="../js/jquery-1.6.2.min.js"></script>
 <script src="../js/jquery-ui-1.8.15.custom.min.js"></script>
 <link rel="stylesheet" href="../js/jqueryCalendar.css">
 <script>
  jQuery(function() {
   $("#start").datepicker({ dateFormat: 'yy-mm-dd' });
   jQuery( "#start" ).datepicker();
  });
 </script>
 <script>
  jQuery(function() {
   $("#end").datepicker({ dateFormat: 'yy-mm-dd' });
   jQuery( "#end" ).datepicker();
  });
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
 <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

 <!-- Slider
 ================================================== -->
 <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
 <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

 <!-- Stylesheet
 ================================================== -->
 <link rel="stylesheet" type="text/css"  href="../css/style.css">
 <link rel="stylesheet" type="text/css" href="../css/responsive.css">

 <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

 <script type="text/javascript" src="../js/modernizr.custom.js"></script>
</head>
<body>
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.html">Home<span class="color"></span></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>
<br>
<!-- Header -->
<div class="container box">
 <section>
  <form name="myForm" class="appnitro"   method="post" action="editReceived.php">
   <div class="form_description">

    <ul >

     <li id="li_1" >

      <div class="row">

       <div class="6u 12u(mobilep)">

        <label class="description" for="name">Name of the Applicant: </label>
        <input id="name" name="name" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Name"]; ?>" placeholder="Enter name" />
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="Gender">Gender: </label>

        <?php
        if($row["Gender"]=='Male'){
        ?>
        <input type="radio" name="Gender" value="Male"  checked>Male
        <input type="radio" name="Gender" value="Female" >Female

        <?php }
        else if($row["Gender"]=='Female'){ ?>

        <input type="radio" name="Gender" value="Male" >Male
        <input type="radio" name="Gender" value="Female" checked>Female
<?php } ?>
       </div>
       <p></p>
       <div class="6u 12u(mobilep)">

        <label class="description" for="enrollment">Roll No: </label>
        <input id="enrollment" name="enrollment" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Enrollment"]; ?>" placeholder="Eg. AM.EN.U4CSE1301"/>

       </div>

       <div class="6u 12u(mobilep)">
        <label class="description" for="school">School: </label>

        <?php
        if($row["School"]=='Amrita school of Arts and sciences'){
        ?>
        <input type="radio" name="school" value="Amrita school of Arts and sciences"  checked>Amrita school of Arts and sciences<br>
        <input type="radio" name="school" value="Amrita school of Engineering" >Amrita school of Engineering<br>

   <?php }
        else if($row["School"]=='Amrita school of Engineering'){
        ?>

        <input type="radio" name="school" value="Amrita school of Arts and sciences" >Amrita school of Arts and sciences<br>
        <input type="radio" name="school" value="Amrita school of Engineering" checked>Amrita school of Engineering<br>

<?php } ?>

       </div>

        <div class="6u 12u(mobilep)">
        <label class="description" for="phone">Phone Number: </label>
        <input id="phone" name="phone" class="element text medium" type="text" maxlength="255" value=" <?php echo $row["Phone"] ;?>"  placeholder="Enter phone number"/>
       </div>

       <div class="6u 12u(mobilep)">
        <label class="description" for="email">Email </label>
        <input id="email" name="email" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Email"];?>"  placeholder="Enter Email-Id"/>
       </div>

       <div class="6u 12u(mobilep)">
        <br>
        <label class="description" for="nature">Nature of training: </label>
<?php
        if($row["Nature"]=='Internship'){
        ?>
        <input type="radio" name="nature"   value="Internship" checked>Internship<br>
        <input type="radio" name="nature"  value="In-plant training" >In-plant training<BR>
        <input type="radio" name="nature" value="Industrial training" >Industrial training<BR>
        <input type="radio" name="nature"  value="Project">Project<br>
        <input type="radio" name="nature" value="Any other">Any other
<?php }

        else if($row["Nature"]=='In-plant training'){
         ?>
         <input type="radio" name="nature"   value="Internship" >Internship<br>
         <input type="radio" name="nature"  value="In-plant training" checked>In-plant training<BR>
         <input type="radio" name="nature" value="Industrial training" >Industrial training<BR>
         <input type="radio" name="nature"  value="Project">Project<br>
         <input type="radio" name="nature" value="Any other">Any other
        <?php }

 else if($row["Nature"]=='Industrial training'){
 ?>
 <input type="radio" name="nature"   value="Internship" >Internship<br>
 <input type="radio" name="nature"  value="In-plant training" >In-plant training<BR>
 <input type="radio" name="nature" value="Industrial training" checked>Industrial training<BR>
 <input type="radio" name="nature"  value="Project">Project<br>
 <input type="radio" name="nature" value="Any other">Any other
<?php }
 else if($row["Nature"]=='Project'){
         ?>
         <input type="radio" name="nature"   value="Internship" >Internship<br>
         <input type="radio" name="nature"  value="In-plant training" >In-plant training<BR>
         <input type="radio" name="nature" value="Industrial training" >Industrial training<BR>
         <input type="radio" name="nature"  value="Project" checked>Project<br>
         <input type="radio" name="nature" value="Any other">Any other
        <?php } ?>
       </div>
       <div>
        Tick here for whomsoever concerned
        <input type="checkbox" id="checkMe" name="checkMe" onclick="disableMyText()"/>
        <br><div onclick="alert('Tick the box if this application is not directly directed to any official of  the industry');return true;">[Need info?]</div>
       </div>

       <div class="6u 12u(mobilep)">
        <label class="description" for="nameoforganisation">Company Name: </label>
        <input id="myText" name="nameoforganisation" class="element text medium" type="text"   maxlength="255" value="<?php echo $row["Name_of_organisation"];?>"   placeholder="Enter name of the organization"/>
       </div>

       <div class="6u 12u(mobilep)">
        <label class="description" for="address1">Company Location: </label>
        <input id="address1" name="address1" class="element text medium" type="text"   maxlength="255" value="<?php echo $row['Address_of_organisation'];?>"   placeholder="Amritapuri"/>
     </div>


       <div class="6u 12u(mobilep)">
        <label class="description" for="fullname">Company Person Name: </label>
        <input id="fullname" name="fullname" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Full_name_of_the_official_addresse"];?>"   placeholder="Enter name of the official addresse"/>
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="ation">Company Person Designation: </label>
        <input id="designation" name="designation" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Designation"];?>"  placeholder="Enter Designation of the official addresse"/>
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="contact">Contact number </label>
        <input id="contact" name="contact" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Contact"];?>"  placeholder="Enter contact number of the official addresse"/>
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="emailid">Email ID </label>
        <input id="emailid" name="emailid" class="element text medium" type="text" maxlength="255" value="<?php echo $row["Email_id"]; ?>"  placeholder="Enter Email-Id of the official addresse"/>
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="start">Start Date </label>
        <input type	="date" id="start" name="start"  value="<?php echo $row["Start_date"];?>"placeholder="Enter starting Date"/>
       </div>
       <div class="6u 12u(mobilep)">
        <label class="description" for="end">End Date </label>
        <input type="date"  id="end" name="end" value="<?php echo $row["End_date"];?>"placeholder="Enter ending date"/>
       </div>
       <div>
        Add Team member 2
        <input class="conditional_form_part_activator" type="checkbox">

        <div class="conditional_form_part">
         <div class="row">

          <div class="6u 12u(mobilep)">
           <label class="description" for="member2">Name of the student</label>
           <input id="member2" name="member2" class="element text medium" type="text" maxlength="255" value="<?php echo $row["member2"]; ?>" />
          </div>

          <div class="6u 12u(mobilep)">
           <label class="description" for="Gender">Gender: </label>
           <input type="radio" name="Gender2" value="Male"  >Male
           <input type="radio" name="Gender2" value="Female" >Female<br>

          </div>

          <div >
           Add Team member 3
           <input class="conditional_form_part_activator" type="checkbox">

           <div class="conditional_form_part">
            <div class="row">

             <div class="6u 12u(mobilep)">
              <label class="description" for="member3">Name of the student</label>
              <input id="member3" name="member3" class="element text medium" type="text" maxlength="255" value="<?php echo $row["member3"]; ?>" />
             </div>

             <div class="6u 12u(mobilep)">
              <label class="description" for="Gender">Gender: </label>
              <input type="radio" name="Gender3" value="Male" >Male
              <input type="radio" name="Gender3" value="Female">Female<br>

             </div>

             <div>
              Add Team member 4
              <input class="conditional_form_part_activator" type="checkbox">

              <div class="conditional_form_part">
               <div class="row">

                <div class="6u 12u(mobilep)">
                 <label class="description" for="member4">Name of the student</label>
                 <input id="member4" name="member4" class="element text medium" type="text" maxlength="255" value="<?php echo $row["member4"]; ?>" />
                </div>
                <div class="6u 12u(mobilep)">
                 <label class="description" for="Gender">Gender: </label>
                 <input type="radio" name="Gender4" value="Male"  >Male
                 <input type="radio" name="Gender4" value="Female" >Female<br>


                </div>
                <div>
                 Add Team member 5
                 <input class="conditional_form_part_activator" type="checkbox">

                 <div class="conditional_form_part">
                  <div class="row">

                   <div class="6u 12u(mobilep)">
                    <label class="description" for="member5">Name of the student</label>
                    <input id="member5" name="member5" class="element text medium" type="text" maxlength="255" value="<?php echo $row["member5"]; ?>" />
                   </div>
                   <div class="6u 12u(mobilep)">
                    <label class="description" for="Gender">Gender: </label>
                    <input type="radio" name="Gender5" value="Male"  >Male
                    <input type="radio" name="Gender5" value="Female" >Female<br>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>

         </div>
        </div>
       </div>
       <ul>
        <li>
         <input id="saveForm" class="button_text" type="submit" name="submit" value="Save" />
        </li>
       </ul>
  </form>

 </section>
 <div align="left"><br>
  <strong>Note:</strong>
  <br>1. Please take a print out of the form generated after submission.
  <br>2. Get the signatures of the respective incharges mentioned.
  <br>3. Submit the fully filled form to the CIR department for further proceedings.
 </div>

</div>

</div>

<div align="center">
 <a href="http://amritafoss.in">Generated by Joyce George and FOSS@Amrita</a>								</body>
</div>
</html>
<?php }?>