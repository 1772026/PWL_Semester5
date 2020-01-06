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


    <script language="javascript">
        var total_seat = document.getElementsByName("totalTickets").values();
        var prevSquare = null;
        var seatTaken = 0;

        function SelectSeat(thisSquare) {
            // if (prevSquare && prevSquare != thisSquare) {
            //     // Alter prevSquare image (if prevSquare is an <img> element)
            //     prevSquare.setAttribute("src", prevSquare.getAttribute("srcOff"));
            //     seatTaken -= 1;
            // }

            if(thisSquare.getAttribute("srcOff"))
            {
                thisSquare.setAttribute("src", thisSquare.getAttribute("srcOn"));
                seatTaken += 1;
            }
            else if(thisSquare.getAttribute("srcOn"))
            {
                thisSquare.setAttribute("src", thisSquare.getAttribute("srcOff"));
                seatTaken -= 1;
            }

            // Alter thisSquare to your active image
            // thisSquare.setAttribute("src", thisSquare.getAttribute("srcOn"));
            // seatTaken += 1;
            document.getElementById("seatTaken").innerHTML = seatTaken;
            prevSquare = thisSquare;
        }
    </script>

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
            style="background-color: rgb(20,20,20);">
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

    <!--    CODE    -->
    <!--    HERE    -->
    <div class="site-section pr-5" id="properties-section" align="center">
        <div class="container " style="border: 1px">
            <h1 class="text-black">SELECT SEATS</h1>
            <br>
            <table class="mt-4" align="center" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A4"></a></th>
                    <th width="10" align="center" valign="middle">A</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A12"></a></th>
                    <th width="10" align="center" valign="middle">A</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A16"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A17"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A17"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_A18"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_A18"></a></th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B4"></a></th>
                    <th width="10" align="center" valign="middle">B</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B12"></a></th>
                    <th width="10" align="center" valign="middle">B</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B16"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B17"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B17"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_B18"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_B18"></a></th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C4"></a></th>
                    <th width="10" align="center" valign="middle">C</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C12"></a></th>
                    <th width="10" align="center" valign="middle">C</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C16"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C17"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C17"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_C18"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_C18"></a></th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D4"></a></th>
                    <th width="10" align="center" valign="middle">D</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D12"></a></th>
                    <th width="10" align="center" valign="middle">D</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D16"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D17"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D17"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_D18"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_D18"></a></th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E4"></a></th>
                    <th width="10" align="center" valign="middle">E</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E12"></a></th>
                    <th width="10" align="center" valign="middle">E</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_E16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_E16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F4"></a></th>
                    <th width="10" align="center" valign="middle">F</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F12"></a></th>
                    <th width="10" align="center" valign="middle">F</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_F16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_F16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G4"></a></th>
                    <th width="10" align="center" valign="middle">G</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G12"></a></th>
                    <th width="10" align="center" valign="middle">G</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_G15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_G16"
                                                                     return false;"
                        style="cursor:hand"><img src="images/seat_free.png"
                                                 style="margin:3px"
                                                 width="20" height="20"
                                                 border="0" align="bottom"
                                                 id="img_G16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H4"></a></th>
                    <th width="10" align="center" valign="middle">H</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H12"></a></th>
                    <th width="10" align="center" valign="middle">H</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_H16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_H16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J4"></a></th>
                    <th width="10" align="center" valign="middle">J</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J12"></a></th>
                    <th width="10" align="center" valign="middle">J</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_J16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_J16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K4"></a></th>
                    <th width="10" align="center" valign="middle">K</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K12"></a></th>
                    <th width="10" align="center" valign="middle">K</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_K16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_K16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L4"></a></th>
                    <th width="10" align="center" valign="middle">L</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L12"></a></th>
                    <th width="10" align="center" valign="middle">L</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L13"
                                                                     srcOn="images/seat_own_booking.png"
                                                                     srcOff="images/seat_free.png"
                                                                     onclick="SelectSeat(this) ; return false;"><img
                                    src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                    align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                    onclick="SelectSeat(this);" id="img_L13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_L16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_L16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                <tr>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M1"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M1"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M2"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M2"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M3"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M3"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M4"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M4"></a></th>
                    <th width="10" align="center" valign="middle">M</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M5"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M5"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M6"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M6"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M7"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M7"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M8"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M8"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M9"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M9"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M10"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M10"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M11"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M11"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M12"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M12"></a></th>
                    <th width="10" align="center" valign="middle">M</th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M13"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M13"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M14"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M14"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M15"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M15"></a></th>
                    <th width="25" valign="middle" align="center"><a href="#" name="seats" id="link_M16"
                                                                     return false;"><img
                                src="images/seat_free.png" style="margin:3px" width="20" height="20" border="0"
                                align="bottom" srcOn="images/seat_own_booking.png" srcOff="images/seat_free.png"
                                onclick="SelectSeat(this);" id="img_M16"></a></th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                    <th width="25" valign="top" align="center">&nbsp;</th>
                </tr>
                </tbody>
            </table>
            <br>
            <h3 class="text-black">Seat Taken <h3 id="seatTaken">0</h3></h3>
            <input type="button" class="btn btn-primary" id="buttonConfirm" name="confirmButton" value="Confirm">
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