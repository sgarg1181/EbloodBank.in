
<html><head>
    <title>Request Blood</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/public.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
    <style>
        h2{
            color: white;
            background-color: black;
        }
        .input-group{
    margin: 10px 5px 10px 5px;
}
        
        
        label{
            font-size: 1.3em;
            color: black;
                    }
        .bg{
            border: 1px solid grey;
    border-radius: 5px;
    height: 30px;
    width: 300%;
    padding: 5px 10px;
    font-size: 16px;
        }
        form{
            border: solid 2px black;
            width:250%;
            
        }
.input-group label{
    display: block;
    text-align: left;
    margin: 2px;
}
.input-group input{
    border: 1px solid grey;
    border-radius: 5px;
    height: 30px;
    width: 170%;
    padding: 5px 10px;
    font-size: 16px;
}
        .btn{
    border: none;
    border-radius: 5px;
    padding: 10px;
    font-size: 15px;
            display: block;
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
                <a class="navbar-brand" href="feed.php">BloodDonation.com </a></div>
            <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav" style="font-family: sans-serif;">
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a href="feed.php">Feed</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="whydonateblood.php">Donate Blood</a></li>
            <li class="active" style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a>Want Blood</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="bloodtips.php">Blood Tips</a></li>
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
        <div class="container">
	<div class="row">
        <br><br>
		<center><h2>Search For Donor:</h2></center>
        <br><br>
        <div class="col-sm-offset-4 col-sm-2">
        <form   method="post" action="requestbloodresults.php">
        <div class="input-group">
        <label>City:</label>
        <input type="text" name="city" placeholder="City" required>
        </div>
        <div class="input-group">
        <label>Blood Group:</label>
        <select name="bg" class="bg" required>
                    <option>O-</option>
                    <option>O+</option>
                    <option>A+</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select><br><br>
                
        </div>
        <div class="input-group">
            <button type="submit" name="search" class="btn btn-primary">search</button>
        </div>
        </form>
    </div>
</div><br><br>
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
                  </body>
</html>