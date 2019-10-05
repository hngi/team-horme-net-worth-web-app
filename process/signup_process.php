<?php
$first_name = $last_name = $email = $password = $checked = $confirm_password = "";
$first_name_check = $last_name_check = $email_check = $password_check = $confirm_password_check = $unchecked = "";
$first_name_error = $last_name_error = $email_error = $password_error = $confirm_password_error =""; 

require("connection.php");


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
		
		if(isset($_POST["check"]) && $_POST["check"] !==""){
			$checked = validateFormData($_POST["check"]);
		}else{
			$unchecked = "Check the box to agree to our terms to use this app";
			echo $unchecked;
		}
	
		//checking the firstname format
		if(!preg_match("/^[A-Za-z]+$/", $first_name_check) && $first_name_check){
			$first_name_error = "Only aphabets allowed";
			echo $first_name_error;
		} else if(empty($first_name_check)){
		$first_name_error = "Empty first name not allowed";
	}else{
		$first_name = validateFormData($_POST["firstname"]);
	}
	
	if(strlen($first_name) < 3){
	    $first_name_error = "Only 3 and above aphabets are allowed";
	}
	
		//checking the last name format
		if(!preg_match("/^[A-Za-z]+$/", $last_name_check) && $last_name_check){
			$last_name_error = "Only alphabets allowed";
			echo $last_name_error;
		} else if(empty($last_name_check)){
		$last_name_error = "Empty last name not allowed";
	}else{
		$last_name = validateFormData($_POST["lastname"]);
	}
	
	
	if(strlen($last_name) < 3){
	    $last_name_error = "Only 3 and above aphabets are allowed";
	}
	
	 if (empty($_POST["email"])) {
    $email_error= "Email is required";
  } else {
    $email_contain = validateFormData($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email_contain, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format"; 
    }else{
        $email = validateFormData($_POST["email"]);
    }
  }
	
	
	
		 
//     	// checking if it is a valid email
//     	if(!filter_var($email_check, FILTER_VALIDATE_EMAIL)) {
//       		$email_error = "Invalid email format"; 
//     	}if(empty($email_check)) {
//     	$email_error = "Email is required";
//     }else {
// 		 $email = validateFormData($_POST["email"]);
//   	}
	
	if($confirm_password_check !== $password_check){
		$confirm_password_error = "password does not match";
		$password_error = "password does not match";
	}
	
	
	if(empty($_POST["password"])){
		$password_error = "You can't leave this field empty";
	}else{
		$password = password_hash( validateFormData($_POST['password']), PASSWORD_DEFAULT );
	}
	
	
	if(strlen($password_check) < 3){
	    $password_error = "Only 3 and above characters are allowed";
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
		echo $email_error;		
	}
	
	
		if($checked && $password_check === $confirm_password_check && $email && $first_name && $last_name && mysqli_num_rows($result2) < 1 && !$last_name_error && !$first_name_error && !$password_error){
		$query = "INSERT INTO signup (id, first_name, last_name, email, password, signup_date
)
		
				   VALUES (NULL, '$first_name', '$last_name', '$email', '$password',  CURRENT_TIMESTAMP)";
			
			
		
		if(mysqli_query($conn, $query)){
			session_start();
			$_SESSION['calcuser'] = $first_name;
			echo 'REGD_SUCCESS';
			//header("Location: calc.php");
		}else{
			
		echo "Error:" . $query . "<br>" .mysqli_error($conn);

		}
	}
	

}else {
	echo 'Error with request. Try again';
}



//LOGIN PROCESS
	
mysqli_close($conn);
 

?>