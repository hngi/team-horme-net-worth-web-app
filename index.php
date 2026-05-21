<?php 
session_start();
if(isset($_SESSION["calcuser"])){
header("Location: calc.php");
}
include("process/contact_process.php");


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Net-Worth Calculator</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="contact.css" />
        <link rel="stylesheet" href="style.css" />

        
        
        
        
        <!--Styling for the cookie modal-->
        <style>
            .cookies-popup{
                margin: 20px;
                background: rgb(9, 80, 58); 
            }
            .modal-header{
                background: rgb(137, 247, 212); 
            }
            .modal-footer{
                background: rgb(137, 247, 212); 
                
            }
            .btn-primary{
                background: #b3196e;
                display: flex;
                margin: 0px 180px 0px;
                
            }
        </style>
    </head>
    <body>
        <!-- Sign-in page -->
        <nav
            class="navbar navbar-light"
            style="background-color: rgb(38, 155, 120)"
        >
            <span>
                <img
                    src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
                    alt="logo"
                    style="width: 110px; height: 40px"
                    id="logo-img"
                />
            </span>
            
            <a href="Faq.html" class="text-light font-weight-bold">FAQ</a>
            <a href="Help.html" class="text-light font-weight-bold">Help</a>
            <a href="subscribe.php" class="text-light font-weight-bold align-left">Subscribe</a>
        </nav>
        <div class="container-fluid">
			<div style="color: green;"><?php echo $messageSent; ?></div>
            <div
                class="row pt-2 float-sm-left"
                style="min-height: 100vh;"
                id="page"
            >
                <div class="col col-md-6 align-self-center text-center">
                    <h3
                        class="h1 font-weight-bolder"
                        style="color:  rgb(38, 155, 120); text-shadow: -1px 1px 2px black;"
                    >
                        Knowing your Net-Worth is important
                    </h3>
                    <p>
                        Your net worth isn't about your income your income
                        doesn't even factor into your net worth. Instead net
                        worth includes savings, investments and debts.<br />
                        Think about it this way: If you make $30,000 per
                        year,but you have investments portfolio worth $3.5
                        million, you're going to be more concerned about your
                        total net worth because the $30,000 salary you make is a
                        very small part of your financial situation.
                    </p>
                    <h3 class="h1 text-dark font-weight-bolder">
                        You're a step away from knowing how to calculate your
                        Net-Worth
                    </h3>
                    <a href="#page1">
                        <h3
                            class="h3 font-weight-bolder"
                            style="color:  rgb(38, 155, 120)"
                        >
                            Sign up with us for free
                        </h3></a
                    >
                </div>
                <div
                    class="row  pt-3 pb-1 align-self-center m-auto bor col-md-5 mb-5"
                    style="min-height: 40vh; max-width: 60vh; background-color: rgb(14, 34, 56);box-shadow:  -10px  5px 10px gray;"
                >
                    <div
                        class=" align-self-center text-center pb- col-md-12"
                        id="page1"
                    >
                        <div class="row">
                            <a
                                href="#"
                                class=" p-2 text-light col-6 bg"
                                id="signUpLink"
                                >Sign up</a
                            >
                            <a
                                href="#"
                                class="bg-secondary p-2 text-light col-6"
                                id="signInLink"
                                >Sign in</a
                            >
                        </div>

                        <form action="/process/signup_process.php" id="signUp" method="post">
                            <h5 class="text-light h5 mt-4">Sign up for free</h5>
                            <div class = "alert-msg"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="form-inline col-md-6">
                                            <input
                                                type="text"
                                                name="firstname"
                                                id="firstName"
                                                placeholder="First name"
                                                class="p-2 form-control form-control-lg color col-sm-12 col-md-12 mt-3"
                                                style="background-color: transparent; color: white;"
                                                required
                                            />
                                        </div>
                                        <div class="form-inline col-md-6 mt-3">
                                            <input
                                                type="text"
                                                name="lastname"
                                                id="secondName"
                                                placeholder="Last name"
                                                class="p-2 form-control form-control-lg color ml-md-auto mt-md-0 col-sm-12 col-md-12 "
                                                style="background-color: transparent; color: white;"
                                                required
                                            />
                                        </div>
                                    </div>
									
                                    <div class="form-group m-1 mt-3">
                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            placeholder="Email"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent; color: white;"
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                                            required
                                        />
                                    </div>
                                    
                                    <div class="form-group m-1 mt-3">
                                        <input
                                            type="password"
                                            name="password"
                                            id="password1"
                                            placeholder="Password"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent; color: white;"
                                            minlength = "6"
                                            required
                                        />
                                    </div>
                                    
                                    <div class="form-group m-1 mt-3">
                                        <input
                                            type="password"
                                            name="confirmpassword"
                                            id="password1"
                                            placeholder="Confirm password"
                                            class="p-2 form-control form-control-lg color"
                                            style="background-color: transparent; color: white;"
                                            required
                                        />
                                    </div>

                                    <div class="form-group pt-3">
                                        <input
                                            type="submit"
                                            name="sign_up"
                                            id=""
                                            value="Sign up"
                                            style="background-color: rgb(38, 155, 120)"
                                            class="p-2 btn text-light font-weight-bold col-12 mb-2"
                                        />

                                       <input type="checkbox" name="check" /><i id="terms" style="color:red; font-size: : 8px;" required> I read and agree to your terms and conditions</i> 
                                        
                                    </div>
                                    <h6 style="color: white; margin-top: 15px;"> TERMS AND CONDITIONS</h6>
                                    <h6 style="color:white; margin:0; padding:0">By using our net-worth app you automatically give us the permission to make use of the sign up data you inputed for further research.</h6>

                                </div>

                            </div>
                        </form>
                        <form
							action="/process/login_process.php"
                            id="signIn"
                            style="display: none;"
                            class=""
                            style="width: 100%"
                            method="post"
                        >
                            <h5 class="text-light h5 mt-3">Welcome Back!</h5>
                            <div class = "alert-msg"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            name="loginemail"
                                            id="Username"
                                            placeholder="Email"
                                            class=" form-control form-control-lg color mt-3 col-sm-12"
                                            style="background-color: transparent; color: white;"
                                        />
                                    </div>
                                    <div class="form-group mt-3">
                                        <input
                                            type="password"
                                            name="loginpassword"
                                            id="password1"
                                            placeholder="Password"
                                            class="p-2 form-control form-control-lg color col-sm-12"
                                            style="background-color: transparent; color: white;"
                                        />
                                    </div>

                                    <div class="form-group pt-3">
                                        <input
                                            type="submit"
                                            name="loginapp"
                                            id="submit"
                                            value="Sign in"
                                            style="background-color: rgb(38, 155, 120)"
                                            class="p-2 btn text-light font-weight-bold col-12 mb-2"
                                        />
                                        <a href="reset.php" class="text-light"
                                            ><p>Forgot password?</p></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php //include("footer.php"); ?>
        
		<div id="contact-form-frame" class="contact-button hide-button">
			<div class="container">  
					<form name="contact-form"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="contact-form"  >
					  <h3>Contact Us.</h3>
					  <span id="close-btn">&times;</span>
					  <fieldset>
						<input type="text" id="name" name="name" required minlength="4" placeholder="Your Name">
						
					  </fieldset>
					  <fieldset>
						<input type="email" id="email" name="email" required placeholder="Your Email Here...">
						
					  </fieldset>
					  <fieldset>
						<input type="text" id="title" name="title" required autofocus placeholder="Title">
						
					  </fieldset>
					 
					  <fieldset>
						<textarea id="message" minlength="20" name="message" required placeholder="Type your message here..."></textarea>
					  </fieldset>
					  <fieldset>
						<button name="submitted" id="contact-submit">Submit</button>
					  </fieldset>
					</form>
				  </div>
				</div>
			<div style="margin: 10px 0 0 80px; height: 60px; padding:3px;" class="contact-modal-open-btn">
				<h2>Contact Us.</h2>
			</div>
      
      
      	  <!--Beginning of cookie notification modal-->
<!--
        <div class="cookies-popup">
             Modal HTML 
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                                <img
                                src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
                                alt="logo"
                                style="width: 110px; height: 40px"
                                id="logo-img"
                            />
                            <h5 class="modal-title">Cookie Notice</h5>
                        </div>
                        <div class="modal-body">
                            <p>The Networth calculator webiste employs cookies to improve your user experience. 
                            For more information please read our <a href="cookies.html" class="cookies">cookie policy</a>. <br>
                            By clicking the "I ACCEPT" button, you will be providing your consent to our use of cookies.</p>
                        </div>
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-primary" data-dismiss="modal">I Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="./ajax.js"></script>
        <script src="js/app.js"></script>
        <script src="js/contact.js"></script>
         <!--Javascript for the cookie modal notification set to remain static onclick outside-->
         <script>
            $(document).ready(function(){
                $("#myModal").modal({
                backdrop: 'static',
                keyboard: false });
                });
        </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    </body>
</html>
