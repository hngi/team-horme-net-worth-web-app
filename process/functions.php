<?php

	function validateFormData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	
	return $data;
}

function mytoken($len = 10){
	$token = "k346vbmzx5780f01asdkhlkiutyroepwqplkjhgfds36vxmc";
	$token = str_shuffle($token);
	$token = substr($token, 0, $len);
	
	return $token;
}


function redirectToPass(){
	header("Location: forgotpassword.php");
	exit();
}


function redirectToLogin(){
	header("Location: login.php");
	exit();
}


?>