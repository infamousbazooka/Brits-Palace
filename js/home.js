var j = 1;
var images = ["images/banner/1.jpg", "images/banner/2.jpg", "images/banner/3.jpg", "images/banner/4.jpg", "images/banner/5.jpg"];
var index = 1;
function rotateImage(){
    $('#change').hide('fast', function(){
        $(this).attr('src', images[index]);
        $(this).show('fast', function(){
            if (index == images.length-1){
                index = 0;
            } else {
                index++;
            }
        });
    });
}
$(document).ready(function(){
    setInterval (rotateImage, 5000);
});
function hideloader() {
    $('body').addClass('loaded');
    $('body').css('overflow', 'auto');
}
$( "#date" ).datepicker();
$( "#edate" ).datepicker();
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$('#subscribe #submit').click(function(event) {
    var file = "subscribe.php";
    var email = $('#subscribe #emails').val();
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
                $('#subscribe #emails').val("");
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
    var edate = $('#booking #edate').val();
    var type = $('#booking #type').val();
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
            data: {email: email, date: date, edate: edate, type: type, contact: contact},
            success: function(result){
                $('#booking #date').val("");
                $('#booking #edate').val("");
                $('#booking #type').val("");
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

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77356118-1', 'auto');
  ga('send', 'pageview');