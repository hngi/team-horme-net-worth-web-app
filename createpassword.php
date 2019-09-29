<?php
include("process/connection.php");

include("process/reset_password_process.php");
 ?>


<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create Password page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <br>
    <style type="text/css">
    /* styled using Bootstrap 4 and Max CDN */
        body {
            height: 100%;
            background: #ffffff;
        }
        .form-control {
            background: #24323D;
            border: 1px solid #ffffff;
            box-sizing: border-box;
            box-shadow: none;
            border-radius: 20px;
            font-size: 12px;
            margin-top: 30px;
        }
        .form-control, .btn {        
            border-radius: 4px;
        }
        .container {
            width: 350px;
            margin: 0 auto;
            padding: 20px 0;		
        }
        .container form {
        color: #434343;
    	margin-bottom: 5px;
		border: 1px solid #f3f3f3;
        padding: 20px;
        background: #24323D;
        border: 3px solid rgba(17, 36, 19, 0.8);
        box-sizing: border-box;
        box-shadow: -27px 21px 15px rgba(0, 0, 0, 0.25);
        border-radius: 20px;	

        }
        .container .modal-title {
        margin-bottom: 95px;
        font-family: Rationale;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        text-align: center;
        color: #FFFFFF;
        line-height: 22px;
        display: flex;
        align-items: center;
        margin: 12 80px 0px;
        letter-spacing: 0.02em;
    }
        .container .form_container {
        margin-bottom: 20px;
        }
        .container .form-control, .container .btn {
		    min-height: 40px;
            transition: all 0.5s; 
        }
        .container .close {
            position: absolute;
		    top: 15px;
		    right: 15px;
	    }
        .container .btn {
            margin-top: 30px;
        font-size: 18px;
        color: #E5E5E5;
        font-weight: bold;
		line-height: normal;
        background: #1AB188;
	}
        .container .btn:hover, .container .btn:focus {
            background: #b3196e;
        }
        .container .footer {
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 11px;
        line-height: normal;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.2em;
        margin: 60px 60px 0px;
        color: #ffffff; 
    }
    .container .bottom_signup {  
        color: #ffffff;
        margin-left: 5px;
    }
    </style>    
</head>
	<body>    
	<div class="container">
        <!--Form Container--> 
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <span class="modal-title">Create Password</span>
                    
                    <div class="form_container input-field1">
                        <small style="color: red;"><?php echo $failure; ?></small>
                        <small style="color: red;"><?php echo $token_code_error; ?></small>
                        <small style="color: green;"><?php echo $success; ?></small>
                        <small style="color: red;"><?php echo $token_has_expired; ?></small>
                        <input type="text" name="tokencode" class="form-control input_pass1"  placeholder="Enter password reset code *" style="color: white;">
                    </div>
                    <div class="form_container input-field2">
                        <small style="color: red;"><?php echo $new_password_error; ?></small>
                        <input type="password" name="newpassword" class="form-control input_pass2"  placeholder="Enter new password *" style="color: white;">
                    </div>
                    <div class="send_button">
                    <button type="submit" name="resetnow" class="btn btn-block btn-lg">Create New Password</button>
                    </div> <br>
            
                    
                    <div class="text-center small footer">Not yet Registered? <a href="index.php" class="bottom_signup"> Sign up/ Sign in</a></div>
</form>
	</div>
	</body>
	</html>
