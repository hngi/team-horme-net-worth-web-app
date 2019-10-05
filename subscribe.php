<?php

    if(isset($_POST["submit"])) {
        $recipient="fayounguhie@gmail.com";
        $subject="Subscription to Networth";
        $senderEmail=$_POST["senderEmail"];

        $mailBody="Email: $senderEmail";

        mail($recipient, $subject, $mailBody, "From: $senderEmail");

        $thankYou="<p style='color:green; text-align: center'>Thank you! You have been added to our mailing list.</p>";
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>NetWorth calculator</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>
<body>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);

    *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Roboto', cursive;
    }

    body{
        background-size: cover;
        width: 100%;
        height: 100vh;
    }

    .wrapper{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 8rem;
        align-items: center;
        letter-spacing: 2px;
    }

    .wrapper h1{
        margin-bottom: 40px;
        font-size: 42px;
        color: #000;
    }

    .wrapper p{
        margin-bottom: 40px;
        color: #b2b2b2;
        font-size: 20px;
    }

    img {
        height: 16px;
        width: 16px;
        padding: 5px 10px;
    }

    .newsletter{
        max-width: 550px;
        width: 100%;
        position: relative;
    }

    .newsletter .input{
        width: 100%;
        padding: 30px 100px 30px 60px;
        border-radius: 5px;
        border: 2px solid #000;
        font-weight: bold;
    }
    
    .newsletter .fas{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);	
        left: 20px;
        font-size: 20px;
    }

    .newsletter .btn{
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 30px;
        background: #269b78;
        padding: 15px 20px;
        border-radius: 25px;
        font-size: 12px;
        letter-spacing: 5px;
        color: #fff;
        cursor: pointer;
        text-transform: uppercase;
    }

    a.return{
        text-decoration: none;
        font-size: 16px;
        color: #000;
        text-align: left;
        margin-top: 5rem;
    }

    a.return:hover{
        color: #269b78;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .wrapper{
            margin-top: 12rem;
            height:100vh;
        }

        .wrapper h1{
            margin-bottom: 20px;
            font-size: 32px;
        }

        .newsletter{
            max-width: 400px;
        }    
    }
    

</style>

<nav
class="navbar navbar-light"
style="background-color: #269b78"
>
    <span>
        <a href="index.php"><img
        src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
        alt="logo"
        style="width: 125px; height: 40px"
        id="logo-img"
    /></a>
    
    </span>
</nav>

<div class="wrapper">
	<h1>Subscribe to our Newsletter</h1>
    <p>Receive updates instanly</p>
    <?php
        if (isset($thankYou)){ echo $thankYou;}
    ?>
	<div class="newsletter">
        <form method="POST" action="subscribe.php">
            <input type="email" name="senderEmail" class="input" placeholder="Enter Your Email">
		    <i class="fas fa-envelope"></i>
            <input type="submit" name="submit" value="Subscribe" class="btn">
        </form>
    </div>
    <a href="index.php" class="return">Return to home</a>
</div>	
	
</body>
</html>