<?php
session_start();

if(($_SESSION['usernn'])===1){

?>

<!doctype html>
<html lang="en">
<head>
    <title>Fakhfakhena Cocktail|Bill</title>
    <link rel="icon" href="img/titleimg.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body >


<div class="site-wrap">

    <nav class="site-menu" style="background-image:linear-gradient(to bottom,#EF3159,#f1b0b7)" >
        <div class="site-menu-inner" style="height: 400px;">
            <ul class="list-unstyled">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="menu.html">Our Menu</a></li>
                <li><a href="reservation.html">Reserve A Table</a></li>
                <li><a href="yourOrder.html">Delivery Order</a></li>
                <li><a href="login.html">LogIn</a></li>

            </ul>
        </div>
    </nav>

    <header class="site-header" >
        <div class="row align-items-center">
            <div class="col-5 col-md-3">
                <ul class="list-unstyled social">
                    <li><a href="https://www.facebook.com/fakhfakhyna/"><span class="fa fa-facebook"></span></a></li>
                    <!--<li><a href="#"><span class="fa fa-twitter"></span></a></li>-->
                    <li><a href="https://www.instagram.com/fakhfakhina_cocktail/"><span class="fa fa-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-2 col-md-6 text-center">
                <a href="index.html" class="site-logo">Home</a>
            </div>
            <div class="col-5 col-md-3 text-right menu-burger-wrap">
                <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

            </div>
        </div>

    </header> <!-- site-header -->

    <div class="main-wrap">
        <div class="cover_1 cover_sm">
            <div class="img_bg" style="background-image: url(img/backg.png);" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center" data-aos="fade-up">

                            <div class="section" data-aos="fade-up">
                                <div class="container">
                                    <div class="row justify-content-center mb-5">
                                        <div class="col-md-6  text-center">
                                            <br>
                                            <br>
                                            <h2 class="mb-3" style="color: #19692c">Show the Orders!</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 p-5 form-wrap">

                                            <div class="row mb-4">
                                                <div class="form-group col-md-12">
                                                    <div class="form-field-icon-wrap">
                                                        <span class="icon "></span>
                                                        <form action="getDelivery.php" method="get">
                                                            <input  type="submit" value="Delivery Orders" style="border:1px solid #EF3159;color: #EF3159" class="btn btn-primary btn-outline-primary btn-block" id="name" name="user">
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group col-md-12">
                                                    <div class="form-field-icon-wrap">
                                                        <form action="GetReserve.php" method="get">
                                                            <input  type="submit"  value="Table Reservation Orders" style="border:1px solid #EF3159;color: #EF3159" class="btn btn-primary btn-outline-primary btn-block" id="pass" name="pass">
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="form-field-icon-wrap">
                                                        <form action="logout.php" method="get">
                                                           <input  type="submit"  value="LogOut" style="border:1px solid #EF3159;color: #EF3159" class="btn btn-primary btn-outline-primary btn-block" id="logout" name="pass">


                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .cover_1 -->




    <!--</div> &lt;!&ndash; .main-wrap &ndash;&gt;-->





</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>

<script src="js/aos.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

<script src="js/main.js"></script>
</body>
</html>
    <?php
}
else {
    ?>
    <script type="text/javascript">
        window.open("login.html");
    </script>

<?php }
?>


