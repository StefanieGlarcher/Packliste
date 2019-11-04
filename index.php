<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=packlist', 'root', '');

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Packlist</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-md-4 d-none d-md-block">
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="logo">
                                <a href="">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 d-none d-md-block">
                            <div class="login_resiter">
                                <p><a href="login.php"><i class="flaticon-user"></i>login</a> | <a href="registrieren.php">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="search_input" id="search_input_box">
                            <div class="container ">
                                <form class="d-flex justify-content-between search-inner">
                                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                    <button type="submit" class="btn"></button>
                                    <span class="ti-close" id="close_search" title="Close Search"></span>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- welcome_protomedia_start -->
    <div class="welcome_protomedia">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <h3>Welcome to our Website <br>
                        Packlist</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="photographi_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                        <div class="info">
                            <p>Hallo, Herzlich Willkommen auf unserer Website. Hier können sie von einer Packliste profitierne, damit auch nicht vergessen geht!</p>
                            <input type="checkbox" name=""><?php $con = mysqli_connect("","root");
                            mysqli_select_db($con, "packlist");
                            $res = mysqli_query($con, "Select * from users");
                            while ($dsatz = mysqli_fetch_assoc($res)){
                                echo $dsatz["bezeichung"];
                            }mysqli_close($con);?><br>
                            <input type="checkbox" name="db"><span>Bargeld</span></span><br>
                            <input type="checkbox" name="db"><br>
                            <input type="checkbox" name="db"><br>
                            <input type="checkbox" name="db"><br>
                        </div>
                </div>
            </div>
        </div>
    </div>

                <!-- footer_start -->
                <footer class="footer">
                    <div class="footer_area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="footer_info text-center">
                                        <img src="img/names.PNG" alt="">
                                        <p class="footer_text">
Explore our Packlist Website
</p>
                                        <img src="img/koffer.PNG" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom ">
                        <div class="container">
                            <div class="footer_border">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="footer_links text-center">
                                            <ul>
                                                <li><a href="">home</a></li>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="contact.php">contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright_text text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> </p>
                        </div>
                    </div>
                </footer>
                <!-- footer_end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
