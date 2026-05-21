<?php 
session_start();
if(!$_SESSION['calcuser']){
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="main.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="./images/netbar.jpg" type="image/x-icon">
  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light navbar-fixed-top"
        style="background-color: rgb(38, 155, 120)"
      >
        <span>
          <a href="index.php">
            <img
              src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
              alt="logo"
              style="width: 110px; height: 40px"
              id="logo-img"
          /></a>
        </span>
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav text-dark mr-3">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              id="navbarDropdown"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="fas fa-user-circle"></i
              ><span class="font-weight-bold"
                ><?php echo $_SESSION['calcuser']; ?></span
              >
            </a>
          </li>
        </ul>
        <a class="text-light font-weight-bold link" href="calc.php">Calculator</a>
        <a class="text-light font-weight-bold" href="logout.php">Sign out</a>
      </nav>
    </header>
    <main>
      <div class="container-fluid" style="background-color: rgb(65, 89, 94);">
          <h3 class="text-center pt-1 h2 text-light">Net-Worth History</h3>
        <!-- blocks -->
          <div>
          <div class="container-fluid bg-light">
          <div container>
              <div class="money-box">
                  <div container2 class="asset-box">
                    <div class="asset-box">
                      <h4>Asset</h4>
                    </div>
                    <div class="asset-box">
                      <h4>Monetory Value</h4>
                    </div>
                    <p class="asset">house</p>
                    <p class="value">2000</p>
                    <p class="asset">shop</p>
                    <p class="value">2000</p>
                    <p class="asset">company</p>
                    <p class="value">2000</p>
                  </div>
                  <div class="p-3 btn-primary" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Total Asset: <span id="sign">₦</span> <span id="total-asset"></span></div>
                </div>
                <div class="money-box">
                    <div container2 class="asset-box">
                        <div class="asset-box">
                          <h4>Liability</h4>
                        </div>
                        <div class="asset-box">
                          <h4>Monetory Value</h4>
                        </div>
                        <p class="liability">bank debt</p>
                        <p class="value">2000</p>
                        <p class="liability">car</p>
                        <p class="value">2000</p>
                        <p class="liability">house rent</p>
                        <p class="value">2000</p>
                      </div>
                  <div class="p-3 btn-primary" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Total Liability: <span id="sign1">₦</span><span id="total-liability"></span></div>
                </div>
          </div>
          <div container2>
              <div class="btn pr-3 p-md-3 p-sm-2 pl-0 text-light text-center mb-5 col-12 mt-4" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Your total net worth: <span id="sign2">₦</span><span id="net-worth"></span></div>
              <div class="btn pr-3 p-md-3 p-sm-2 pl-0 text-light text-center mb-5 col-12 mt-4" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Date: <span id="sign2"></span><span id="net-worth"></span></div>              
          </div>
          </div>
        </div>
        <div>
            <div class="container-fluid bg-light">
            <div container>
                <div class="money-box">
                    <div container2 class="asset-box">
                      <div class="asset-box">
                        <h4>Asset</h4>
                      </div>
                      <div class="asset-box">
                        <h4>Monetory Value</h4>
                      </div>
                      <p class="asset">house</p>
                      <p class="value">2000</p>
                      <p class="asset">shop</p>
                      <p class="value">2000</p>
                      <p class="asset">company</p>
                      <p class="value">2000</p>
                    </div>
                    <div class="p-3 btn-primary" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Total Asset: <span id="sign">₦</span> <span id="total-asset"></span></div>
                  </div>
                  <div class="money-box">
                      <div container2 class="asset-box">
                          <div class="asset-box">
                            <h4>Liability</h4>
                          </div>
                          <div class="asset-box">
                            <h4>Monetory Value</h4>
                          </div>
                          <p class="liability">bank debt</p>
                          <p class="value">2000</p>
                          <p class="liability">car</p>
                          <p class="value">2000</p>
                          <p class="liability">house rent</p>
                          <p class="value">2000</p>
                        </div>
                    <div class="p-3 btn-primary" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Total Liability: <span id="sign1">₦</span><span id="total-liability"></span></div>
                  </div>
            </div>
            <div container2>
                <div class="btn pr-3 p-md-3 p-sm-2 pl-0 text-light text-center mb-5 col-12 mt-4" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Your total net worth: <span id="sign2">₦</span><span id="net-worth"></span></div>
                <div class="btn pr-3 p-md-3 p-sm-2 pl-0 text-light text-center mb-5 col-12 mt-4" style="background-color:rgb(38, 155, 120); box-shadow: -1px 1px 2px black">Date: <span id="sign2"></span><span id="net-worth"></span></div>              
            </div>
            </div>
          </div>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
