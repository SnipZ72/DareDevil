<html>
<link rel="stylesheet" href="style.css">
<title>Dare Devil</title>
<head>DD</head>
<body>
<br><span class="headBanner"><span class="titleText">Dare Devil</span><span class="headBtnLogin">Login</span><span class="headBtnSignUp">Sign Up</span></span>


<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='posts'><br>" . "<div class='posts-text'>" . $row["text"] . "</div>" ."</div>";
	//echo "<button id='".$row['text']."'> ". $row["text"] . "</button>";
	//echo "<button id='test'>test</button>";
	
  }
}

?>

<div class="topdaily">

<img src="ddLogo.png" alt="pic" width="100" height="100"><br>

<span class="topdname">Jason Azevedo</span>

</div>

</body>
</html>
