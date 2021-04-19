<?php
session_start();
include "dbh.php"
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$id = $_SESSION['id'];
$pswd = $_SESSION['pswd'];

$checksql = "SELECT * FROM enter WHERE id= '$id' AND pswd= '$pswd'";
$tempdata = mysqli_query($con,$checksql);
$result = mysqli_fetch_array($tempdata);

if ($result['id'] != $id AND $result['pswd'] != $pswd)
     {
       session_destroy();?><div class="main">
        <div class="login-box"><form class="form-box"><div class="account">Your ID Or Password Is Incorrect!</div><br>

        <a href="index.php" class="reg">Go Back To Login Page!</a><?php
        exit();

        


    }
    else {

header ("Location: load.php");


    }