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
    </head>
    <body>
        <section class="topsection">
            <p>Dashboard - Administrator</p>
        </section>
        <div class="mainwrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <section class="section counter">
                            <h4><span>BOOKINGS</span></h4>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <table id="table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SR. NO.</th>
                                    <th>BOOKED ON</th>
                                    <th>BOOKING TIME</th>
                                    <th>DATE</th>
                                    <th>NO OF DAYS</th>
                                    <th>CONTACT</th>
                                    <th>EMAIL ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require "../connect.php";
                                    $sql = "SELECT * FROM bookings";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $data = strtotime($row['date']);
                                            $date = date('Y-m-d',$data);
                                            $time = date('H:i:s',$data);
                                            echo "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $date . "</td>
                                            <td>" . $time . "</td>
                                            <td>" . $row['start_date'] . "</td>
                                            <td>" . $row['days'] . "</td>
                                            <td>" . $row['contact'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                        </tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <section class="section counter">
                            <h4><span>HIT COUNTER</span></h4>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <div id="chartdiv"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <section class="section counter">
                            <h4><span>CONTACTS</span></h4>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <table id="contact" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SR. NO.</th>
                                    <th>NAME</th>
                                    <th>MESSAGE</th>
                                    <th>EMAIL ID</th>
                                    <th>PHONE</th>
                                    <th>ADDRESS</th>
                                    <th>CONTACTED ON</th>
                                    <th>CONTACT TIME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require "../connect.php";
                                    $sql = "SELECT * FROM contacts";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $data = strtotime($row['date']);
                                            $date = date('Y-m-d',$data);
                                            $time = date('H:i:s',$data);
                                            echo "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $row['name'] . "</td>
                                            <td>" . $row['message'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $row['phone'] . "</td>
                                            <td>" . $row['address'] . "</td>
                                            <td>" . $date . "</td>
                                            <td>" . $time . "</td>
                                        </tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <section class="section counter">
                            <h4><span>SUBSCRIBERS</span></h4>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <table id="contact" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SR. NO.</th>
                                    <th>EMAIL</th>
                                    <th>DATE</th>
                                    <th>TIME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require "../connect.php";
                                    $sql = "SELECT * FROM subscribers";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $data = strtotime($row['date']);
                                            $date = date('Y-m-d',$data);
                                            $time = date('H:i:s',$data);
                                            echo "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $date . "</td>
                                            <td>" . $time . "</td>
                                        </tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <section class="section counter">
                            <h4><span>SEND A BROADCAST</span></h4>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <div class="control-group form-group">
                            <div class="controls first">
                                <label>Subject </label>
                                <input type="text" class="form-control" id="subject" required data-validation-required-message="Please enter the subject." placeholder="Broadcast subject">
                                <p class="help-block"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls first">
                                <label>Message </label>
                                <textarea class="form-control" id="message" required data-validation-required-message="Please enter the message." placeholder="Broadcast message"></textarea>
                                <p class="help-block"></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="receive"></div>
                        <input type="button" value="SEND BROADCAST" class="btn btn-danger" id="broadcast">
                    </div>
                </div>
            </div>
        </div>
        <footer>
            © Copyright 2016. All Rights Reserved by <a href="../">BRITS PALACE</a>
        </footer>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/table.js"></script>
        <script src="../js/bootable.js"></script>
        <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
        <script src="https://www.amcharts.com/lib/3/serial.js"></script>
        <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
        <script type="text/javascript" src="../js/chart.js"></script>
        <script>
            $(document).ready(function() {
                $('#table').DataTable();
                $('#contact').DataTable();
            });
            $('#broadcast').click(function(event) {
                var subject = $('#subject').val();
                var message = $('#message').val();
                $.ajax({
                    url: 'broadcast.php',
                    type: 'POST',
                    data: {param1: subject, param2: message},
                    success: function(data){
                        $('#subject').val("");
                        $('#message').val("");
                        $("#receive").html(data);
                        setTimeout(function() {
                            $("#receive").html('')
                        }, 5000);
                    }
                });
                
            });
        </script>
    </body>
</html>
