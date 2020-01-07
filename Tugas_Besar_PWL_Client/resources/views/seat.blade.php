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
    <div class="site-section pr-5" id="properties-section" align="center">
        <div class="container " style="border: 1px">
            <h1 class="text-black">SELECT SEATS</h1>
            <br>
            <table class="mt-4" align="center" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <?php
                    for ($i = 1; $i <= $studio->row; $i++) {
                        for ($j = 1; $j <= $studio->column; $j++) {
                            echo '<th width="25" valign="middle" align="center"><p onclick="" href="#" name="seats" id="link_A1">
                                        <img src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                            align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                            onclick="SelectSeat(this);" id="img_A1"></p></th>';
                            if ($j % 3 == 0 && $j != $studio->row) {
                                echo '<th>&nbsp&nbsp&nbsp&nbsp&nbsp</th>';
                            }
                        }
                        echo '</tr><tr>';
                    }
                    ?>
                </tr>
            </table>
            <br>
            <h3 class="text-black">Seat Taken <h3 id="seatTaken">0</h3></h3>
            <input type="button" class="btn btn-primary" id="buttonConfirm" name="confirmButton" value="Confirm">
        </div>
    </div>
    <script language="javascript">
        var total_seat = document.getElementsByName("totalTickets").values();
        var prevSquare = null;
        var seatTaken = 0;

        function SelectSeat(thisSquare) {
            if (thisSquare.getAttribute("src") === 'images/seat_own_booking.png') {
                thisSquare.setAttribute("src", 'images/seat_free.png');
                seatTaken -= 1;
            } else if (thisSquare.getAttribute("src") === 'images/seat_free.png') {
                thisSquare.setAttribute("src", 'images/seat_own_booking.png');
                seatTaken += 1;
            }
            $("#seatTaken").html(seatTaken);

        }
    </script>
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
