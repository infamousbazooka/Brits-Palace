<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Brits Palace">
        <meta name="author" content="Magnus Fernandes. Amberzile">
        <title>Home | Brits Palace</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.transitions.css" rel="stylesheet">
        <link href="css/flexslider.css" rel="stylesheet">
        <link href="css/main_style.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .loader{
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #fafafa;
                z-index: 9999;
            }
            #squarebg{
                margin: auto;
                position: relative;
                margin-top: -100px;
                top: 50%;
                width: 200px;
                height: 200px;
                padding: 20px;
                border: 3px solid #ef7351;
            }
            #squaresm{
                width: 154px;
                height: 154px;
                border: 3px solid #ef7351;
            }
        </style>
    </head>
    <body>
        <!-- <div class="loader">
            <div id="squarebg">
                <div id="squaresm">
                    
                </div>
            </div>
        </div> -->
        <div class="mainwrapper">
            <section class="top_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 top_lft">
                            <div class="soc_ico">
                                <ul>
                                    <li class="tweet">
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="fb">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="insta">
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="linkd">
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="ytube">
                                        <a href="#">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="inf_txt">
                                <p>Luxury Holiday Home in Goa</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 top_rgt">
                            <div class="submit_prop">
                                <h3 class="subm_btn">
                                    <a target="_blank" href="https://www.google.com/maps/@15.4255688,73.8999071,17.4z">
                                        <i class="fa fa-bars"></i>
                                        <span> GET DIRECTIONS </span>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right drop_menu">
                            <li class="active"><a href="#"> Home</a></li>
                            <li><a href="Showcase/"> Showcase</a></li>
                            <li><a href="Packages/"> Packages</a></li>
                            <li><a href="About/"> About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="mainwrapper">
                <header id="banner" class="stat_bann">
                    <div class="bannr_sec">
                        <img src="images/banner_5.jpg" alt="Banner">
                        <h1 class="main_titl">WELCOME TO BRITS PALACE</h1>
                        <div class="col-md-2"></div>
                        <h4 class="sub_titl col-md-8">A luxury living place and the best Goa has to offer. With the perfect blend of natural beauty and contemporary convenience, every room here is infused with light & fresh air and exudes a designer finish with chic furnishings and sleek lines.</h4>
                        <div class="col-md-2"></div>
                    </div>
                </header>
                <section id="srch_slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="srch_frm">
                                    <h3>Book this Holiday Home</h3>
                                    <form name="sentMessage" id="booking">
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label>Start date </label>
                                                <input type="date" class="form-control" id="date" required data-validation-required-message="Please enter a start date." placeholder="Date">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls col-md-6 first">
                                                <label>No. of days </label>
                                                <input type="number" class="form-control" id="days" required data-validation-required-message="Please enter the days." placeholder="No of days">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls first">
                                                <label>Contact No. </label>
                                                <input type="phone" class="form-control" id="contact" required data-validation-required-message="Please enter your contact number." placeholder="Contact number.">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls first">
                                                <label>Email ID. </label>
                                                <input type="phone" class="form-control" id="email" required data-validation-required-message="Please enter your Email ID." placeholder="Email ID.">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="success"></div>
                                        <button type="button" id="book" class="btn btn-primary">BOOK</button>
                                    </form>
                                    <div id="booked"></div>
                                </div>
                            </div>
                            <div class="col-md-8 slide_sec">
                                <div id="slider" class="silde_img flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="images/slider/slider_1.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE FACADE </p>
                                                <p class="sli_titl"> Brit's Palace is the ultimate mansion for luxury living in Goa. This divine palatial house is unlike anything you've seen. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_2.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE INTERIOR </p>
                                                <p class="sli_titl"> Built across 1500 sq.mts. with impressive amenities, nature & skyline views. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_3.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE KING & QUEEN'S ABODE </p>
                                                <p class="sli_titl"> This luxurious space has been expertly created to exceed all standards of quality. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_4.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE PRINCE'S PARADISE </p>
                                                <p class="sli_titl"> Offering you serenity and tranquil galore, we at Brit's palace deliver unexpected details and comforts. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_5.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE PRINCESS'S DREAMLAND </p>
                                                <p class="sli_titl"> Bright & spacious, this exquisite haven is guaranteed to refresh you & keep you coming back for more. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_6.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE LAZY LOUNGE </p>
                                                <p class="sli_titl"> Equipped with a 65' TV, the lounge at Brit's Palace is cozy & laid back allowing you to enjoy your favourite shows and movies in HD. </p>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="images/slider/slider_7.jpg" alt="Slider image" />
                                            <div class="slide-info">
                                                <p class="sli_price"> THE RUMOR MILL </p>
                                                <p class="sli_titl"> Keep yourself updated with the happenings from around the world at The Rumor Mill. Also chose from a wide range of novels, magazines etc. </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-60"></div>
                <section id="testim">
                    <div class="container">
                        <div class="row testim_sec m0">
                            <!-- <div class="testim_box">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel nibh vitae sapien lacinia finibus. Etia faucibus lorem in dui laoreet, eget euismod tellus lacinia.
                                </blockquote>
                                <div class="auth_sec">
                                    <img src="images/agents/testim_1.jpg" alt="">
                                    <h6 class="auth_nam">
                                        David Greer
                                        <span class="auth_pos">
                                        Ceo Marketing
                                    </span>
                                    </h6>
                                </div>
                            </div> -->
                            <div class="testim_box">
                                <h3>TESTIMONIALS ADDING SOON</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-60"></div>
                <section id="subscribe">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-right subs_info">
                                <h5>For Subscribers Only</h5>
                                <h2>Don't miss out on the latest news and deals</h2>
                            </div>
                            <div class="col-md-6 text-left subs_form">
                                <form name="sentMessage" id="subscribe">
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." placeholder="Put your email address">
                                            <button type="button" id="submit" class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </div>
                                </form>
                                <div id="subbed"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="spacer-60"></div>
            </div>
            <footer>
                <div class="footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 abt_sec">
                                <h2 class="foot_title">About Brits Palace</h2>
                                <p>
                                    Brit’s Palace is the ultimate mansion for luxury living in Goa. Completed in 2016, this divine palatial house is unlike anything you’ve seen.
                                </p>
                                <div class="spacer-20"></div>
                                <p>
                                    It is located in a central business area but in a quiet neighbourhood, offering you serenity and tranquil, galore.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h2 class="foot_title">Contact Info</h2>
                                <ul class="cont_info">
                                    <li><i class="fa fa-map-marker"></i>
                                        <p>St. Lawrence Agassaim, NH-17, Near Zuari Bridge, Agassaim-Goa</p>
                                    </li>
                                    <li><i class="fa fa-mobile"></i>
                                        <p> <a href="tel:+91-915-885-7777"> Phone: +91-915-885-7777 </a> </p>
                                    </li>
                                    <li><i class="fa fa-phone"></i>
                                        <p> <a href="tel: +91-832-2217377"> Phone: +91-832-2217377 </a> </p>
                                    </li>
                                    <li><i class="fa fa-envelope"></i>
                                        <p> <a href="mailto:britspalace@gmail.com?Subject=Bookings%20contact"> Email: britspalace@gmail.com </a> </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h2 class="foot_title">
                                    Useful Links
                                </h2>
                                <ul class="foot_nav">
                                    <li> <a href="#">Home</a> </li>
                                    <li> <a href="Showcase/">View Brits Palace</a> </li>
                                    <li> <a href="Packages/">View Packages</a> </li>
                                    <li> <a href="About/">About Brits Palace</a> </li>
                                    <li> <a href="Contact/">Get in touch</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_copy_right">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <p>&copy; Copyright 2016. All Rights Reserved by <a href="#">BRITS PALACE</a>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>Powered by <a href="http://www.amberzile.com" target="_blank"> Amberzile </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/main.js"></script>
        <script>
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            $('#subscribe #submit').click(function(event) {
                var file = "subscribe.php";
                var email = $('#subscribe #email').val();
                if (!isEmail(email)) {
                    $('#subbed').text('Please enter a valid email address.');
                    setTimeout(function() {
                        $("#subbed").html("")
                    }, 4000);
                } else{
                    $.ajax({
                        url: file,
                        type: 'POST',
                        data: {param: email},
                        success: function(result){
                            $('#subscribe #email').val("");
                            $("#subbed").html(result);
                            setTimeout(function() {
                                $("#subbed").html("")
                            }, 7000);
                        }
                    });
                }
            });
            $('#booking #book').click(function(event) {
                var file = "book.php";
                var date = $('#booking #date').val();
                var days = $('#booking #days').val();
                var email = $('#booking #email').val();
                var contact = $('#booking #contact').val();
                if (!isEmail(email)) {
                    $('#booked').text('Please enter a valid email address.');
                    setTimeout(function() {
                        $("#booked").html("")
                    }, 4000);
                } else{
                    $.ajax({
                        url: file,
                        type: 'POST',
                        data: {email: email, date: date, days: days, contact: contact},
                        success: function(result){
                            $('#booking #date').val("");
                            $('#booking #days').val("");
                            $('#booking #email').val("");
                            $('#booking #contact').val("");
                            $("#booked").html(result);
                            setTimeout(function() {
                                $("#booked").html("")
                            }, 7000);
                        }
                    });
                }
            });
        </script>
        <?php
            require "connect.php";
            $date = date('Y-m-d H:i:s');
            $sql = "INSERT into main (datetime)VALUES ('" . $date . "')";
            if ($conn->query($sql)) {
            };
        ?>
    </body>
</html>