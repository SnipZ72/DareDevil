<html>
<link rel="stylesheet" href="style.css">
<title>Dare Devil</title>
<head></head>
<body id="bodypage">

<script type="text/javascript" src="//connect.facebook.net/en_US/sdk.js"></script>
<div id="fb-root"></div>
<script>

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '343499226071421',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
    lol();
  };

  function lol() {
  FB.getLoginStatus(function(response) {
  	if (response.status == 'connected') {
   	 var uid = response.authResponse.userID;
     var urlpic = " http://graph.facebook.com/" + uid + "/picture?type=normal";
     document.getElementById('profilepic').src = urlpic;
  	}
  	if(response.status == "not_authorized") {
  		document.getElementById('bodypage').innerHTML = "You need to give authorization on facebook for this app";
  	}
  	else {
    	alert("not logged in");
  	}
});
}

</script>


<br>
<span class="headBanner"><span class="titleText"><img src="ddLogo.png"><a href="index.php"></a><img id="profilepic"><p id="name"></p></span>
<span class="headBtnLogin"><a href="mytest.php">Login</a></span>
<span class="headBtnSignUp">Sign Up</span>

<?php
/* to fix in case we need sessions outside of facebook
if(!isset($_SESSION['checkcookie']) || $_SESSION['checkcookie'] != 1) {
$nologinbtn = <<<TEXT
<span class="headBtnLogin"><a href="mytest.php">Login</a></span>
<span class="headBtnSignUp">Sign Up</span>
TEXT;
echo $nologinbtn;
}
if(isset($_SESSION['checkcookie']) && $_SESSION['checkcookie'] == 1){
	$logoutbtn = <<<LOGOUT
<span class="headBtnLogin"><a href="logout.php">Logout</a></span>
LOGOUT;
echo $logoutbtn;
echo "<img src='" . "http://graph.facebook.com/" . $_SESSION['fbid'] . "/picture?type=normal'"; 
}
*/
?>

<button id="profilebtn" onclick="window.location.href='profile.php'">Profile</button>
</span>



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
