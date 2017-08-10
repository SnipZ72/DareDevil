<html>
<body>
<style>


/* Shared */

.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  padding: 0 15px 0 46px;
  border: none;
  text-align: center;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
  margin:0 auto;
  display:block;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}

.divlog div {
	content:""; 
  background: black; 
  position: absolute; 
  bottom: 0; 
  left: 0; 
    width: 1px;
  border-radius:7px; 
  border-style: solid; 
  background-color: #ADD8E6; 
}

</style>


<div class="divlog">
<p style="text-align:center;">Log in</p>
<button id="loginBtn" class="loginBtn loginBtn--facebook">Login with Facebook</button>
</div>

<div id="response"></div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<script>


function getUserData(rar) {
	FB.api('/me', function(response) {
	var myname = response.name;
		document.getElementById('response').innerHTML = 'Hello ' + response.name;
		getfbload(rar, myname);
	});
}
 
 
 function getfbload(rar, myname){
 location.replace("loginfb.php?fbid=" + rar + "&name=" + myname);
 }
 
window.fbAsyncInit = function() {
	//SDK loaded, initialize it
	FB.init({
		appId      : '343499226071421',
		xfbml      : true,
		version    : 'v2.10'
	});
 
	//check user session and refresh it
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			//user is authorized
			document.getElementById('loginBtn').style.display = 'none';
			//window.location.replace("loginfb.php?fbid=" + response.authResponse.userID + "&name=" + response.name);
			getUserData(response.authResponse.userID);
		} else {
			//user is not authorized
		}
	});
};
 
//load the JavaScript SDK
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.com/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
//add event listener to login button
document.getElementById('loginBtn').addEventListener('click', function() {
	//do the login
	FB.login(function(response) {
		if (response.authResponse) {
			//user just authorized your app
			document.getElementById('loginBtn').style.display = 'none';
			//window.location.replace("loginfb.php?fbid=" + response.authResponse.userID + "&name=" + response.name);
			getUserData(response.authResponse.userID);
		}
	}, {scope: 'email,public_profile', return_scopes: true});
}, false);
 
</script>

<?php


?>

</body>
</html>