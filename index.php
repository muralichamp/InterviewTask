
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Interview</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--Morris Chart-->
        <link rel="stylesheet" href="assets/libs/morris-js/morris.css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        
        <!-- <link rel="shortcut icon" href="assets/images/logo-sm.png"> -->
        <!-- Sweet Alert css -->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-color: #fcfcfc;
            }
            .navbar-custom {
                background-color: #fff !important;
                -webkit-box-shadow: 0 0 35px 0 rgba(154,161,171,.15);
                box-shadow: 0 0 0px 0 rgba(154,161,171,.15);
                position: fixed;
                left: 0;
                right: 0;
                height: 70px;
                z-index: 100;
                padding: 0 12px;
                border-bottom: 1px solid #dedada;
            }
            .navbar-custom .topnav-menu .nav-link {
                padding: 0 15px;
                color: #000;
                min-width: 32px;
                display: block;
                line-height: 70px;
                text-align: center;
                max-height: 70px;
            }
            #logo{
                height: 50px;
            }
            .navigation-menu > li > a {
                display: block;
                color: #000;
                font-size: 13px;
                font-family: Karla,sans-serif;
                -webkit-transition: all .5s ease;
                transition: all .5s ease;
                line-height: 20px;
                padding: 10px;
                padding-left: 10px;
                position: relative;
            }
            #topnav .topbar-menu {
                margin-top: 50px;
            }
            #sortmenu{
                border-right: 1px solid #dedada;
            }
            #btncar{
                color: #000;
            }
            #VehicleSelect{
                padding-top:15px;
            }
            #vehtext {
                width: 300px;
                background-color: #e5e5e5;
                border: none;
                height: 36px;
            }
            #searchimg {
                position: absolute;
                background-color: #e5e5e5;
                padding: 8px;
            }
            footer{
                background-color: #3b3b3b;
                font-size: 13px;
            }
        </style>
        <header id="topnav">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="source-images/svg/heart.svg">
                            </a>
                        </li>            
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="source-images/svg/person.svg"> <span style="color: gray; font-size: 12px;">Hello, Log In</span>
                            </a>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="source-images/svg/cart.svg"> <span style="color: gray; font-size: 12px;">Shopping Cart</span>
                            </a>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="#" class="logo text-center">
                            <img src="source-images/logo.png" id="logo"> 
                        </a>
                    </div>
                    <div id="VehicleSelect">
                        <button class="btn btn-warning" id="btncar"><img src="source-images/svg/car.svg"> Select Vehicle</button> <input type="text" id="vehtext" placeholder="Enter Key Word or Part Number" class="input-field"><img src="source-images/svg/search.svg" id="searchimg">
                    </div>
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->
            <hr>
            <!-- Navigation Bar-->
            <div class="topbar-menu">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu" id="sortmenu">
                                <a href="#"> <i class="mdi mdi-text"></i> Shop by Category <i class="mdi mdi-chevron-down"></i> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Home <i class="mdi mdi-chevron-down"></i></a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Megamenu <i class="mdi mdi-chevron-down"></i></a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">Shop <i class="mdi mdi-chevron-down"></i></a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#">Blog <i class="mdi mdi-chevron-down"></i></a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#">Account <i class="mdi mdi-chevron-down"></i></a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#">Pages <i class="mdi mdi-chevron-down"></i></a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="#">Buy Theme</a>
                            </li>
                            <li class="has-submenu" style="float: right;">
                                <a href="#"><span style="color: gray;">Call Us:</span> 089252 97807</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <style>
            .card-box{
                height: 200px;
                padding-top: 30px;
            }
            #slide{
                height:410px;
                background-image: url('source-images/slide-1.jpeg');
                background-repeat: round;
            }
            #slidecontent{
                margin-top: 70px;
                margin-left: 50px;
            }
            .brands{
                width: 142px;
                text-align: center;
                border: 1px solid #d2d2d2;
                font-size: 12px;
            }
            .brands img {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                filter: grayscale(100%);
            }
            .productwidth{
                max-width: 20%;
            }
            .productwidth img{
                width:180px;
                padding-right: 20px;
            }
            .card-box{
                height: 300px;
                padding-top: 0;
            }

            .topproducts .card-box{
                height: 100px;
            }
            .banner1{
                height: 175px;
                background-image: url('source-images/banner1.jpeg');
                background-repeat: round;
            }
            .banner2{
                height: 175px;
                background-image: url('source-images/banner2.jpeg');
                background-repeat: round;
            }
            .bannercontent{
                margin-top: -165px;
                margin-left: 15px;
            }
            #bannercontentbg1, #bannercontentbg2 {
                height: 175px;
                width: 100%;
                background: linear-gradient(to right, #000000db 40%, #ffffff17);
                margin-left: -12px;
            }
            #footer{
                color: #fff;
            }
            #footer li{
                color: #7b7b7b;
            }
        </style>
    </head>

    <body>

        

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container">
                <div class="row" id="slide">
                    <div class="col-xl-12 col-md-12">
                        <div id="slidecontent">
                            <h2> <span style="background-color: #f9c851"> 30% OFF </span> </h2>
                            <h1> When Buying Parts</h1>
                            <h1> With Installation</h1><br>
                            <h5> <span style="color: #aeaeae">Installation of parts in the services of our partners</span></h5><br>
                            <button class='btn btn-success'>Shop Now</button>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-1.png">
                        </div>
                            AIMPARTS
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-2.png">
                        </div>
                            WINDENGINE
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-3.png">
                        </div>
                            TURBOELECTRIC
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-4.png">
                        </div>
                            STARTONE
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-5.png">
                        </div>
                            BRANDIX
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-6.png">
                        </div>
                            ABS-BRAND
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-7.png">
                        </div>
                            GRATECIRCLE
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-8.png">
                        </div>
                            JUSTROMB
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-9.png">
                        </div>
                            FASTWHEELS
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-10.png">
                        </div>
                            STROYKA-X
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-11.png">
                        </div>
                            MISSION-51
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-12.png">
                        </div>
                            FUELCORP
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-13.png">
                        </div>
                            REDGATE
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-14.png">
                        </div>
                            BLOCKS
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-15.png">
                        </div>
                            BLACKBOX
                    </div>
                    <div class="brands">
                        <div class="row">
                            <img src="source-images/brand-16.png">
                        </div>
                            SQUAREGARAGE
                    </div>
                </div>
                <h4>Featured Products</h4>
                <div class="row" id="featuredproduct">
                    
                    <div class="col-xl-2 productwidth">
                        <div class="card-box">
                            <p><span style="float: right;margin-right: -40px;"><img src="source-images/svg/quickview.svg" style="width: 35px;"></span></p>
                            <img src="source-images/product-1.jpeg">
                            <p style="color: #a0a0a0; font-size: 13px;">SKU: A43-44328-B</p>
                            <p style="color: #222; font-size: 13px; height: 40px;">Glosy Gray 19' Aluminium Wheel AR-19</p>
                            <p style="color: #222; font-size: 15px;"><b>$589.00</b> <span style="float: right;margin-right: -20px;"><img src="source-images/svg/cart-20.svg" style="width: 40px;"></span></p>
                        </div>
                    </div>
                    <div class="col-xl-2 productwidth">
                        <div class="card-box">
                            <p><span style="float: right;margin-right: -40px;"><img src="source-images/svg/quickview.svg" style="width: 35px;"></span></p>
                            <img src="source-images/product-2.jpeg">
                            <p style="color: #a0a0a0; font-size: 13px;">SKU: 729-51203-B</p>
                            <p style="color: #222; font-size: 13px; height: 40px;">Twin Exhaust Pipe From Brandix Z54</p>
                            <p style="color: #222; font-size: 15px;"><b>$749.00</b> <span style="float: right;margin-right: -20px;"><img src="source-images/svg/cart-20.svg" style="width: 40px;"></span></p>
                        </div>
                    </div>
                    <div class="col-xl-2 productwidth">
                        <div class="card-box">
                            <p><span style="float: right;margin-right: -40px;"><img src="source-images/svg/quickview.svg" style="width: 35px;"></span></p>
                            <img src="source-images/product-3.jpeg">
                            <p style="color: #a0a0a0; font-size: 13px;">SKU: 573-49386-C</p>
                            <p style="color: #222; font-size: 13px; height: 40px;">Motor Oil Level 5</p>
                            <p style="color: #222; font-size: 15px;"><b>$23.00</b> <span style="float: right;margin-right: -20px;"><img src="source-images/svg/cart-20.svg" style="width: 40px;"></span></p>
                        </div>
                    </div>
                    <div class="col-xl-2 productwidth">
                        <div class="card-box">
                            <p><span style="float: right;margin-right: -40px;"><img src="source-images/svg/quickview.svg" style="width: 35px;"></span></p>
                            <img src="source-images/product-4.jpeg">
                            <p style="color: #a0a0a0; font-size: 13px;">SKU: 753-38573-B</p>
                            <p style="color: #222; font-size: 13px; height: 40px;">Bandix Engine Block Z4</p>
                            <p style="color: #222; font-size: 15px;"><b>$452.00</b> <span style="float: right;margin-right: -20px;"><img src="source-images/svg/cart-20.svg" style="width: 40px;"></span></p>
                        </div>
                    </div>
                    <div class="col-xl-2 productwidth">
                        <div class="card-box">
                            <p><span style="float: right;margin-right: -40px;"><img src="source-images/svg/quickview.svg" style="width: 35px;"></span></p>
                            <img src="source-images/product-5.jpeg">
                            <p style="color: #a0a0a0; font-size: 13px;">SKU: 472-67382-z</p>
                            <p style="color: #222; font-size: 13px; height: 40px;">Brandix Clutch Discs Z175</p>
                            <p style="color: #222; font-size: 15px;"><b>$345.00</b> <span style="float: right;margin-right: -20px;"><img src="source-images/svg/cart-20.svg" style="width: 40px;"></span></p>
                        </div>
                    </div>

                    <!-- end col -->

                </div>

                <!-- end row -->

                <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="col-xl-6 banner1">
                        <div id="bannercontentbg1">
                        </div>
                        <div class="bannercontent">
                            <h2> <span style="color: #f9c851"> MOTOR OILS </span> </h2>
                            <p> <span style="color: #fff">Synthetic motor oil with free shipping
                            <br>Friction free life guaranteed</span></p>
                            <button class='btn btn-danger btn-sm'>Shop Now</button>
                        </div>
                    </div>
                    <div class="col-xl-6 banner2">
                        <div id="bannercontentbg2">
                        </div>
                        <div class="bannercontent">
                            <h2> <span style="background-color: #f9c851"> SAVE UPTO $40 </span> </h2>
                            <p> <span style="color: #fff">Luxuriuos interior part for real aesthetes
                            <br>Leather, fabric, ivory and more.</span></p>
                            <button class='btn btn-danger btn-sm'>Shop Now</button>
                        </div>
                    </div>
                </div>

                <div class="row topproducts" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="col-xl-4">
                        <h4>Top Rated Products</h4>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-6.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Fantastic 12-Stroke Engine With A Power of 1991 hp</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$2579.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-7.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Set of Four 19 Inch Spiked Tires </b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$327.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-8.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>40 Megawatt Low Beam Lamp</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$4.00</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <h4>Special Offers</h4>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-9.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Brandix Manual Five Speed Gearbox</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$879.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-10.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Set of Car Floor Mats Brandix Z4 </b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$78.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-11.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Taillights Brandix Z54</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$60.00</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <h4>Bestsellers</h4>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-12.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Brandix Engine Block Z4</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$452.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-13.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Brandix Clutch Discs Z175 </b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$345.00</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="source-images/product-9.jpeg" style="width: 100px;">
                                </div>
                                <div class="col-sm-8">
                                    <p><span style="float: right;margin-right: -20px;"><img src="source-images/svg/quickview.svg" style="width: 12px;"></span></p>
                                    <p style="color: #222; font-size: 13px; height: 40px;"><b>Brandix Manual Five Speed Gearbox</b></p>
                                    <p style="color: #222; font-size: 15px;"><b>$879.00</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="col-xl-3">
                        <img src="source-images/svg/free-delivery.svg"> <span style="font-size: 18px;"> Free Shipping</span>
                    </div>
                    <div class="col-xl-3">
                        <img src="source-images/svg/24-hours.svg"> <span style="font-size: 18px;"> Support 24/7</span>
                    </div>
                    <div class="col-xl-3">
                        <img src="source-images/svg/payment-security.svg"> <span style="font-size: 18px;"> 100% Safety</span>
                    </div>
                    <div class="col-xl-3">
                        <img src="source-images/svg/tag.svg"> <span style="font-size: 18px;"> Hot Offers</span>
                    </div>
                </div>



            </div>
        </div>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>
    <footer>
            
        <div class="container">
                <div class="row" id="footer">
                    <div class='col-xl-5'>
                        <h4 style="color: #fff;">Contact Us</h4>
                        <div class="row">
                            <p style="color: #7b7b7b;">Hi, we are always open for cooperation and suggestions, contact us in one of the ways below:</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 style="color: #7b7b7b;">PHONE NUMBER</h5>
                                <p>089252 97807</p>
                            </div>
                            <div class="col-sm-6">
                                <h5 style="color: #7b7b7b;">EMAIL ADDRESS</h5>
                                <p>careers@uitouxsolutions.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h5 style="color: #7b7b7b;">OUR LOCATION</h5>
                                <p>102, Athipalayam Rd,<br>Ramakrishnapuram,<br>Chinnavedampatti,<br>Coimbatore, Tamil Nadu<br>641049</p>
                            </div>
                            <div class="col-sm-6">
                                <h5 style="color: #7b7b7b;">WORKING HOURS</h5>
                                <p>Mon-Fri 10:00pm - 6:00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-2'>
                        <h4 style="color: #fff;">Information</h4>
                        <div class="row">
                            <ul class="list-unstyled">
                                <li>About Us</li>
                                <li>Delivery Information</li>
                                <li>Privacy Policy</li>
                                <li>Brands</li>
                                <li>Contact Us</li>
                                <li>Return</li>
                                <li>Site Map</li>
                            </ul>
                        </div>
                    </div>
                    <div class='col-xl-2'>
                        <h4 style="color: #fff;">My Account</h4>
                        <div class="row">
                            <ul class="list-unstyled">
                                <li>Store Location</li>
                                <li>Order History</li>
                                <li>Wish List</li>
                                <li>Newsletter</li>
                                <li>Special Offers</li>
                                <li>Gift Certificates</li>
                                <li>Affiliate</li>
                            </ul>
                        </div>
                    </div>
                    <div class='col-xl-3'>
                        <h4 style="color: #fff;">Newsletter</h4>
                        <div class="row">
                            <p style="color: #7b7b7b;">Enter your email address below to subscribe to our newsletter and keep up to date with discounts and special offers. </p>
                            <input type="text" placeholder="user@example.com" style="width:190px;"><button class="btn btn-success">Subscribe</button><br>
                            <p style="color: #7b7b7b;">Follow us on social networks</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div style="background-color: #111; font-size: 13px;padding-top: 16px;">
            <div class="container">
                <div class="row" id="footer2">
                    <p style="color: #7b7b7b;">Powered by <span style="color: #fff;">React/Next.js</span> - Designed by <span style="color: #fff;">UITOUX Solutions</span></p><span style="margin-left: 45%;"><img src="source-images/payments.png"></span>
                </div>
            </div>
        </div>
</html>