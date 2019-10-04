<?php 
session_start();
if(isset($_SESSION["calcuser"])){
header("Location: calc.php");
}
?>

<!DOCTYPE html>
<html >
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
        </nav>
        <div class="container-fluid">
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
                    class="row  p-5 align-self-center m-auto bor col-md-5 mb-5"
                    style="min-height: 50vh;background-color: rgb(14, 34, 56);box-shadow:  -10px  5px 10px gray;"
                >
                    <div
                        class=" align-self-center text-center pb-5 col-md-12"
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

                                       <input type="checkbox" name="check" /><span id="terms" style="color:green; font-size: : 8px;" required> I read and agree to your terms and conditions</span> 
                                        
                                    </div>
                                    <h6 style="color: white; margin-top: 15px;"> TERMS AND CONDITIONS</h6>
                                    <p style="color:white; margin:0; padding:0">By using our net-worth app you automatically give us the permission to make use of the sign up data you inputed for further research.</p>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="./app.js"></script>
        <script src="./ajax.js"></script>
    </body>
</html>
