<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("859994335446-eun6877v30ub85bntq8aq6edtkkrfl56.apps.googleusercontent.com");
	$gClient->setClientSecret("VChmDsp4lyWHOQ72YjZmvp_Q");
	$gClient->setApplicationName("Test Login");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
