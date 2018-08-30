<!DOCTYPE html>
<html>
<head>
	<title>ebloodhome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    
<script type="text/javascript">
<!--
	var image1=new Image()
	image1.src="img/beach.png"

	var image2=new Image()
	image2.src="img/sunrise.png"
	
	var image3=new Image()
	image3.src="img/farm.png"

//-->
</script>
<style type="text/css">
	html{
			width: 100%; height:100%;
		}

	#contain{
	height: 550px;
	width: 100%;
	margin:0 auto;
	border: 1.5px solid black;
	position: relative;
	}
	#imag{
		{
	height: 550px;
	width: 85%;
	margin:0 auto;
	position: relative;
	}
	#contain>.btn{
		position: relative;
		width: 50px;
		height: 50px;	
		border: none;
		border-radius: 25px;
		top: 200px;
		background:black;
		color: white;
		font-size: 20px; 
	}
	#contain>#btn2{
		position: relative;
		float: right;
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

<div class="row" id="login-signup" >
    <center>
    <a href="login.php"><button style="background-color: orange;position: relative;top: 120px; left: 50px; width: 100px; height: 40px; font-size: 20px; border-radius: 50%;">login</button></a>
    <a href="register.php"><button style="background-color: orange;position: relative;top: 240px; width: 100px;right: 50px; height: 40px; font-size: 20px; border-radius: 50%;">sign up</button></a>
</center>
</div>
<div>
</div>
</body>
</html>