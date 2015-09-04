 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Application for Internship/Industrial Training</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="js/view.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>

<script src="js/jquery-1.6.2.min.js"></script>
<script src="js/jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="js/jqueryCalendar.css">
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


</head>
<body >

<div id="main_body">
	<img id="top" src="images/top.png" alt="">
	<img src="images/Amrita-university.jpg" style="width:800px;height:150px;">

	<div id="form_container">
  
   <div align="right">
    
    <a href="login.html" style="text-decoration:none" >Administrator Login</a>
  
  </div>
 
		<h1><a>Application for Internship/Industrial Training</a></h1>
		<form id="form_1003621" class="appnitro"  method="post" action="php/receiver.php">
					<div class="form_description">
            <h2>CIR Amritapuri - Online Internship Regsitration Portal</h2>
			<p></p>
		</div>
			<ul >

					<li id="li_1" >
		<label class="description" for="name">Name of the Applicant </label>
		<div>
			<input id="name" name="name" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter name" />
		</div>
		</li>

		<li id="li_1.2" >
		<label class="description" for="Gender">Gender: </label>
	<div>
		<input type="radio" name="Gender" value="Male" required >Male
		<input type="radio" name="Gender" value="Female" required>Female<br>

	</div>

		</li>



		<li id="li_2" >
		<label class="description" for="enrollment">Enrollment No: </label>
		<div>
			<input id="enrollment" name="enrollment" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter Enrollment ID"/>
		</div><p class="guidelines" id="guide_2"><small>eg, AM.EN.U4CSE13101</small></p>
		</li>		<li id="li_18" >
		<label class="description" for="school">School: </label>

		<input type="radio" name="school" value="Amrita school of Arts and sciences" required>Amrita school of Arts and sciences<br>
		<input type="radio" name="school" value="Amrita school of Engineering" required>Amrita school of Engineering<br>



		</li>

		<li id="li_80" >



		<label class="description" for="course">Course: </label>
		<div>

		<select id='courses' onchange='courseChanged(this.value);' name="course">
    <option value=''>Select Course</option>
    <option value='BTech'>BTech</option>
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
		<label class="description" for="specialization">Specialization: </label>
		<div>
  <select id='specialization' onchange='SpecializationChanged(this.value);' name="specialization" required>
    <option value=''>Select specialization</option>
  </select>
&nbsp;&nbsp;
				<p class="guidelines" id="guide_20"><small> Enter the area of specialization</small></p>

		</div></li>

 <script type="text/javascript">
   var statesBTech=["CSE", "ECE", "EEE","ME"];
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
        case "BTech":
            stateArray=statesBTech;
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

		<li id="li_9" >



		<label class="description" for="semester">Semester:</label>
		<div>
		<select class="element select medium" id="semester" name="semester" required />
			<option value="semester" selected="selected"></option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>
<option value="4" >4</option>
<option value="5" >5</option>
<option value="6" >6</option>
<option value="7" >7</option>
<option value="8" >8</option>

		</select>
		</div>
		<p class="guidelines" id="guide_9"><small>Select you semester</small></p>
		</li>


		<li id="li_10" >



		<label class="description" for="batch">Batch: </label>
		<div>
		<select class="element select medium" id="batch" name="batch" required>
			<option value="" selected="selected" ></option>
<option value="2012" >2012</option>
<option value="2013" >2013</option>
<option value="2014" >2014</option>
<option value="2015" >2015</option>
<option value="2016" >2016</option>
<option value="2017" >2017</option>
<option value="2018" >2018</option>
<option value="2019" >2019</option>
<option value="2020" >2020</option>
<option value="2021" >2021</option>
<option value="2022" >2022</option>
<option value="2023" >2023</option>
<option value="2024" >2024</option>
<option value="2025" >2025</option>
<option value="2026" >2026</option>
<option value="2027" >2027</option>
<option value="2028" >2028</option>
<option value="2029" >2029</option>
<option value="2030" >2030</option>


		</select>
				<p class="guidelines" id="guide_20"><small>Enter the year of Joining the course</small></p>

		</div>

		<li id="li_3" >
		<label class="description" for="phone">Phone Number: </label>
		<div>
			<input id="phone" name="phone" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter phone number"/>
		</div><p class="guidelines" id="guide_3"><small>Enter Your Phone Number</small></p>
		</li>		<li id="li_5" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter Email-Id"/>
		</div><p class="guidelines" id="guide_5"><small>Please enter your Email Id</small></p>
		</li>		<li id="li_11" >
		<label class="description" for="nature">Nature of training: </label>

		<input type="radio" name="nature" value="Internship" required>Internship<br>
		<input type="radio" name="nature" value="In-plant training" required>In-plant training<BR>
		<input type="radio" name="nature" value="Industrial training" required>Industrial training<BR>
		<input type="radio" name="nature" value="Project" required>Project<br>
		<input type="radio" name="nature" value="Any other" required>Any other

		<p class="guidelines" id="guide_11"><small>Tick whichever is applicable</small></p>
		</li>		<li id="li_6" >
		<label class="description" for="natureoforganisation">Nature of the organization: </label>
		<div>
			<input id="natureoforganisation" name="natureoforganisation" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter nature of organisation"/>
		</div>
		</li>		<li id="li_7" >
		<label class="description" for="address">Address of the organization: </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium" required placeholder="Enter the complete address of the organisation,Separate by commas"></textarea>
		</div><p class="guidelines" id="guide_7"><small>Enter your address.Separate by commas</small></p>
		</li>		<li id="li_12" >
		<label class="description" for="fullname">Full name of the Official Addresse: </label>
		<div>
			<input id="fullname" name="fullname" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter name of the official addresse"/>
		</div>
		</li>		<li id="li_13" >
		<label class="description" for="designation">Designation: </label>
		<div>
			<input id="designation" name="designation" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter Designation"/>
		</div>
		</li>		<li id="li_14" >
		<label class="description" for="contact">Contact number </label>
		<div>
			<input id="contact" name="contact" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter contact number"/>
		</div>
		</li>		<li id="li_15" >
		<label class="description" for="emailid">Email ID </label>
		<div>
			<input id="emailid" name="emailid" class="element text medium" type="text" maxlength="255" value="" required placeholder="Enter Email-Id"/>
		</div><p class="guidelines" id="guide_15"><small>Enter Email-Id of the official Addressee</small></p>
		</li>				<li id="li_16" >
		<label class="description" for="start">Start Date </label>
		<input class="text" id="start" name="start" required placeholder="Enter starting Date"/>

		<p class="guidelines" id="guide_16"><small>Enter the starting date of the training</small></p>
		</li>		<li id="li_17" >
		<label class="description" for="end">End Date </label>
		<input class="text"  id="end" name="end" required placeholder="Enter ending date"/>


		<p class="guidelines" id="guide_17"><small>Please enter the end date</small></p>
		</li>

		  <style>
  .conditional_form_part {
    display: none;
  }
  .conditional_form_part_activator:checked + .conditional_form_part {
    display: block;
  }
</style>


    If you want to register the other members of the team,please click here
    <input class="conditional_form_part_activator" type="checkbox">

    <div class="conditional_form_part">

		  <li id="li_35" >
		<label class="description" for="member2">Team member 2</label>
		<div>
			<input id="member2" name="member2" class="element text medium" type="text" maxlength="255" value="" />
		</div><p class="guidelines" id="guide_15"><small>Enter name of the team member</small></p>
		</li>
	    	<li id="li_1.2" >
		<label class="description" for="Gender">Gender: </label>
	<div>
		<input type="radio" name="Gender2" value="Male"  >Male
		<input type="radio" name="Gender2" value="Female" >Female<br>

	</div>

		</li>


		 <li id="li_35" >
		<label class="description" for="member3">Team member 3</label>
		<div>
			<input id="member3" name="member3" class="element text medium" type="text" maxlength="255" value="" />
		</div><p class="guidelines" id="guide_15"><small>Enter name of the team member</small></p>
		</li>

		    	<li id="li_1.2" >
		<label class="description" for="Gender">Gender: </label>
	<div>
		<input type="radio" name="Gender3" value="Male" >Male
		<input type="radio" name="Gender3" value="Female">Female<br>

	</div>

		</li>

		 <li id="li_35" >
		<label class="description" for="member4">Team member 4</label>
		<div>
			<input id="member4" name="member4" class="element text medium" type="text" maxlength="255" value="" />
		</div><p class="guidelines" id="guide_15"><small>Enter name of the team member</small></p>
		</li>
		 
		     	<li id="li_1.2" >
		<label class="description" for="Gender">Gender: </label>
	<div>
		<input type="radio" name="Gender4" value="Male"  >Male
		<input type="radio" name="Gender4" value="Female" >Female<br>

	</div>

		</li>
		
		 <li id="li_35" >
		<label class="description" for="member5">Team member 5</label>
		<div>
			<input id="member5" name="member5" class="element text medium" type="text" maxlength="255" value="" />
		</div><p class="guidelines" id="guide_15"><small>Enter name of the team member</small></p>
		</li>
		 
		     	<li id="li_1.2" >
		<label class="description" for="Gender">Gender: </label>
	<div>
		<input type="radio" name="Gender5" value="Male"  >Male
		<input type="radio" name="Gender5" value="Female" >Female<br>
</li>
	</div>

		
		
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1003621" />

				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>
		<div id="footer">
			Generated by <a href="http://foss.amrita.ac.in/">Joyce George and Foss@Amrita</a>
		</div>
	</div>
	<img id="bottom" src="images/bottom.png" alt="">
	</body>
</html>
