<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>ebloodhome</title>
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
	width: 85%;
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
    }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style2.css">	
</head>
<body>
<div class="wrap" id="body-wrap">
        <!--Start Header-->
    <div class="navbar-inverse">
        <div class="col-sm-5 col-xs-12">
            <div class="topbar-contact-info">
                <ul>
                    <li>
                        <i class="fa-phone"></i> +123456789 <small>&#124;&#160;</small>
                    </li>
                    <li>
                    <i class="fa-envelope"></i> 
                    <img src="mail.png" width="20px" height="20px">&#160;
                    </li> 
                    <li>ebloodbank.com       
                    </li>
                </ul>
            </div>    
        </div>

    <div class="col-sm-2 col-sm-offset-4 col-xs-12">
        <div class="header-social-icon">
            <ul>
                <li><a href="http://www.facebook.com/thesoftking">
               <i class="facebook-icon"><img src="facebook-icon.png" width="20px" height="20px"></i></a>&#160;&#160;</li>
                <li><a href="http://www.twitter/thesoftking"><i class="twitter-icon"><img src="twitter-icon.png" width="20px" height="20px"></i></a>&#160;&#160;</li>
                <li><a href="http://linkdin.com/thesoftking"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="http://google.com"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div id="back">
<div class="bar-wrap" id="bar">
    <div class="logobar-sm">
            <ul>
            <li>
            <i class="eBloodBank-icon"><a href="model.php"><img src="blood-icon.png" width="30px" height="30px"></a></i>
            </li>
            <b><i><li>&#160;eBlood</li></i></b>
            </ul>       
    </div>
    <div class="navbar-one-inverse" style="height: 800px; width: 980px; margin:none;">
        <ul>
         <li><a href="home.php">Home</a>&#160;&#160;&#160;</li>
            <li><a href="aboutnav.php">About Us</a>&#160;&#160;&#160;</li>
            <li><a href="whydonor.php"> WHY BECOME DONOR</a>&#160;&#160;&#160;</li>
            <li><a href="contactus.php"> contact</a>&#160;&#160;&#160;</li>
</ul>
<span style="position: relative;left: 175px; top: 70px;">
    <div class="header">
        <h2>Register</h2>
    </div>
    
    <form method="post" action="register.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
<?php include('errors.php') ?>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form></div>
</div>
</div>
</span>
</body>
</html> 