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

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-xl-2 text-center">
                    <!--                    <img src="images/logoCinema.png" class="img-thumbnail" href="index.php" class="mb-0">-->
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
                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i
                                    class="fas fa-user mr-1"></i>
                                Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i
                                    class="fas fa-user-plus mr-1"></i>
                                Register</a>
                        </li>
                    </ul>

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput11"
                                           class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your
                                        password</label>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                        data-dismiss="modal">Close
                                </button>
                            </div>

                        </div>
                        <!--/.Panel 7-->

                        <!--Panel 8-->
                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                            <!--Body-->
                            <div class="modal-body">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput13"
                                           class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your
                                        password</label>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14"
                                           class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat
                                        password</label>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                        data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                        <!--/.Panel 8-->
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="site-block-wrap">
        <div class="owl-carousel with-dots">
            <div class="site-blocks-cover overlay overlay-2" style="background-image: url(images/ice-by-cgr.jpg);"
                 data-aos="fade" id="home-section">


                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 mt-lg-5 text-center">
                            <h1 class="text-shadow">Bla Bla Bla</h1>
                            <p class="mb-5 text-shadow">BLA BLA BLA BLA</p>
                            <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>

                        </div>
                    </div>
                </div>


            </div>

            <div class="site-blocks-cover overlay overlay-2"
                 style="background-image: url(images/PNEK2UTRMQI6PDAXKM6FFMXQCQ.jpg);" data-aos="fade"
                 id="home-section">


                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 mt-lg-5 text-center">
                            <h1 class="text-shadow">Bla Bla Bla</h1>
                            <p class="mb-5 text-shadow">BLA BLA BLA BLA</p>
                            <p><a href="#" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <div class="site-section" id="properties-section">
        <!--        NOW SHOWING     -->
        <!--        MOVIES          -->
        <h1 style="text-align: center; color: #333333">NOW SHOWING</h1>
        <br>
        <div class="container">
            <div class="row large-gutters">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--        UPCOMING        -->
        <!--        MOVIES          -->
        <h1 style="text-align: center; color: #333333">UPCOMING</h1>
        <br>
        <div class="container">
            <div class="row large-gutters">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                    <div class="ftco-media-1">
                        <div class="ftco-media-1-inner">
                            <a href="" class="d-inline-block mb-4"><img src="images/tomcruise.jpg"
                                                                        alt="FImageo"
                                                                        class="img-fluid"></a>
                            <div class="ftco-media-details">
                                <h3>FILM.</h3>
                                <p>Action, Horror</p>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
