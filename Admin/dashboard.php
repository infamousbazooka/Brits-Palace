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
    <?php
        $sql = "SELECT * FROM main";
        $result = $conn->query($sql);
        $a = $b = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $flag = 0;
                $datetime = strtotime($row['datetime']);
                $date = date('Y-m-d',$datetime);
                for ($i=0; $i < sizeof($a); $i++) { 
                    if ($a[$i]["date"] == $date) {
                        $a[$i]["value"] += 1;
                        $flag = 1;
                        break;
                    }
                }
                if ($flag == 0) {
                    $b["date"] = $date;
                    $b["value"] = 1;
                    array_push($a, $b);
                }
            }
        }
    ?>
    <script>var dbarray =<?php echo json_encode($a);?>;</script>
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
<style>
    footer{
        position: initial;
        bottom: initial;
    }
</style>
<script src="../js/table.js"></script>
<script src="../js/bootable.js"></script>
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