<?php

$con = mysqli_connect("localhost", "root", "","student");

if (!$con) {
    die("Connection Failed: ".mysql_error());
}
