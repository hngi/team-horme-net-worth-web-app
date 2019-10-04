<?php



	if(isset($_POST['submitted'])){
		
			
		$fullname = $_POST['name'];
		$visitor_email = $_POST['email'];
		$email = "kemierichard@gmail.com";
		$title = $_POST['title'];
		$msg = $_POST['message'];


		if($fullname && $title && $msg){
				$to = $email;
				$subject = $title;

				$message = "
				<html>
				<head>
				<title>Contact Message</title>
				</head>
				<body>
			    FULL NAME: <p>$fullname</p>
			    SITE VISITOR EMAIL: <p>$visitor_email</p>
				TITLE: <p>$title</p>
				MESSAGE: <p>$msg</p>
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
				
			$messageSent = "Thanks for contacting us, we'll get back to you soon...";
				
			}else{
				$messageNotsent = "We could not deliver this email";
			}
		}

	}
?>
