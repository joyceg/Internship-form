function validateForm() {
  //to check name
    var x = document.myForm.name.value;
    var ideal = /^[A-Z a-z ]{3,30}$/;

    if (x == null || x == '' || (ideal.test(x)==false))
      {  alert("Enter a valid name");
        document.myForm.name.focus();
				return false;
			}
      //to check gender
      var x = document.myForm.Gender.value;
      if (x == null || x == '')
        {  alert("Select Gender");
        window.location = "#regsiter"
          return false;
        }


        //to validate enrollment number
        var x = document.myForm.enrollment.value;
        if (x == null || x == '')
          {  alert("Enter a valid enrollment number.  Eg-AM.EN.U4CSE13128");
            document.myForm.enrollment.focus();
            return false;
          }
          //to validate school
          var x = document.myForm.school.value;
          if (x == null || x == '')
            {  alert("Select School");
              //document.myForm.school.focus();
              window.location = "#regsiter"
              return false;
            }
          //to validate course
          var x = document.myForm.course.value;
          if (x == null || x == '')
            {  alert("Select a valid course");
              document.myForm.course.focus();
              return false;
            }
            //to validate specialization
            var x = document.myForm.specialization.value;
            if (x == null || x == '')
              {  alert("Select a valid specialization");
                document.myForm.specialization.focus();
                return false;
              }
              //to validate semester
              var x = document.myForm.semester.value;
              if (x == null || x == '')
                {  alert("Select a valid semester");
                  document.myForm.semester.focus();
                  return false;
                }
                //to validate batch
                var x = document.myForm.batch.value;
                if (x == null || x == '')
                  {  alert("Select a valid batch");
                    document.myForm.batch.focus();
                    return false;
                  }
          //to check phone number
          var x = document.myForm.phone.value;
          var ideal_phone= /^\d{10,12}$/;;
          if (x == null || x == ''||(ideal_phone.test(x)==false))
            {  alert("Enter a valid phone number");
              document.myForm.phone.focus();
              return false;
            }

            //to check email
            var emailID = document.myForm.email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");

        if (emailID==null ||(emailID=='')||atpos < 1 || ( dotpos - atpos < 2 ))
        {
           alert("Please enter valid email ID")
           document.myForm.email.focus() ;
           return false;
        }
        //to validate nature of training
        var x = document.myForm.nature.value;
        if (x == null || x == '')
          {  alert("Select a nature of organization");
          window.location = "#regsiter"
            return false;
          }
        //to check name of organisation
        var x = document.myForm.nameoforganisation.value;
        var ideal = /^[A-Z a-z ]{3,30}$/;
        if (x == null || x == '' || (ideal.test(x)==false))
          {  alert("Enter a valid organisation name");
            document.myForm.nameoforganisation.focus();
            return false;
          }
          //to check address of organisation
            var x = document.myForm.address.value;
            var ideal = /^[A-Z a-z ]{3,30}$/;

            if (x == null || x == '' )
              {  alert("Enter a valid address");
                document.myForm.address.focus();
                return false;
              }
          //to check full name of official addresse
          var x = document.myForm.fullname.value;
          var ideal = /^[A-Z a-z ]{3,30}$/;

          if (x == null || x == '' || (ideal.test(x)==false))
            {  alert("Enter a valid name of the official addresse");
              document.myForm.fullname.focus();
              return false;
            }
            //to check designation of addresse
            var x = document.myForm.designation.value;
            if (x == null || x == '' )
              {  alert("Enter a valid designation");
                document.myForm.designation.focus();
                return false;
              }
            //to check contact number of official addresse

            var x = document.myForm.phone.value;
            var ideal_phone= /^\d{10,12}$/;
            if(x!=null || (x!==''))
                      { if ((ideal_phone.test(x)==false))
                        {  alert("Enter a valid phone number");
                          document.myForm.phone.focus();
                          return false;
                        }
                      }

                      //to check email of officail addrese
                      var emailID = document.myForm.emailid.value;
                  atpos = emailID.indexOf("@");
                  dotpos = emailID.lastIndexOf(".");
                  if(emailID !='')
                {  if (atpos < 1 || ( dotpos - atpos < 2 ))
                      {      {
                             alert("Please enter valid email ID")
                             document.myForm.emailid.focus() ;
                             return false;
                          }
                        }
                      }

                        //to check start date
                        var x = document.myForm.start.value;
                        var y = document.myForm.start.value;
                        if (x == null || (x == '') )
                          {  alert("Enter a valid starting date");
                            document.myForm.start.focus();
                            return false;
                          }
                          //to check end date
                          var x = document.myForm.end.value;
                          if (x == null || (x == '') )
                            {  alert("Enter a valid ending date");
                              document.myForm.end.focus();
                              return false;
                            }
                            if(y>x){ alert("Enter valid starting and  ending date of the internship");
                              document.myForm.start.focus();
                              return false;
                          }
}
