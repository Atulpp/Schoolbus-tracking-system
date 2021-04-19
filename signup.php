<?php

session_start();
$_SESSION['studid'] = $_POST['studid'];
$_SESSION['stname'] = $_POST['stname'];



$conn = mysqli_connect("localhost", "root", "", "student");

if (!$conn) {
  die("Connection Failed: ".mysqli_connect_error());
}
$studid = $_POST['studid'];
$stname = $_POST['stname'];
$address = $_POST['address'];
$internet = $_POST['internet'];
$medu = $_POST['medu'];
$fedu = $_POST['fedu'];
$fjob = $_POST['fjob'];
$traveltime = $_POST['traveltime'];
$studytime = $_POST['studytime'];
$freetime = $_POST['freetime'];
$activity = $_POST['activity'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];


$sql = "INSERT INTO category (studid,stname, address, internet, medu, fedu ,fjob ,traveltime, studytime, freetime, activity, t1, t2) VALUES ('$studid','$stname', '$address', '$internet', '$medu', '$fedu', '$fjob','$traveltime', '$studytime', '$freetime','$activity', '$t1', '$t2')";

$result = mysqli_query($conn, $sql);



header ("Location: login.php");
?>
     
