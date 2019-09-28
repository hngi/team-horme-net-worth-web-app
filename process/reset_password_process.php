<?php 

if(isset($_GET["email"]) && isset($_GET["token"])){
	$email = validateFormData($_GET["email"]);
	$token = validateFormData($_GET["token"]);
	
	$sql = "SELECT id FROM signup WHERE email = '$email' AND token ='$token' AND token<>'' AND token_expire > NOW()";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		$token_valid = "this token is valid";
	}else{
		$token_has_expired = "Password reset link expired";
	}
	
}else{
	redirectToLogin();
}

if(isset($_POST["reset_now"])){
	
	
	if(empty($_POST["newpassword"])){
		$send_reset_link_error = "New password required";
	}else{
		$new_password = password_hash(validateFormData($_POST["newpassword"]));
	}
	
	
	if($token_valid && $new_password){
		$sql2 = "UPDATE signup SET token = '$token', token_expire= DATE_ADD(NOW(), INTERVAL 5 MINUTE)
WHERE email = '$email'";
	}
}





?>