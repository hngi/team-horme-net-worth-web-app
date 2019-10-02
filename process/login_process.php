<?php 

require("../process/connection.php");

$form_email_error = $form_password_error ="";
$login_email = $login_password ="";

//Check for login session of user
if(isset($_SESSION["calcuser"])){
	echo "ALREADY_LOGGED_IN";
	return;
}

if(isset($_POST["loginapp"])){
	
	function validateForm($info){
	$info = trim($info);
	$info = stripslashes($info);
	$info = htmlspecialchars($info);
	$info = strip_tags($info);
	
	return $info;
	}
	
	
	$login_email = validateForm($_POST["loginemail"]);
	$login_password = validateForm($_POST["loginpassword"]);
	
	$query7 = "SELECT * FROM signup WHERE email = '$login_email'";
	$result7 = mysqli_query($conn, $query7);
	
	if(mysqli_num_rows($result7) > 0){		
		while($rows = mysqli_fetch_assoc($result7)){
			$user = $rows['first_name'];
			$hashed_password = $rows['password'];
		}
		
		if(password_verify($login_password, $hashed_password)){
			session_start();
			$_SESSION['calcuser'] = $user;
			//header('Location: calc.php');
			echo 'LOG_IN';
		}else{

			$form_password_error = "wrong password";
		}
		
	}else{
				
		$form_email_error = "wrong email";
	}
	
			
}
?>