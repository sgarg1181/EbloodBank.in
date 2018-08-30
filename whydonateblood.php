<?php 
require_once('Include/DB.php');
include('Include/session.php');
?>

<html>
<head>
    <title>Why Donate Blood</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
    <style>       
        .row{
            font-size: 1.3em;
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
</head>
<body>
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
            <li style="font-size:1.2em; font-family:cursive; font-weight:bold; "><a href="feed.php">Feed</a></li>
            <li class="active" style="font-size:1.2em; font-family:cursive; font-weight:bold;"><a>Donate Blood</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="requestblood.php">Want Blood</a></li>
             <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="bloodtips.php">Blood Tips</a></li>
            <li style=" font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="aboutnav.php">About Us</a></li>
            <li style=" font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="contactus.php">Contact Us</a></li>
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

    <div class="row">
        <div class="col-sm-offset-2  col-sm-8">
        <div id="header" style="position: relative;top: 30px;">
            <center style="font-size:2em; color:white; text-align:center; background-color:black;">Why to donate blood</center><br>
            <center><div id="logo">
             <p>
            <div>A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.</div><div><br></div><div>Today in the developed world, most blood donors are unpaid volunteers who donate blood for a community supply. In poorer countries, established supplies are limited and donors usually give blood when family or friends need a transfusion (directed donation). Many donors donate as an act of charity, but in countries that allow paid donation some donors are paid, and in some cases there are incentives other than money such as paid time off from work. Donors can also have blood drawn for their own future use (autologous donation). Donating is relatively safe, but some donors have bruising where the needle is inserted or may feel faint.</div><div><br></div><div>Potential donors are evaluated for anything that might make their blood unsafe to use. The screening includes testing for diseases that can be transmitted by a blood transfusion, including HIV and viral hepatitis. The donor must also answer questions about medical history and take a short physical examination to make sure the donation is not hazardous to his or her health. How often a donor can give varies from days to months based on what he or she donates and the laws of the country where the donation takes place. For example, in the United States, donors must wait eight weeks (56 days) between whole blood donations but only seven days between platelet pheresis donations.</div> </p> </div>         <br><br>
            </center>
        </div>
        <center><a href="Donorregister.php"><span style="text-align:center" class="btn btn-Danger btn-lg block">Want To be a Donor</span></a></center><br>
    </div>
</div>    
<div class="row">
    <div id="Footer" style="possition:relative ; bottom:0px;">
<hr><p>Theme By | Shubham Garg |&copy;2017-2020 --- All right reserved.</p>
<a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;"  target="_blank">
<p>
This site is only used for blood bank services bloodbank.com have all the rights. no one is allow to distribute
copies other then <br> bloodbank.com &trade;  india &trade;</p><hr>
</a>
<div style="height: 10px; background: #27AAE1;"></div>	
</div>
 </div>

    </body>
</html>