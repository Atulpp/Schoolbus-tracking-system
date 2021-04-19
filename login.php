<?php
session_start();

$studid = $_SESSION['studid'];
$stname = $_SESSION['stname'];

include "dbh.php"
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php


$checksql = "SELECT * FROM category WHERE studid= '$studid'";
$tempdata = mysqli_query($con,$checksql);
$result = mysqli_fetch_array($tempdata);


if ($result['studid'] == $studid && $result['stname'] != $stname)
     {
      ?><div class="main">
        <div class="login-box"><form class="form-box"><div class="account">This Roll No Already Exist!</div><br>

        <a href="load.php" class="reg">Go Back To Student Information Page!</a><?php
        exit();
        
    }


 else {       

$sql = "SELECT * FROM category WHERE studid = '$studid' AND stname = '$stname'";

$myData = mysqli_query($con,$sql);

echo "<center><table border=3>
<tr>
<th>Roll No</th>
<th>Student Name</th>
<th>Address</th>
<th>Internet Access</th>
<th>Mother Education</th>
<th>Father Education</th>
<th>Fathers Job</th>
<th>Travel Time</th>
<th>Study Time</th>
<th>Free Time</th>
<th>Extra Activities</th>
<th>Test 1</th>
<th>Test 2</th>
</tr>";


$record1 ;
while($record = mysqli_fetch_array($myData)) {
echo "<tr>";
echo "<td>" . $record['studid'] . "</td>";

echo "<td>" . $record['stname'] . "</td>";

if($record['address']=="u" || $record['address']=="U") {echo "<td>Urban</td>"; }
    else {echo "<td>Rural</td>";}

if($record['internet']=="1") {echo "<td>Yes</td>"; }
    else {echo "<td>No</td>";}

if($record['medu']=="0") {echo "<td>Non Educated</td>"; }
    else if($record['medu']=="1") {echo "<td>Primary</td>"; }
    else if($record['medu']=="2") {echo "<td>4th Grade</td>"; }
    else if($record['medu']=="3") {echo "<td>5th-9th Grade</td>"; }
    else if($record['medu']=="4") {echo "<td>Secondary Education</td>"; }
    else if($record['medu']=="5") {echo "<td>Higher Education</td>"; }

if($record['fedu']=="0") {echo "<td>Non Educated</td>"; }
    else if($record['fedu']=="1") {echo "<td>Primary</td>"; }
    else if($record['fedu']=="2") {echo "<td>4th Grade</td>"; }
    else if($record['fedu']=="3") {echo "<td>5th-9th Grade</td>"; }
    else if($record['fedu']=="4") {echo "<td>Secondary Education</td>"; }
    else if($record['fedu']=="5") {echo "<td>Higher Education</td>"; }

    echo "<td>" . $record['fjob'] . "</td>";

if($record['traveltime']=="0") {echo "<td>15 Mins</td>"; }
    else if($record['traveltime']=="1") {echo "<td>15-3o Mins</td>"; }
    else if($record['traveltime']=="2") {echo "<td>30mins-1hr</td>"; }
    else if($record['traveltime']=="3") {echo "<td>1hr-1:30hr</td>"; }
    else if($record['traveltime']=="4") {echo "<td>1:30hr-2hr</td>"; }
    else if($record['traveltime']=="5") {echo "<td>more then 2hr</td>"; }

if($record['studytime']=="0") {echo "<td>15 Mins</td>"; }
    else if($record['studytime']=="1") {echo "<td>15-3o Mins</td>"; }
    else if($record['studytime']=="2") {echo "<td>30mins-1hr</td>"; }
    else if($record['studytime']=="3") {echo "<td>1hr-1:30hr</td>"; }
    else if($record['studytime']=="4") {echo "<td>1:30hr-2hr</td>"; }
    else if($record['studytime']=="5") {echo "<td>more then 2hr</td>"; }


if($record['freetime']=="0") {echo "<td>15 Mins</td>"; }
    else if($record['freetime']=="1") {echo "<td>15-3o Mins</td>"; }
    else if($record['freetime']=="2") {echo "<td>30mins-1hr</td>"; }
    else if($record['freetime']=="3") {echo "<td>1hr-1:30hr</td>"; }
    else if($record['freetime']=="4") {echo "<td>1:30hr-2hr</td>"; }
    else if($record['freetime']=="5") {echo "<td>more then 2hr</td>"; }


if($record['activity']=="1") {echo "<td>Yes</td>"; }
     else {echo "<td>No</td>";}

    echo "<td>" . $record['t1'] . " marks</td>";
    echo "<td>" . $record['t2'] . " marks</td>";

    echo "</tr>";

$record1 = $record;
}
echo "</table></center>";
}
?>
<div class="main">
  <div class="logout-box">
<form class="form-box1">
<a href="load.php" class="reg">Display Another Student Information?</a>

<?php
/////
//include "states.php"
//echo $record1['traveltime'];
//all if else statement

//tt 0 st 5
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 100%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 99%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 98%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 97%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 96%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 95%</h1>";
exit();}

//tt0 st 4
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 94%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 93%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 92%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 91%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 90%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 89%</h1>";
exit();}
//tt0 st 3
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 88%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 87%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 86%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 85%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 84%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 83%</h1>";
exit();}
//tt0 st 2
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 82%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 81%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 80%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 79%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 78%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 77%</h1>";
exit();}
//tt0 st1
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 76%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 75%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 74%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 73%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 72%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 71%</h1>";
exit();}
//tt0 st0
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 69%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 67%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 65%</h1>";
exit();}
//////////////////////////////////////////////////////////
//tt 1

if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 90%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 89%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 88%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 87%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 86%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 85%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 84%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 83%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 82%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 81%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 80%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 79%</h1>";
exit();}



if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 78%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 77%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 76%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 75%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 74%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 73%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 72%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 71%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 69%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 67%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 65%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 64%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 63%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 62%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 61%</h1>";
exit();}



if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 55%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 2

if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 80%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 79%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 78%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 77%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 76%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 75%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 74%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 73%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 72%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 71%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 69%</h1>";
exit();}



if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 67%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 65%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 64%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 63%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 62%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 61%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 57%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 55%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 53%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 51%</h1>";
exit();}



if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 45%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 3

if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 69%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 67%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 65%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 64%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 63%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 62%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 61%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 59%</h1>";
exit();}



if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 55%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 53%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 47%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 43%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 41%</h1>";
exit();}



if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 37%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 35%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 4

if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 55%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 53%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 49%</h1>";
exit();}



if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 43%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 41%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 37%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 35%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 33%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 31%</h1>";
exit();}



if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 29%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 27%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 25%</h1>";
exit();}

//////////////////////////////////////////////////////////////
//tt 5

if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 45%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 43%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 41%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 39%</h1>";
exit();}



if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 37%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 35%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 33%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 31%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 29%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 27%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 25%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 24%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 23%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 22%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 21%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 20%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 19%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 18%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 17%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 16%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=10 && $record1['t2']>=10) {
echo "<h1>Passing Probability 15%</h1>";
exit();}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// for <10

//tt 0 st 5
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 80%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 79%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 78%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 77%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 76%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 75%</h1>";
exit();}

//tt0 st 4
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 74%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 73%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 72%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 71%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 69%</h1>";
exit();}
//tt0 st 3
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 67%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 65%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 64%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 63%</h1>";
exit();}
//tt0 st 2
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 62%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 61%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
//tt0 st1
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 55%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 53%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
//tt0 st0
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==0 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
//////////////////////////////////////////////////////////
//tt 1

if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 70%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 69%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 68%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 67%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 66%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 65%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 64%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 63%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 62%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 61%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 59%</h1>";
exit();}



if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 55%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 53%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 47%</h1>";
exit();}


if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 43%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 41%</h1>";
exit();}



if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 37%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==1 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 35%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 2

if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 55%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 53%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 49%</h1>";
exit();}



if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 43%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 41%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 37%</h1>";
exit();}


if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 35%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 33%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 31%</h1>";
exit();}



if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 29%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 27%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==2 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 25%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 3

if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 60%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 59%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 58%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 57%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 56%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 55%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 54%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 53%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 52%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 51%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 49%</h1>";
exit();}



if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 45%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 43%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 41%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 37%</h1>";
exit();}


if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 35%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 33%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 31%</h1>";
exit();}



if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 29%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 27%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==3 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 25%</h1>";
exit();}

//////////////////////////////////////////////////////////////

//tt 4

if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 50%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 49%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 48%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 47%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 46%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 45%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 44%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 43%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 42%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 41%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 39%</h1>";
exit();}



if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 37%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 35%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 33%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 31%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 29%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 27%</h1>";
exit();}


if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 25%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 24%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 23%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 22%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 21%</h1>";
exit();}



if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 20%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 19%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 18%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 17%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 16%</h1>";
exit();}
if ($record1['traveltime']==4 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 15%</h1>";
exit();}

//////////////////////////////////////////////////////////////
//tt 5

if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 40%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 39%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 38%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 37%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 36%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==5 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 35%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 34%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 33%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 32%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 31%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 30%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==4 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 29%</h1>";
exit();}



if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 28%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 27%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 26%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 25%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 24%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==3 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 23%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 22%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 21%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 20%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 19%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 18%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==2 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 17%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 16%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 15%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 14%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 13%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 12%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==1 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 11%</h1>";
exit();}


if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==5 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 10%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==4 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 9%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==3 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 8%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==2 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 7%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==1 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 6%</h1>";
exit();}
if ($record1['traveltime']==5 && $record1['studytime']==0 && $record1['freetime']==0 && $record1['t1']>=0 && $record1['t2']>=0) {
echo "<h1>Passing Probability 5%</h1>";
///
}

//////////////////////////////////////////////////////////////

?>


     
      
      </div>
    </form>

</body>

</html>