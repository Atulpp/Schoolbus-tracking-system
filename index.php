<?php

session_start();
  
?>
<!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
        function validate() {
          var id = document.login.id
          var pswd = document.login.id
            
          if (id.value == "") {
              alert("Please Enter ID!");
              return false;
          }
         
          
          if (pswd.value == "") {
              alert("Please Enter Password!");
              return false;
          }

          if (isNaN(login.id.value)) {
            alert("Enter A Numeric Value For ID");
            login.id.focus();
            return false;

          }

        }

        </script>
        </head>
        <body>
        
        <h1><center><u>.....FACULTY LOGIN.....</u></center></h1>
          <div class="main">
          <div class="login-box">
          <div class="info">Login into your account!</div>
        <form name="login" action="progress.php" onsubmit="return validate()" method="post" class="form-box">

        <label class="account" for="id">User ID:</label>
        <input type="numeric" style=background-color:white name="id" class="inp" placeholder="ID Number" ><br>

        <label class="account" for="password">Password:</label>
        <input type="password" style=background-color:white name="pswd" class="inp" placeholder="*****"><br><br>

        
        
        <input type="submit" name="submit" value="LOGIN" class="sub-btn"><br><br><br>

      

<a href="newfacultylogin.php" class="reg">Create New Faculty Account?</a><br><br>

<a href="logout.php" class="sub-btn">RESET</a><br><br>

<?php
if (isset($_SESSION['id'])) {
  echo "You Are Already Logged In As ID:".$_SESSION['id'];

} else {
  echo "You Are Not Logged In!";
}


?>

        </form>
        </div>
        </div>
        </body>
        </html>