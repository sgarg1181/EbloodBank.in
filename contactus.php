<?php  include('comm.php') ?>
<!DOCTYPE>
<html>
    <head><META http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Contatc Us</title>
           <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
    
        <style>
            
            input,textarea{
                margin: 3px 3px 3px 3px;
                padding: 2px 2px 2px 2px;
                border: solid 2px black;
            }
            b,td{
                font-size: 1em;
                color: black;
            }
            #Footer{
    padding:10px;
    border-top: 1px solid black;
    color:#eeeeee;
    background-color: #211f22;
    text-align: center; 
    overflow:hidden;
}

        </style>
</head><body>
        <div style="background:#27aae1; height:10px;"></div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="feed.php">Blood Donation </a></div>
            <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav" style="font-family: sans-serif;">
            <li  style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a href="feed.php">Feed</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="whydonateblood.php">Donate Blood</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="requestblood.php">Want Blood</a></li>
             <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="bloodtips.php">Blood Tips</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="aboutnav.php">About Us</a></li>
            <li class="active" style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a>Contact Us</a></li>
            </ul>
        <form action="feed.php" class="navbar-form navbar-right">
            <div class="form-group">
            <input type="text" class="form-sontrol" name="search" placeholder="Search">
            </div>
            <button class="btn btn-info" name="searchbutton">Go</button>
            </form>
            </div> 
        </div>
    </nav>
    <div style="background:#27aae1; height:10px; margin-top: -20px;"></div>
    
<div style="position: relative;top: 25px; margin: none">
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
var mark;
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(30.3544,76.3626),
    zoom:15,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
mark = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 30.3544, lng: 76.3626}
        });
    var infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        service.getDetails({
          placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
        }, function(place, status) {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            var marker = new google.maps.Marker({
              map: map,
              position: place.geometry.location
            });
            google.maps.event.addListener(marker, 'click', function() {
              infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                'Place ID: ' + place.place_id + '<br>' +
                place.formatted_address + '</div>');
              infowindow.open(map, this);
            });
          }
        });

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgDiofv_AnQ1RewV6MCB0ghmOWVcU0zb4&callback=myMap"></script>
</div>
<div id="back">
<span style="position: relative;top: 60px;left: 60px;">
<h1 style="font-size: 30px; position: relative;left: 400px;">Contact Us</h1>
<center> <form action="http://www.SnapHost.com/captcha/send.aspx" method="post" target="_blank" onsubmit="try {return window.confirm(&quot;You are submitting information to an external page.\nAre you sure?&quot;);} catch (e) {return false;}">
<input name="skip_WhereToSend" type="hidden" value="sgarg1181@gmail.com">
<input name="skip_SnapHostID" type="hidden" value="NWUTXJ2P43XD">
<input name="skip_WhereToReturn" type="hidden" value="http://127.0.0.1/phpcms/contactus.php">
<input name="skip_Subject" type="hidden" value="Contact Us Form">
<input name="skip_ShowUsersIp" type="hidden" value="1">
<input name="skip_SendCopyToUser" type="hidden" value="1">

<table border="0" cellpadding="5" cellspacing="0" width="600">
<tr>
<td><b>Name*:</b></td>
<td><input name="Name" type="text" maxlength="60" required placeholder="Enter Name"  oninvalid="this.setCustomValidity('Enter User Name Here')"oninput="setCustomValidity('')"  style="width:350px"></td>
</tr><tr>
<td><b>Phone number:</b></td>
<td><input name="PhoneNumber" type="number" length="43" placeholder="Enter Mobile number" style="width:350px"></td>
</tr><tr>
<td><b>Email address*:</b></td>
<td><input name="FromEmailAddress" type="text" maxlength="60" placeholder="Enter your email" required oninvalid="this.setCustomValidity('Enter User Name Here')"oninput="setCustomValidity('')" style="width:350px"></td>
</tr><tr>
<td><b>Comments and questions*:</b></td>
<td><textarea name="Comments" placeholder="Add your comments here" rows="7" cols="40" style="width:350px; height: fixed;"></textarea></td>
</tr><tr>
<td colspan="2" align="center"> <br>
<table border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" style="padding-bottom:18px">
<tr valign="top"><td> <i>Enter web form code*:</i>
<input name="skip_CaptchaCode" type="text" style="width:80px" maxlength="6" required>
</td><td>
<a href="http://www.snaphost.com/captcha/ReadyForms/ContactUsForm.aspx" target="_blank"><img alt="Contact Us form" title="HTML code for Contact Us form" style="margin-left:20px" src="http://www.SnapHost.com/captcha/CaptchaImage.aspx?id=NWUTXJ2P43XD&amp;ImgType=2"></a><br>
<a href="contactus.php"><span style="font-size:12px">reload image</span></a> </td></tr>
</table> <br>
<span style="position: relative;top: 10px;">
* - required fields.              
<input name="comment" type="submit" value="Submit" style="position: relative;left:20px"></span>
</td></tr>
</table><br>
</form></center></span>
    <div>
    <br><br>
        </div>
    <div id="Footer">
<hr><p>Theme By | Shubham Garg |&copy;2017-2020 --- All right reserved.</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;"  target="_blank">
<p>
This site is only used for blood bank services bloodbank.com have all the rights. no one is allow to distribute
copies other then <br> bloodbank.com &trade;  india &trade;</p><hr>
</a>
	
</div>
<div style="height: 10px; background: #27AAE1;"></div> 

</body></html>