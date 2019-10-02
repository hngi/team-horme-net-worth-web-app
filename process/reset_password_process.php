<?php 

include("functions.php");



if(isset($_POST["resetnow"])){
    

	if(empty($_POST["tokencode"])){
		$token_code_error = "Please input a valid password reset code";
	}else{
		$token_code = validateFormData($_POST["tokencode"]);
	}
	
		if(empty($_POST["newpassword"])){
		$new_password_error = "New password required";
	}else{
		$new_password = validateFormData($_POST["newpassword"]);
	}

    if($token_code && $new_password){
    $sql9 = "SELECT * FROM signup WHERE token = '$token_code' AND token_expire > NOW() AND token <>''";
    
    	$result9 = mysqli_query($conn, $sql9);
    	
    	  if(mysqli_num_rows($result9) > 0){
        
		
			$update_password = password_hash(validateFormData($_POST["newpassword"]), PASSWORD_DEFAULT);
			
		

		$sql2 ="UPDATE signup SET password = '$update_password', token_expire= NOW() WHERE token = '$token_code'";

        $result2 = mysqli_query($conn, $sql2);
        
        if($result2){
            $success = "Password updated successfully!";
        }
        
        
	
}else{
    $failure = "Sorry code expired or used";
}
    	
    	
    }
	

}





?>