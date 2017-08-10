<html>
<link rel="stylesheet" href="style.css">
<title>Dare Devil</title>
<head></head>
<body>
<br><span class="headBanner"><span class="titleText"><img src="ddLogo.png"><a href="index.php"></a></img></span><span class="headBtnLogin"><a href="mytest.html">Login</a></span><span class="headBtnSignUp">Sign Up</span></span>




<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);
$curr = 0;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		$curr += 1;
    echo "<div class='posts'><br>" . "<div class='posts-text'><a href='#" . $row["text"] . "'> ".$row['text']."</a></div>" ."</div>";
	//echo "<button id='".$curr."'> ". $row["text"] . "</button>";
	//echo "<button id='myBtn'>test</button>";
	
  }
}

?>



<div class="topdaily">

<img src="195478.JPG" alt="pic" width="100" height="100"><br>

<span class="topdname">Jason Azevedo</span>

</div>

</body>
</html>
