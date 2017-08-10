<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$fbid = $_GET['fbid'];
$name = $_GET['name'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

$sql = "SELECT fbid FROM loginfb WHERE fbid=$fbid";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) == 0) {
	$sqlinsert = "INSERT INTO loginfb (fbid,ip,regtime,name) VALUES ('$fbid','$ip',$time,'$name')";
}

mysqli_query($conn,$sqlinsert);

?>