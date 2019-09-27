<?php


//SIGN UP PROCESS
if(isset($_POST["sign_up"])){
	
	function validateFormData($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	
	return $data;
}
	
		$first_name_check = validateFormData($_POST["firstname"]);
		$last_name_check = validateFormData($_POST["lastname"]);
		$email_check = validateFormData($_POST["email"]);
		$password_check = validateFormData($_POST["password"]);
		$confirm_password_check = validateFormData($_POST["confirmpassword"]);
		
	
		//checking the firstname format
		if(!preg_match("/^[A-Za-z]+$/", $first_name_check) && $first_name_check){
			$first_name_error = "Alphabets only for first name";
		} else if(empty($first_name_check)){
		$first_name_error = "Empty first name not allowed";
	}else{
		$first_name = validateFormData($_POST["firstname"]);
	}
	
	
		//checking the last name format
		if(!preg_match("/^[A-Za-z]+$/", $last_name_check) && $last_name_check){
			$last_name_error = "alphabets only for last name";
		} else if(empty($last_name_check)){
		$last_name_error = "Empty last name not allowed";
	}else{
		$last_name = validateFormData($_POST["lastname"]);
	}
	
		 
    	// checking if it is a valid email
    	if(!filter_var($email_check, FILTER_VALIDATE_EMAIL) && $email_check) {
      		$email_error = "Invalid email format"; 
    	}if(empty($email_check)) {
    	$email_error = "Email is required";
    }else {
		 $email = validateFormData($_POST["email"]);
  	}
	
	if($confirm_password_check !== $password_check){
		$confirm_password_error = "password does not match";
		$password_error = "password does not match";
	}
	
	
	if(empty($_POST["password"])){
		$password_error = "You can't leave this field empty";
	}else{
		$password = password_hash( validateFormData($_POST['password']), PASSWORD_DEFAULT );
	}
	
	if(empty($_POST["confirmpassword"])){
		$confirm_password_error = "You can't leave this field empty";
	}else{
		$confirm_password = password_hash( validateFormData($_POST['confirmpassword']), PASSWORD_DEFAULT );
	}
	

	$query2 = "SELECT * FROM signup WHERE email = '$email'";
	
	$result2 = mysqli_query($conn, $query2);
	
	if(mysqli_num_rows($result2) > 0){
		$email_error = "This email has been taken";		
	}
	
	
		if($password_check === $confirm_password_check && $email && $first_name && $last_name && mysqli_num_rows($result2) < 1){
		$query = "INSERT INTO signup (id, first_name, last_name, email, password, signup_date)
					VALUES (NULL, '$first_name', '$last_name', '$email', '$password',  CURRENT_TIMESTAMP)";
			
			
		
		if(mysqli_query($conn, $query)){
			session_start();
			$_SESSION['calcuser'] = $first_name;
			header("Location: calc.php");
		}else{
			
		echo "Errror:" . $query . "<br>" .mysqli_error($conn);

		}
	}
	

}
//LOGIN PROCESS
	
mysqli_close($conn);
 

?>




























































