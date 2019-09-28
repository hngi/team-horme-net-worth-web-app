<?php 

if(isset($_GET["email"]) && isset($_GET["token"])){
	
	$email = validateFormData($_GET["email"]);
	$token = validateFormData($_GET["token"]);
	
	$sql = "SELECT id FROM signup WHERE email = '$email' AND token ='$token' AND token<>'' AND token_expire > NOW()";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		
		$token_valid = 1;
	}else{
		$token_has_expired = "Password reset link expired or used";
	}
	
}else{
	header("Location: index.php");
}

if(isset($_POST["reset_now"])){
	
	
	if(empty($_POST["newpassword1"])){
		$send_reset_link_error = "New password required";
	}else{
		$new_password = validateFormData($_POST["newpassword"]);
	}
	
		if(empty($_POST["newpassword2"])){
		$send_reset_link_error = "New password required";
	}else{
		$new_password1 = validateFormData($_POST["newpassword"]);
	}
	
	
	if($token_valid && $new_password === $new_password1 && !$send_reset_link_error){
		
			$new_password = password_hash(validateFormData($_POST["newpassword"]));

		$sql2 = "UPDATE signup SET password = '$new_password', token_expire= -1
WHERE email = '$email'";
	}else{
	$token_has_expired = "Password reset link expired or used";

	}
}





?>