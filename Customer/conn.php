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
function input($key) {
	global $_REQUEST;
	if(isset($_REQUEST[$key]) && $_REQUEST[$key] && trim($_REQUEST[$key])!=""){
		return trim($_REQUEST[$key]);
	}
	return null;
	
}
?>