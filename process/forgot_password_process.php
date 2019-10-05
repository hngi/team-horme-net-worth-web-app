<?php
include("process/functions.php");

if(isset($_POST["send_link"])){
	
	if(empty($_POST["sendemail"])){
		$send_reset_link_error = "email required";
	}else{
		$email = validateFormData($_POST["sendemail"]);
	}
	

		
	$sql1 = "SELECT * FROM signup WHERE email = '$email'";
	
	$result = mysqli_query($conn, $sql1);

	if(mysqli_num_rows($result) > 0){
		
		$token = mytoken();
		
$sql2 = "UPDATE signup SET token = '$token', token_expire= DATE_ADD(NOW(), INTERVAL 5 MINUTE)
WHERE email = '$email'";
		
		$result2 = mysqli_query($conn, $sql2);
		
		if($result2){
				$to = $email;
				$subject = "Reset Your Password";

				$message = "
				<html>
				<head>
				<title>Reset Password</title>
				</head>
				<body>
				To reset your password please click on the link below and use this code <strong>  $token</strong><br>
					<em>Please note that this password reset link will expire in the next 5mins</em><br>
				
				<a href='http://hngteamhorme.diaticine.com/createpassword.php'>http://hngteamhorme.diaticine.com/createpassword.php</a><br>
				
			
				<p>Regards,</p>
				<strong>Darellwest</strong><br>
				<strong><em>From Team Horme</em></strong>
				</body>
				</html>
				";

			// content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <darell@hngteamhorme.diaticine.com>' . "\r\n";
			$headers .= 'Cc: ewere.njoagwu@gmail.com' . "\r\n";

			if(mail($to,$subject,$message,$headers)){
				
			$success = "Please check your email for the password reset code and link";
				
			}else{
				$success = "There is a problem sending you email";
			}
		}
		
		
		
	}else{
		$send_reset_link_error = "this email does not exist in our database";
	}
 
  
	
	
}

?>