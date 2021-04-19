<?php

session_start();

if (isset($_SESSION['id'])=="") {
 
  header ("Location: index.php");

}
  
?>

<!DOCTYPE html>
      <html>
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Register Page</title>
      <link rel="stylesheet" type="text/css" href="style.css">

      <script>

function validate() {

          var studid = document.register.studid;
          var address = document.register.address;
          var internet = document.register.internet;
          var medu = document.register.medu;
          var fedu = document.register.fedu;
          var fjob = document.register.fjob;
          var traveltime = document.register.traveltime;
          var studytime = document.register.studytime;
          var freetime = document.register.freetime;
          var activity = document.register.activity;
          var t1 = document.register.t1;
          var t2 = document.register.t2;

          if(studid.value == "") {
            alert("Please Enter Roll No!");
            studid.focus();
            return false;
          }

            if (isNaN(register.studid.value)) {
            alert("Enter A Numeric Value For Roll No!");
            register.studid.focus();
            return false;

          }

           if(address.value != "u" && address.value != "r"  && address.value != "U" && address.value != "R") {
            alert("Please Enter Address as U-urban or R-rural");
            address.focus();
            return false;
      }

      if(internet.value != "0" && internet.value != "1") {
            alert("Please Enter Internet Availability as 0-No or 1-Yes");
            internet.focus();
            return false;
      }

      if(medu.value != "0" && medu.value != "1"  && medu.value != "2" && medu.value != "3" && medu.value != "4" && medu.value != "5") {
            alert("Please Enter Mother's Education value between 0 to 5");
            medu.focus();
            return false;
      }

      if(fedu.value != "0" && fedu.value != "1"  && fedu.value != "2" && fedu.value != "3" && fedu.value != "4" && fedu.value != "5") {
            alert("Please Enter Father's Education value between 0 to 5");
            fedu.focus();
            return false;
      }

      if(traveltime.value != "0" && traveltime.value != "1"  && traveltime.value != "2" && traveltime.value != "3" && traveltime.value != "4" && traveltime.value != "5") {
            alert("Please Enter Travel Time  value between 0 to 5");
            traveltime.focus();
            return false;
      }

      if(studytime.value != "0" && studytime.value != "1"  && studytime.value != "2" && studytime.value != "3" && studytime.value != "4" && studytime.value != "5") {
            alert("Please Enter Study Time value between 0 to 5");
            studytime.focus();
            return false;
      }

      if(freetime.value != "0" && freetime.value != "1"  && freetime.value != "2" && freetime.value != "3" && freetime.value != "4" && freetime.value != "5") {
            alert("Please Enter Free Time value between 0 to 5");
            freetime.focus();
            return false;
      }

      if(activity.value != "0" && activity.value != "1") {
            alert("Please Enter Extra Activities as 0-No or 1-Yes");
            activity.focus();
            return false;
      }


      

      }
</script>

      </head>
      <body>
      <h1><center>REGISTRATION</center></h1>
      <div class="main">
      <div class="registerlogin-box">
      <div class="registerinfo">Enter Details Of Student!</div>
      <form action="signup.php" name="register" onsubmit="return validate()" method="post" class="form-box">


      <label class="account" for="studid">Student Roll No:*</label>
      <input type="numeric" style=background-color:white  name="studid" class="inp" placeholder="Roll No" required>


      <label class="account" for="stname">Student Name:*</label>
      <input type="text" style=background-color:white  name="stname" class="inp" placeholder="Name" required>

      <label class="account" for="address">Address:*</label>
      <input type="text" style=background-color:white  name="address" class="inp" placeholder="U/R" required><br>

      <label class="account" for="internet">Internet Access:*</label>
      <input type="text" style=background-color:white  name="internet" class="inp" placeholder="0-No/1-Yes" required><br>

      <label class="account" for="medu">Mother's Education:*</label>
      <input type="text" style=background-color:white  name="medu" class="inp" placeholder="0-5" required><br>

      <label class="account" for="fedu">Father's Education:*</label>
      <input type="text"  style=background-color:white name="fedu" class="inp" placeholder="0-5" required><br>

      <label class="account" for="fjob">Father's Job:*</label>
      <input type="text"  style=background-color:white name="fjob" class="inp" placeholder="Job" required><br>

      <label class="account" for="traveltime">Travel Time:*</label>
      <input type="text"  style=background-color:white name="traveltime" class="inp" placeholder="0-5" required><br>

      <label class="account" for="studytime">Study Time:*</label>
      <input type="text"  style=background-color:white name="studytime" class="inp" placeholder="0-5" required><br>

      <label class="account" for="freetime">Free Time:*</label>
      <input type="text"  style=background-color:white name="freetime" class="inp" placeholder="0-5" required><br>

      <label class="account" for="activity">Extra Activities:*</label>
      <input type="text" style=background-color:white  name="activity" class="inp" placeholder="0-No/1-Yes" required><br>

      <label class="account" for="t1">Marks In Test 1:*</label>
      <input type="text" style=background-color:white  name="t1" class="inp" placeholder="Out Of 20" required><br>

      <label class="account" for="t2">Marks In Test 2:*</label>
      <input type="text" style=background-color:white  name="t2" class="inp" placeholder="Out Of 20" required><br><br>

      <input type="submit" name="submit" value="Submit" class="sub-btn"><br>


      
      </form>
      </div>
      </div>
      </body>
      </html>