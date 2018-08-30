<!--?php include('error.php') ?-->
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        html{
            width: 100%; height:100%;
        }
        #container{
            height: 600px;
            width: 900px;
            margin-left: auto;
            margin-right: auto;
        }
        #header
        {
        height: 500px;
        margin-left: auto;
        margin-right: auto;
        color: orange;
        text-align: center;
        font-size: 30px;
        }
        #logo{
            height: 252;
            width: 280;
            position: relative;
            margin-left: 8pc;
            margin-right: 8pc;
            font-size: 18px;
            color: black;
        }
        #hr1{
        width: 124px;
        height: 2px;
        background-color: black;
        }
        #hr2{
        width: 50px;
        height: 2px;
        background-color: black;
        }
        .footer-contact-form{
            text-align: right;
        }


        * {box-sizing:border-box}       
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

.slideshow-container {
  width: 100%;
  height: 50%;
  position : relative;
  margin:auto;
}
#slider{
   height: 560px;
  width: 100%;
  position: relative;
  margin:0 auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
 
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
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="home.php">Home</a></li>
            <li class="active" style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a href="whydonor.php">Why Donate Blood</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="aboutnav.php">About Us</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="contactus.php">Contact Us</a></li>
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

    <div id="whole">
    <div id="container">
        <div id="header" style="position: relative;top: 30px;">
            <b style="position: relative;right: 200px; text-align:center;">Why donate blood</b>
            <hr id="hr1">
            <hr id="hr2">
        <center><div id="logo">
             <p>
                      <div>A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). Blood banks often participate in the collection process as well as the procedures that follow it.</div><div><br></div><div><br></div><div>Today in the developed world, most blood donors are unpaid volunteers who donate blood for a community supply. In poorer countries, established supplies are limited and donors usually give blood when family or friends need a transfusion (directed donation). Many donors donate as an act of charity, but in countries that allow paid donation some donors are paid, and in some cases there are incentives other than money such as paid time off from work. Donors can also have blood drawn for their own future use (autologous donation). Donating is relatively safe, but some donors have bruising where the needle is inserted or may feel faint.</div><div><br></div><div><br></div><div>Potential donors are evaluated for anything that might make their blood unsafe to use. The screening includes testing for diseases that can be transmitted by a blood transfusion, including HIV and viral hepatitis. The donor must also answer questions about medical history and take a short physical examination to make sure the donation is not hazardous to his or her health. How often a donor can give varies from days to months based on what he or she donates and the laws of the country where the donation takes place. For example, in the United States, donors must wait eight weeks (56 days) between whole blood donations but only seven days between platelet pheresis donations.</div>           </p><br><br>
            </div>
        </div>
    </div></center>
</div>
</body>
</html>