<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$conn = mysqli_connect("localhost", "root", "root", "dddb");

$fbid = $_GET['fbid'];
$name = $_GET['name'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

$fbid = mysqli_real_escape_string ( $conn , $fbid );
$name = mysqli_real_escape_string ( $conn , $name );

$_SESSION['fbid'] = $fbid;
$_SESSION['name'] = $name;
$_SESSION['checkcookie'] = 1;

if(!isset($fbid) || !isset($name)) {
	echo "a var is not set";
}

//$sql = "SELECT fbid FROM loginfb WHERE fbid=$fbid";
$sql = "SELECT fbid FROM loginfb WHERE fbid='".$fbid."'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) == 0) {
	//$sqlinsert = "INSERT INTO loginfb (fbid,ip,regtime,name) VALUES ('".$fbid."','".$ip."',".$time.",'".$name."'";
	$sqlinsert = "INSERT INTO loginfb (fbid, ip, regtime, name) VALUES ('".$fbid."', '".$ip."', ".$time.", '".$name."')";
	//insert into loginfb (fbid, ip, regtime,name) VALUES ("asd", "ip", 0, "NAME")
	mysqli_query($conn,$sqlinsert);
	echo "<script>window.location.replace('index.php');</script>";
}else{
echo "<script>window.location.replace('index.php');</script>";	
}
?>