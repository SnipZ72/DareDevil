<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$fbid = $_GET['fbid'];
$name = $_GET['name'];
$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

$sql = "SELECT * FROM loginfb";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    if($fbid == $row['fbid']){
		echo "Someone with that Facebook account has already created an account, if you forgot your password fuck off.";
		$sqlI = "";
	}
	else{
		$sqlI = "INSERT INTO loginfb (fbid,ip,regtime,name) VALUES ('$fbid','$ip',$time,'$name')";
	}
  }
}


mysqli_query($conn,$sqlI);



/*
$sqli = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<br>" . $row["text"];
  }
}
*/


?>