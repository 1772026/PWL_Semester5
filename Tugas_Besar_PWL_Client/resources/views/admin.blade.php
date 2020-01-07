<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas Besar Pemerograman Web Lanjut</title>
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
                <div class="col">
                    <h1 class="mb-0 site-logo m-0 p-0"><a href="?menu=index" class="mb-0">Cinema ONCE</a></h1>
                </div>
                <div class="col "><img src="images/logoCinema.png" width="100" href="#">
                </div>
                <div class="col">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="?menu=movie" class="nav-link">Movies</a></li>
                            <li><a href="?menu=theater" class="nav-link">Theaters</a></li>
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
    <div style="background-color: black;top: 0;height: 120px"></div>
    <div id="login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body bg-white">
                    <button data-dismiss="modal" class="close text-black">&times;</button>
                    <h4 style="color: black">Login</h4>
                    <form method="post">
                        <input type="text" name="username" class="username form-control"
                               required placeholder="Username / Email Address"
                               style="border-color: lightgrey; opacity: 1"/>
                        <input type="password" name="password" class="password form-control"
                               required placeholder="Password" style="border-color: lightgrey; opacity: 1"/>
                        <h6 style=""><a href="?menu=forgotpassword"> Forgot Password?</a></h6>
                        <h6 style="color: black"> Not a member? <a href="?menu=signup">Sign Up.</a></h6>
                        <input class="btn login btn-primary" name="btnLogin" type="submit" value="Login"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section" id="properties-section">
        <div class="container">
            <h1 style="text-align: center; color: #333333;">ADMIN MODE</h1>
            <br>
            <div class="justify-content-center">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageMovies"
                        aria-expanded="false" aria-controls="collapseExample">
                    Manage Movies
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageStudios"
                        aria-expanded="false" aria-controls="collapseExample">
                    Manage Studios
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageCashiers"
                        aria-expanded="false" aria-controls="collapseExample">
                    Manage Cashiers
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageCashiers"
                        aria-expanded="false" aria-controls="collapseExample">
                    Sales Report
                </button>
                <div class="collapse mt-2 text-black" id="manageMovies">
                    <div class="card card-body">
                        <h3>ADD NEW MOVIE</h3>
                        <table class="table text-black mt-4 text-center" cellspacing="5"
                               cellpadding="5">
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td><input type="text" class="" id="inputTitle" name="title" value=""
                                           autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Duration</th>
                                <td><input type="text" id="inputDuration" name="duration" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td><input type="text" id="inputDesc" name="description" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Poster</th>
                                <td><input type="file" id="inputPoster" name="poster" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <th>Trailer</th>
                                <td><input type="text" id="inputTrailer" name="trailer" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><input type="button" class="btn btn-primary" id="buttonAddMovie"
                                           name="addMovieButton"
                                           value="Add Movie"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="collapse mt-2 text-black" id="manageStudios">
                    <div class="card card-body">
                        <h3>ADD NEW STUDIO</h3>
                        <table class="table text-black mt-4 text-center" cellspacing="5"
                               cellpadding="5">
                            <tbody>
                            <tr>
                                <th>Number</th>
                                <td><input type="text" class="" id="inputNumber" name="number" value=""
                                           autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Capacity</th>
                                <td><input type="text" id="inputCapacity" name="capacity" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Row</th>
                                <td><input type="text" id="inputRow" name="row" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <th>Column</th>
                                <td><input type="text" id="inputColumn" name="column" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td><input type="text" id="inputType" name="type" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input type="text" id="inputPrice" name="price" value="" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><input type="button" class="btn btn-primary" id="buttonStudioMovie"
                                           name="addStudioButton" value="Add Studio"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="collapse mt-2 text-black" id="manageCashiers">
                    <div class="card card-body">
                        <h3>ADD NEW CASHIER</h3>
                        <table class="table text-black mt-4 text-center" cellspacing="5"
                               cellpadding="5">
                            <tbody>
                            <tr>
                                <th>Full Name</th>
                                <td><input type="text" class="" id="inputName" name="name" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><input type="text" id="inputUsername" name="username" value="" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td><input type="password" id="inputPassword" name="password" value=""
                                           autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>Re-type Password</th>
                                <td><input type="password" id="inputPassword" name="password" value=""
                                           autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <td><input type="button" class="btn btn-primary" id="buttonAddCashier"
                                           name="addCashierButton" value="Add Cashier"></td>
                            </tr>
                            </tbody>
                        </table>
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
                                <li><a href="?menu=default">Home</a></li>
                                <li><a href="?menu=movie">Movies</a></li>
                                <li><a href="?menu=theater">Theaters</a></li>
                                <li><a href="?menu=signup">Sign Up</a></li>
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
                            <a href="https://www.instagram.com" class="pl-3 pr-3"><span
                                    class="icon-instagram"></span></a>
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
    </footer>
</div>


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

