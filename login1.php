<?php
session_start();



$_SESSION['studid'] = $_POST['studid'];
$_SESSION['stname'] = $_POST['stname'];
$studid = $_POST['studid'];
$stname = $_POST['stname'];

include "dbh.php"
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php




$checksql = "SELECT * FROM category WHERE studid = '$studid'";
$tempdata = mysqli_query($con,$checksql);
$result = mysqli_fetch_array($tempdata);

if ($result['studid'] == $studid && $result['stname'] != $stname)
     {
      ?><div class="main">
        <div class="login-box"><form class="form-box"><div class="account">Roll No Or Student Name Is Incorrect!</div><br>

        <a href="load.php" class="reg">Go Back To Student Information Page!</a><?php
        exit();
        
    }

header ("Location: login.php");
?>