<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tubes PWL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <style>
        th {
            width: 10vw;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner"
    ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-xl-2 text-center">
                <h1 class="mb-0 site-logo m-0 p-0"><a href="index.php" class="mb-0">CINEMONCE</a></h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="movies.php" class="nav-link">Movies</a></li>
                        <li><a href="theaters.php" class="nav-link">Theaters</a></li>
                        <li><a class="nav-link" href="#" data-target="#login" data-toggle="modal">Sign In</a></li>

                    </ul>
                </nav>
            </div>

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#"
                                                                        class="site-menu-toggle js-menu-toggle text-white float-right"><span
                        class="icon-menu h3"></span></a></div>
        </div>
    </div>
    </header>

    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-white">
                    <button data-dismiss="modal" class="close text-black">&times;</button>
                    <h4 style="color: black">Login</h4>
                    <form>
                        <input type="text" name="username" class="username form-control"
                               placeholder="Username" style="border-color: lightgrey; opacity: 1"/>
                        <input type="password" name="password" class="password form-control"
                               placeholder="Password" style="border-color: lightgrey; opacity: 1"/>
                        <h6 style=""><a href="forgotPassword.php"> Forgot Password?</a></h6>
                        <h6 style="color: black"> Not a member? <a href="signUp.php">Sign Up.</a></h6>
                        <input class="btn login btn-primary" type="submit" value="Login"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: black;top: 0;height: 90px"></div>
    <div class="site-section" id="properties-section">
        <div class="container align-content-center">
            <div class="row">
                <div class="col col-lg-2">
                    <img src="images/avengers-2.jpg" style="width: 12vw; height: 17vw;">
                    <br>
                    <br>
                    <a href="#" target="_blank" class="btn btn-primary px-4 py-2 ml-5">Buy Ticket</a>
                </div>
                <div class="col">
                    <h2 class="section-title text-black">JUDUL FILM</h2>
                    <table class="table-bordered text-black mt-4 w-75 text-left" align="center" cellspacing="5"
                           cellpadding="5">
                        <tbody>
                        <tr>
                            <th>Description</th>
                            <td>BlaBla</td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td>BlaBla</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h3 class="font-weight-bold mt-4 text-black">Trailer</h3>
        <iframe style="width: 60%; height: 30vw" src="https://www.youtube.com/embed/hbhV2Ij-Lbg" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>


<footer class="site-footer" style="background-color: rgb(20,20,20); bottom: 0; width: 100%; margin-top: 10%">
    <div class="container" align="center">
        <div class="row" align="center" style="height: 7vw">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Joshua Suherlan (1772013)</p>
                        <p>Steven Rumanto (1772026)</p>
                        <p>Kelvin Susanto (1772039)</p>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <h2 class="footer-heading mb-4">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="movies.php">Movies</a></li>
                            <li><a href="theaters.php">Theaters</a></li>
                            <li><a href="signUp.php">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="https://www.facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="https://www.twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="https://www.instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 mt-5 mr-5 text-center" align="center" style="height: 6vw; align-items: center;">
        <div class="col-md-12 text-center">
            <div class="border-top pt-5 p-4">
                <p class="copyright">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>
</div> <!-- .site-wrap -->

<a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>

<script src="js/main.js"></script>

</body>
</html>
