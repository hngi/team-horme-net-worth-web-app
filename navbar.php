<style>

    /* navigation style heading */
    .nav-default {
            /* background: rgb(38, 155, 120) !important; */
            top: 0;
            position: sticky;
            z-index: 999;
            padding: 5px;
            }

            .navbar-logo {
            /* padding: 15px 0; */
            height: auto;
            font-size: 20px;
            text-transform: capitalize;

            }
            .nav-list>li a {
            display: block !important;
            padding: 5px 10px !important;
            font-size: 17px;
            color: #fff !important;
            text-transform: capitalize;
            margin: 10px !important;
            text-align: center;
            font-size: 16px;
            letter-spacing: 1px;
            text-decoration: none;
            }

            .nav-list>li a:hover {
            /* background: #fff; */
            color: #fff !important;
            border: 1px solid #fff;
            }
            @media only screen and (max-width: 550px) {
            .nav-list{
                width: 100%;
                margin: auto
            }
            }
            
</style>


<nav class="navbar navbar-light navbar-expand-sm nav-default" style="background-color: rgb(38, 155, 120)">
            <span>
                <img
                    src="https://res.cloudinary.com/izik4004/image/upload/v1569624977/Group_2_1.png"
                    alt="logo"
                    style="width: 110px; height: 40px"
                    id="logo-img"
                />
            </span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="nav collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class=" nav-list nav navbar-nav navbar-right ml-auto nav-center">
                        
                        <!-- <li class="nav-item">
                            <a class="login.php " href="#">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="logout.php " href="#" >sign Up</a>
                        </li> -->
                        <li class="nav-item">
                        <a href="help.php" class="text-light font-weight-bold">Help</a>
                        </li>
                        <li class="nav-item">
                        <a href="Faq.html" class="text-light font-weight-bold">FAQ</a>
                        </li>
                        <li class="nav-item">
                        <a href="subscribe.php" class="text-light font-weight-bold align-left">Subscribe</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>