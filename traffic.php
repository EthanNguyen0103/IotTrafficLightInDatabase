<?php
ini_set('display_errors', 1); error_reporting(-1);
// doc du lieu tu website gui ve
include("config.php");

$color = $_POST["r"];
$time = $_POST["t"];

$sql = "UPDATE traffic
SET color= $color,time = $time
WHERE stt = 1"; 

if(!mysqli_query($conn,$sql)){
  echo "Error: " ,mysql_error($conn);
}

// ngat ket noi voi database
mysqli_close($conn);
?>