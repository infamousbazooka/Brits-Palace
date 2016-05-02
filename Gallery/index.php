<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../favicon.png" sizes="40x40" type="image/png">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Brits Palace">
        <meta name="author" content="Magnus Fernandes. Amberzile">
        <title>Gallery | Brits Palace</title>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/main_style.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="../js/jquery.min.js"></script>
        <noscript>
            <style>
                .es-carousel ul{
                    display:block;
                }
            </style>
        </noscript>
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">    
            <div class="rg-image-wrapper">
                {{if itemsCount > 1}}
                    <div class="rg-image-nav">
                        <a href="#" class="rg-image-nav-prev">Previous Image</a>
                        <a href="#" class="rg-image-nav-next">Next Image</a>
                    </div>
                {{/if}}
                <div class="rg-image"></div>
                <div class="rg-loading"></div>
                <div class="rg-caption-wrapper">
                    <div class="rg-caption" style="display:none;">
                        <p></p>
                    </div>
                </div>
            </div>
        </script>
        <style>
            .loader{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#f3f3f3;z-index:9999;perspective:1000px}#squarebg,#squaresm{background-color:#fff;transform-style:preserve-3d;top:50%;left:50%;position:absolute}#squarebg{margin-top:-100px;margin-left:-100px;width:200px;height:200px;border:3px solid #aa0114;-webkit-animation:spin 3s linear infinite;-moz-animation:spin 3s linear infinite -o-animation: spin 3s linear infinite;-ms-animation:spin 3s linear infinite;animation:spin 3s linear infinite}#squaresm{margin-top:-77px;margin-left:-77px;width:154px;height:154px;border:3px solid gold;-webkit-animation:spiny 3s linear infinite;-moz-animation:spiny 3s linear infinite -o-animation: spiny 3s linear infinite;-ms-animation:spiny 3s linear infinite;animation:spiny 3s linear infinite}.loader img{width:150px;height:150px;position:absolute;top:50%;left:50%;margin-top:-75px;margin-left:-75px}#animus{position:absolute;top:0;left:0;width:100%;height:100%;opacity:.5;cursor:pointer}@-webkit-keyframes spin{0%{-webkit-transform:rotateX(0);-moz-transform:rotateX(0);-o-transform:rotateX(0);-ms-transform:rotateX(0);transform:rotateX(0)}25%{-webkit-transform:rotateX(180deg);-moz-transform:rotateX(180deg);-o-transform:rotateX(180deg);-ms-transform:rotateX(180deg);transform:rotateX(180deg)}75%{-webkit-transform:none;-moz-transform:none;-o-transform:none;-ms-transform:none;transform:none}100%{-webkit-transform:rotateX(-360deg);-moz-transform:rotateX(-360deg);-o-transform:rotateX(-360deg);-ms-transform:rotateX(-360deg);transform:rotateX(-360deg)}}@keyframes spin{0%{-webkit-transform:rotateX(0);-moz-transform:rotateX(0);-o-transform:rotateX(0);-ms-transform:rotateX(0);transform:rotateX(0)}25%{-webkit-transform:rotateX(180deg);-moz-transform:rotateX(180deg);-o-transform:rotateX(180deg);-ms-transform:rotateX(180deg);transform:rotateX(180deg)}75%{-webkit-transform:none;-moz-transform:none;-o-transform:none;-ms-transform:none;transform:none}100%{-webkit-transform:rotateX(-360deg);-moz-transform:rotateX(-360deg);-o-transform:rotateX(-360deg);-ms-transform:rotateX(-360deg);transform:rotateX(-360deg)}}@-webkit-keyframes spiny{0%{-webkit-transform:rotateY(0);-moz-transform:rotateY(0);-o-transform:rotateY(0);-ms-transform:rotateY(0);transform:rotateY(0)}25%{-webkit-transform:rotateY(180deg);-moz-transform:rotateY(180deg);-o-transform:rotateY(180deg);-ms-transform:rotateY(180deg);transform:rotateY(180deg)}75%{-webkit-transform:none;-moz-transform:none;-o-transform:none;-ms-transform:none;transform:none}100%{-webkit-transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);-o-transform:rotateY(-360deg);-ms-transform:rotateY(-360deg);transform:rotateY(-360deg)}}@keyframes spiny{0%{-webkit-transform:rotateY(0);-moz-transform:rotateY(0);-o-transform:rotateY(0);-ms-transform:rotateY(0);transform:rotateY(0)}25%{-webkit-transform:rotateY(180deg);-moz-transform:rotateY(180deg);-o-transform:rotateY(180deg);-ms-transform:rotateY(180deg);transform:rotateY(180deg)}75%{-webkit-transform:none;-moz-transform:none;-o-transform:none;-ms-transform:none;transform:none}100%{-webkit-transform:rotateY(-360deg);-moz-transform:rotateY(-360deg);-o-transform:rotateY(-360deg);-ms-transform:rotateY(-360deg);transform:rotateY(-360deg)}}body{overflow:hidden}
        </style>
    </head>
    <body onload="hideloader()">
        <div class="loader">
            <div id="squarebg">
            </div>
            <div id="squaresm">
            </div>
            <img src="../images/square.png" alt="BRIT'S PALACE">
            <canvas id="animus"></canvas>
        </div>
        <script src="../js/animus.js"></script>
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
                    <a class="navbar-brand" href="index.html"><img src="../images/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right drop_menu">
                        <li><a href="../"> Home</a></li>
                        <li><a href="../Packages/"> Packages</a></li>
                        <li class="active"><a href="#"> Gallery</a></li>
                        <li><a href="../About/"> About us</a></li>
                        <li><a href="../Contact/">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mainwrapper">
            <header class="bread_crumb">
                <div class="pag_titl_sec">
                    <h1 class="pag_titl"> THE GALLERY </h1>
                </div>
                <div class="pg_links">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="lnk_pag"><a href="../"> Home </a> </p>
                                <p class="lnk_pag"> / </p>
                                <p class="lnk_pag"> Gallery </p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="lnk_pag"><a href="../"> Go Back to Home </a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="spacer-60"></div>
            <div class="container">
                <div class="content">
                    <div id="rg-gallery" class="rg-gallery">
                        <div class="rg-thumbs">
                            <div class="es-carousel-wrapper">
                                <div class="es-nav">
                                    <span class="es-nav-prev">Previous</span>
                                    <span class="es-nav-next">Next</span>
                                </div>
                                <div class="es-carousel">
                                    <ul>
                                        <li><a href="#"><img src="images/thumbs/1.jpg" data-large="images/1.jpg" alt="image01" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/2.jpg" data-large="images/2.jpg" alt="image02" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/3.jpg" data-large="images/3.jpg" alt="image03" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/4.jpg" data-large="images/4.jpg" alt="image04" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/5.jpg" data-large="images/5.jpg" alt="image05" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/6.jpg" data-large="images/6.jpg" alt="image06" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/7.jpg" data-large="images/7.jpg" alt="image07" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/8.jpg" data-large="images/8.jpg" alt="image08" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/9.jpg" data-large="images/9.jpg" alt="image09" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/10.jpg" data-large="images/10.jpg" alt="image10" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/11.jpg" data-large="images/11.jpg" alt="image11" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/12.jpg" data-large="images/12.jpg" alt="image12" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/13.jpg" data-large="images/13.jpg" alt="image13" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/14.jpg" data-large="images/14.jpg" alt="image14" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/15.jpg" data-large="images/15.jpg" alt="image15" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/16.jpg" data-large="images/16.jpg" alt="image16" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/17.jpg" data-large="images/17.jpg" alt="image17" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/18.jpg" data-large="images/18.jpg" alt="image18" /></a></li>
                                        <li><a href="#"><img src="images/thumbs/19.jpg" data-large="images/19.jpg" alt="image19" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-30"></div>
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
                                    <p> <a href="mailto:info@britspalace.com?Subject=Bookings%20contact"> Email: info@britspalace.com </a> </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h2 class="foot_title">
                                Useful Links
                            </h2>
                            <ul class="foot_nav">
                                <li> <a href="../">Home</a> </li>
                                <li> <a href="../Packages/">View Packages</a> </li>
                                <li> <a href="#">Gallery</a> </li>
                                <li> <a href="../About/">About Brits Palace</a> </li>
                                <li> <a href="../Contact/">Get in touch</a> </li>
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
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.elastislide.js"></script>
        <script type="text/javascript" src="js/gallery.js"></script>
        <script>
            function hideloader() {
                $('body').addClass('loaded');
                $('body').css('overflow', 'auto');
            }
        </script>
    </body>
</html>
