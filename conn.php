<?php  

date_default_timezone_set("Asia/Calcutta");

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "restaurant";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}