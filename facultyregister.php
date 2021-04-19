<?php

session_start();
$id = $_POST['id'];
$facname = $_POST['facname'];
$pswd = $_POST['pswd'];


$conn = mysqli_connect("localhost", "root", "", "student");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}



$sql = "INSERT INTO enter (id,facname,pswd) VALUES ('$id','$facname','$pswd')";

$result = mysqli_query($conn, $sql);


?>
       <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
       
    <link rel="stylesheet" type="text/css" href="style.css">

        </head>

        <body>
<h1><center>FACULTY REGISTRATION</center></h1>
          <div class="main">
  <div class="login-box">
    <div class="info">Successfully Registered!</div>
    <form>
   
      <a href="index.php" class="reg">Go Back To Login Page!</a>
    </form>
  </div>
</div>
        </body>
        </html>
