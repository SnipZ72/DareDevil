<html>
<link rel="stylesheet" href="style.css">
<title>Dare Devil</title>
<head>DD</head>
<body>
<br><span class="headBanner"><span class="titleText">Dare Devil</span><span class="headBtnLogin">Login</span><span class="headBtnSignUp">Sign Up</span></span>


<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-body">
    </div>
  </div>

</div>

<?php

$conn = mysqli_connect("localhost", "root", "root", "dddb");

$sql = "SELECT * FROM post";

$result = mysqli_query($conn, $sql);
$curr = 0;
$currM = 0;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		$curr += 1;
		$currM -= -5;
    echo "<div class='posts'><br>" . "<div class='posts-text'>" . $row["text"] . "</div>" ."</div>";
	echo "<button id='".$curr."'> ". $row["text"] . "</button>";
	//echo "<button id='myBtn'>test</button>";
	
	echo '


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById('.$curr.');

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>';
	
  }
}

?>



<div class="topdaily">

<img src="195478.JPG" alt="pic" width="100" height="100"><br>

<span class="topdname">Jason Azevedo</span>

</div>

</body>
</html>
