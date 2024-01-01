<?php
include 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="contact_us_page">

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Contact Us</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="img/special-offer-yellow-main.png" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->

    <!-- start other detect room section -->
    <div class="contact_google_map_area margin-bottom-75">
        <div class="container">
            <div class="contact_google_map">
                <div id="contactgoogleMap" style="width:100%;height:374px;"></div>
            </div>
        </div>
    </div>
    <!-- end other detect room section -->

    <!-- start contact mail area -->
    <section class="contact_mail_area margin-bottom-90">
        <div class="container">
            <div class="row">
                <div class="contact_mail">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="send_mail">
                            <div class="section_title margin-bottom-40">
                                <h4>send us an email</h4>
                            </div>
                            <form action="contact_process.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="First Name *" name="fname" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Last Name *" required name="lname">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Your Email Id *" required name="email" />
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="Phone Number *" required name="phone" />
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                        <input class="btn btn-warning btn-md" type="submit" name="submit" value="Submit Now" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact_info margin-top-65">
                            <div class="section_title margin-bottom-45">
                                <h4>Contact Info</h4>
                            </div>
                            <ul class="clearul">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    St Amsterdam finland, <br>
                                    United Stats of AKY16 8PN
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    1234567890
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    info@hotelbooking.com
                                </li>
                            </ul>
                            <div class="social_icons clearfix">
                                <ul class="clearul">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact mail area -->

    <?php
    include 'footer.php';
    ?>




    <!-- jquery library -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- uikit -->
    <script src="js/uikit.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="js/lightslider.js"></script>
    <!-- wow Animation -->
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->

    <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
    <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



    <!-- my js -->
    <script src="js/main.js"></script>

    <!-- Google maps API -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(-37.831208, 144.998499);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 15,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("contactgoogleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/google-pin-one.png'
            });

            var infowindow = new google.maps.InfoWindow({
                content: "united-states"
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</body>

</html>