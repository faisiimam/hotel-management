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
    <!-- <link rel="stylesheet" href="css/uikit.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/uikit.docs.min.css" /> -->

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

<body id="booking_page">

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Booking</h2>
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
    <section class="booking_area">
        <div class="container">
            <div class="booking">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#booking_info" aria-controls="booking_info" role="tab" data-toggle="tab"><i>1</i><span>booking info</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#personal_info" aria-controls="personal_info" role="tab" data-toggle="tab"><i>2</i><span>personal info</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#payment_info" aria-controls="payment_info" role="tab" data-toggle="tab"><i>3</i><span>payment info</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#booking_done" aria-controls="booking_done" role="tab" data-toggle="tab"><i>4</i><span>booking done</span></a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="booking_info">
                            <div class="booking_info_area">
                                <div class="facilities_name clearfix margin-bottom-150 margin-top-70">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-5">
                                            <img src="img/booking-step-one.jpg" alt="">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-7">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="section_title clearfix margin-bottom-5">
                                                        <h5 class="floatleft">Deluxe Room <span class="price floatright margin-left-15">($180 <sup class="day">/night</sup>)</span></h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="star margin-bottom-20">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-padding-left">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-one.png" alt="">
                                                            <p>Breakfast</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-four.png" alt="">
                                                            <p>Room service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-two.png" alt="">
                                                            <p>Air conditioning</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-ten.png" alt="">
                                                            <p>GYM fecility</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-eight.png" alt="">
                                                            <p>Free Parking</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-five.png" alt="">
                                                            <p>TV LCD</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <ul class="single_facilities_name clearul">
                                                        <li>
                                                            <img src="img/home-facilities-icon-three.png" alt="">
                                                            <p>Pet allowed</p>
                                                        </li>
                                                        <li>
                                                            <img src="img/home-facilities-icon-twelve.png" alt="">
                                                            <p>Wi-fi service</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- start hotel booking -->
                                        <div class="hotel_booking_area">
                                            <div class="container">
                                                <div class="hotel_booking margin-top-45">
                                                    <form role="form" action="#" class="">
                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                            <div class="room_book border-right-dark-1">
                                                                <h6>Choose</h6>
                                                                <p>Option</p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                            <div class="input-group border-bottom-dark-2">
                                                                <input class="date-picker" id="datepicker" placeholder="Arrival" type="text" />
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                                            <div class="input-group border-bottom-dark-2">
                                                                <input class="date-picker" id="datepicker1" placeholder="Departure" type="text" />
                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="row">
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="room" id="room">
                                                                            <option selected="selected" disabled="disabled">1 Room</option>
                                                                            <option value="Single">1 Room</option>
                                                                            <option value="Double">2 Room</option>
                                                                            <option value="Deluxe">3 Room</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="room" id="adult">
                                                                            <option selected="selected" disabled="disabled">1 Adult</option>
                                                                            <option value="Single">1 Adult</option>
                                                                            <option value="Double">2 Adult</option>
                                                                            <option value="Deluxe">3 Adult</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="room" id="child">
                                                                            <option selected="selected" disabled="disabled">0 Child</option>
                                                                            <option value="Single">0 Child</option>
                                                                            <option value="Double">1 Child</option>
                                                                            <option value="Deluxe">2 Child</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                                    <div class="input-group border-bottom-dark-2">
                                                                        <select class="form-control" name="room" id="child-2">
                                                                            <option selected="selected" disabled="disabled">Beds</option>
                                                                            <option value="Single">1 Beds</option>
                                                                            <option value="Double">2 Beds</option>
                                                                            <option value="Deluxe">3 Beds</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end hotel booking -->
                                    </div>
                                    <div class="row">
                                        <div class="about_booking_room clearfix margin-top-30">
                                            <div class="col-lg-7 col-md-7 col-sm-6">
                                                <div class="booking_room_details">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores?
                                                    </p>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-6">
                                                <div class="room_cost">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <tr class="room_table">
                                                                        <td class=""><span class="imp_table_text">1 Room</span> <br>Two Adult & 1 child</td>
                                                                        <td class=""><span class="imp_table_text">180$</span> <br> rate</td>
                                                                        <td class="">5 <br>night</td>
                                                                        <td class=""><span class="imp_table_text">400$</span></td>
                                                                    </tr>
                                                                    <tr class="tax_table">
                                                                        <td class=""><span class="imp_table_text">tax</span> <br> 10% on booking value</td>
                                                                        <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                        <td class="" colspan="3"><span class="imp_table_text">40$</span></td>
                                                                    </tr>
                                                                    <tr class="total_table">
                                                                        <td class=""><span class="imp_table_text">total</span></td>
                                                                        <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                        <td class="" colspan="3"><span class="imp_table_text">440$</span></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="booking_next_btn padding-top-30 margin-top-20 clearfix border-top-whitesmoke">
                                                <a href="#" class="btn btn-warning btn-sm floatright">Next</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="personal_info">
                            <div class="personal_info_area">
                                <div class="hotel_booking_area">
                                    <div class="hotel_booking margin-top-70 margin-bottom-125">
                                        <form role="form" action="#" class="">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="room" id="smoking_room">
                                                            <option selected="selected" disabled="disabled">Smoking Room</option>
                                                            <option value="Single">Smoking Room</option>
                                                            <option value="Double">Smoking Room</option>
                                                            <option value="Deluxe">Smoking Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="room" id="parking">
                                                            <option selected="selected" disabled="disabled">Parking</option>
                                                            <option value="Single">Parking</option>
                                                            <option value="Double">Parking</option>
                                                            <option value="Deluxe">Parking</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="room" id="with_pet">
                                                            <option selected="selected" disabled="disabled">with Pet</option>
                                                            <option value="Single">with Pet</option>
                                                            <option value="Double">with Pet</option>
                                                            <option value="Deluxe">with Pet</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" id="comment" placeholder="Any Specific request"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="booking_next_btn padding-top-30 margin-top-50 clearfix border-top-whitesmoke">
                                                        <a href="#" class="btn btn-warning btn-sm btn-info">back</a>
                                                        <a href="#" class="btn btn-warning btn-sm floatright">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="payment_info">
                            <div class="payment_info_area">
                                <div class="hotel_booking_area">
                                    <div class="hotel_booking margin-top-70 margin-bottom-125">
                                        <form role="form" action="#" class="">
                                            <div class="row">
                                                <div class="container">
                                                    <div class="payment_info_details margin-bottom-50">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil atque modi velit molestiae, repellendus iure sint possimus cumque, provident, dolorum unde laboriosam ut eius ex maiores quod repudiandae aut asperiores?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Card Holder Name">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Enter Creadit Card Number">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="room" id="enter_month">
                                                            <option selected="selected" disabled="disabled">Enter Month</option>
                                                            <option value="Single">Enter Month</option>
                                                            <option value="Double">Enter Month</option>
                                                            <option value="Deluxe">Enter Month</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                        <select class="form-control" name="room" id="enter_year">
                                                            <option selected="selected" disabled="disabled">Enter Year</option>
                                                            <option value="Single">Enter Year</option>
                                                            <option value="Double">Enter Year</option>
                                                            <option value="Deluxe">Enter Year</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container">
                                                    <div class="payment_system clearfix">
                                                        <div class="left_payment_system clearfix floatleft">
                                                            <ul class="clearul">
                                                                <li><a href="#"><img src="img/american-express.png" alt=""></a></li>
                                                                <li><a href="#"><img src="img/discover.png" alt=""></a></li>
                                                                <li><a href="#"><img src="img/paypal.png" alt=""></a></li>
                                                                <li><a href="#"><img src="img/visa.png" alt=""></a></li>
                                                                <li><a href="#"><img src="img/maestro.png" alt=""></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right_pay_now floatright">
                                                            <a href="#" class="btn btn-warning btn-sm btn-success">Pay Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="booking_next_btn padding-top-30 margin-top-40 clearfix border-top-whitesmoke">
                                                        <a href="#" class="btn btn-warning btn-sm btn-info">back</a>
                                                        <a href="#" class="btn btn-warning btn-sm floatright">Next</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="booking_done">
                            <div class="booking_done_area margin-top-65 margin-bottom-70">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-6">
                                        <div class="booking_done_info">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quas excepturi reprehenderit odit, accusantium, laborum natus est cumque molestias ex rem dolores harum, exercitationem quisquam tenetur qui non libero architecto.
                                            </p>
                                            <form role="form">
                                                <div class="checkbox booking_done_confirmation">
                                                    <a href="#"> <i class="fa fa-check-circle"></i> Your reservation was succefully submited!! </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-6">
                                        <div class="room_cost">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tr class="room_table">
                                                        <td class=""><span class="imp_table_text">1 Room</span> <br>Two Adult & 1 child</td>
                                                        <td class=""><span class="imp_table_text">180$</span> <br> rate</td>
                                                        <td class="">5 <br>night</td>
                                                        <td class=""><span class="imp_table_text">400$</span></td>
                                                    </tr>
                                                    <tr class="tax_table">
                                                        <td class=""><span class="imp_table_text">tax</span> <br> 10% on booking value</td>
                                                        <td class="" colspan="3"><span class="imp_table_text">40$</span></td>
                                                    </tr>
                                                    <tr class="total_table">
                                                        <td class=""><span class="imp_table_text">total</span></td>
                                                        <td class="" colspan="3"><span class="imp_table_text">440$</span> <br> <span class="total_pain_info">(paid)</span></td>
                                                    </tr>
                                                </table>
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
    </section>
    <!-- end other detect room section -->


    <?php
    include 'footer.php';
    ?>




    <!-- jquery library -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- uikit -->
    <!--
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-modal.js"></script>
        <script src="js/uikit-lightbox.js"></script>
        -->
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

</body>

</html>