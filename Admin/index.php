<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Brits Palace">
        <meta name="author" content="Magnus Fernandes. Amberzile">
        <title>Admin | Brits Palace</title>
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
    </head>
    <body>
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
                            <p>Administrator Dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                'use strict';
                $('ul.drop_menu [data-toggle=dropdown]').on('click', function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        </script>
    </body>
</html>
