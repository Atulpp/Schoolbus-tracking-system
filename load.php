<?php

session_start();

// if (isset($_SESSION['id'])=="") {
 
//   header ("Location: index.php");

// }
  
?>

<!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Student Info Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
        function validate() {
            var zx = document.forms["login"]["studid"].value;
          if (zx == "") {
              alert("Please Enter Roll No!");
              return false;
          }
         
           var zxy = document.forms["login"]["stname"].value;
          
          if (zxy == "") {
              alert("Please Enter Student Name!");
              return false;
          }

          if (isNaN(login.studid.value)) {
            alert("Enter A Numeric Value For Roll No");
            login.studid.focus();
            return false;

          }



        }

        </script>
        </head>
        <body>
        
        <h1><center><u>...STUDENT INFORMATION...</u></center></h1>
          <div class="main">
          <div class="login-box">
          <!--<div class="info">Login into your account!</div>-->
        <form name="login" action="login1.php" onsubmit="return validate()" method="post" class="form-box">

        <label class="account" for="roll no">Roll No:</label>
        <input type="numeric" style=background-color:white name="studid" class="inp" placeholder="Roll no" ><br>

        <label class="account" for="stname">Student Name:</label>
        <input type="text" style=background-color:white name="stname" class="inp" placeholder="Name" ><br><br>
        
        <input type="submit" name="submit" value="VIEW DETAILS" class="sub-btn"><br><br>
        <!--<div class="account">Don't have an Account?</div><br>-->
        <a href="register.php" class="reg">REGISTER NEW STUDENT</a><br><br>

        <a href="logout.php" class="sub-btn">LOGOUT</a>
        </form>


        </div>
        </div>
        </body>
        </html>