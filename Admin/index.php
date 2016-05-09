<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="../favicon.png" sizes="40x40" type="image/png">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Brit’s Palace is the ultimate mansion for luxury living in Goa. Visit this beautiful luxury hotel and experience the exotic way of holidaying in Goa.">
        <meta name="author" content="Magnus Fernandes. Amberzile">
        <title>Admin | Brits Palace</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/admin.css" rel="stylesheet">
        <link href="../css/table.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            footer{
                width: 100%;
                position: fixed;
                bottom: 0;
            }
        </style>
        <script>
            var file = "dashboard.php";
        </script>
    </head>
    <body>
        <section class="topsection">
            <p>Dashboard - Administrator</p>
        </section>
        <div class="mainwrapper" id="mainwrapper">
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <h3>Login</h3>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" required placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <input type="button" id="submit" value="Submit" class="btn btn-info">
                                </div>
                                <div id="display"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            © Copyright 2016. All Rights Reserved by <a href="../">BRITS PALACE</a>
        </footer>
        <script src="../js/jquery.min.js"></script>
        <?php
            session_start();
            if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
                echo "<script>$('#mainwrapper').load(file);</script>";
            }
        ?>
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <script>
            $("#submit").click(function(event) {
                var username = $("#username").val();
                var password = $("#password").val();
                if(username != "" && password != ""){
                    $.ajax({
                        url: 'login.php',
                        type: 'POST',
                        data: {param1: username, param2: password},
                        success: function(argument) {
                            $('#display').html(argument);
                        }
                    })
                    .done(function() {
                        console.log("success");
                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
                    
                }
            });
        </script>
    </body>
</html>
