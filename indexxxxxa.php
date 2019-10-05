<?php
include("process/connection.php");
include("process/login_process.php");
include("process/signup_process.php");
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="./app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <!--Javascript for the cookie modal notification set to remain static onclick outside-->
       <script>
            $(window).on('load',function(){
  if (!sessionStorage.getItem('shown-modal')){
    $('#firstmodal').modal('show');  
    sessionStorage.setItem('shown-modal', 'true');
  }
});
        </script>
         <!--Styling for the cookie modal-->
         <style>
                .firstmodal{
                    margin: 20px;
                    background: #2FC199; 
                }
                .modal-header{
                    background: #2FC199; 
                }
                .modal-footer{
                    background: rgb(249, 250, 250);; 
                    
                }
                .btn-secondary{
                    background: #2FC199;
                    display: flex;
                    margin: 0px 380px 0px;
                    
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

                     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="signUp" method="post">
                         <h5 class="text-light h5 mt-4">Sign up for free</h5>
                         <div class="row">
                             <div class="col">
                                <small style="color:red; font-size:12px"> <?php echo $first_name_error; ?></small>
                                <br><small style="color:red; font-size:12px"> <?php echo $last_name_error; ?></small>
                                 <div class="row">
                                     <div class="form-inline col-md-6">
                                         <input
                                             type="text"
                                             name="firstname"
                                             id="firstName"
                                             placeholder="First name"
                                             class="p-2 form-control form-control-lg color col-sm-12 col-md-12 mt-3"
                                             style="background-color: transparent; color: white;"
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
                                         />
                                     </div>
                                 </div>
                                 
                                 <div class="form-group m-1 mt-3">
                                  <small style="color:red; font-size:12px"> <?php echo $email_error; ?></small>
                                     <input
                                         type="text"
                                         name="email"
                                         id="password1"
                                         placeholder="Email"
                                         class="p-2 form-control form-control-lg color"
                                         style="background-color: transparent; color: white;"
                                     />
                                 </div>
                                 
                                 <div class="form-group m-1 mt-3">
                                    <small style="color:red; font-size:12px"> <?php echo $password_error; ?></small>
                                     <input
                                         type="password"
                                         name="password"
                                         id="password1"
                                         placeholder="Password"
                                         class="p-2 form-control form-control-lg color"
                                         style="background-color: transparent; color: white;"
                                     />
                                 </div>
                                 
                                 <div class="form-group m-1 mt-3">
                                 <small style="color:red; font-size:12px"> <?php echo $confirm_password_error; ?></small>
                                     <input
                                         type="password"
                                         name="confirmpassword"
                                         id="password1"
                                         placeholder="Confirm password"
                                         class="p-2 form-control form-control-lg color"
                                         style="background-color: transparent; color: white;"
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

                                    <input type="checkbox" name="check" /><span id="terms" style="color:green; font-size: : 8px;"> I read and agree to your terms and conditions</span> 
                                     
                                 </div>
                                 <span style="color: red; font-size: 12px;"><?php echo $unchecked;?></span>>
                                 <h6 style="color: white; margin-top: 15px;"> TERMS AND CONDITIONS</h6>
                                 <p style="color:white; margin:0; padding:0">By using our net-worth app you automatically give us the permission to make use of the sign up data you inputed for further research.</p>

                             </div>

                         </div>
                     </form>
                     <form
                         action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                         id="signIn"
                         style="display: none;"
                         class=""
                         style="width: 100%"
                         method="post"
                     >
                         <h5 class="text-light h5 mt-3">Welcome Back!</h5>
                         <div class="row">
                             <div class="col">
                                <small style="color:red; font-size:12px"><?php echo $form_email_error; ?></small>
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
                                 <small style="color:red; font-size:12px"><?php echo $form_password_error; ?></small>
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
       <div class="modal fade" id="firstmodal" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
                <img
                src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
                alt="logo"
                style="width: 110px; height: 40px"
                id="logo-img"
            />
          <h5 class="modal-title" id="modal1" style="text-align: center; margin-left: 180px;">Cookie Notice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <p>The Networth calculator webiste employs cookies to improve your user experience. 
                        For more information please read our <a href="http://www.hngteamhorme.diaticine.com/cookies.html" class="cookies">cookie policy</a>. <br>
                        By closing this notice or clicking the "ACCEPT" button, you will be providing your consent to our use of cookies.</p>
         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Accept</button>
        </div>
    </body>
</html>