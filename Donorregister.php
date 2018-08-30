<?php 
include("Include/DB.php");
include("Include/session.php");
if(isset($_POST["submit"]))
{
    global $connection;
    $name = mysqli_real_escape_string($connection, $_POST['firstname']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$bday = mysqli_real_escape_string($connection, $_POST['bday']);
	$bg = mysqli_real_escape_string($connection, $_POST['bg']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $city = mysqli_real_escape_string($connection, $_POST['city']);
    $state = mysqli_real_escape_string($connection, $_POST['state']);
    $tel = mysqli_real_escape_string($connection, $_POST['tel']);
    if(empty($gender))
    {
       $_SESSION['ErrorMessage']="Gender is required";
    }
    elseif(strlen($tel)>10)
    {
       $_SESSION['ErrorMessage']="Contact Number is incorrect";
    }
    
elseif(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email))
{
     $_SESSION['ErrorMessage']="Invalid Email Format";
}
 else
    {
        $sql="Insert into donor(name,email,bday,bg,gender,city,state,tel)
                Values('$name','$email','$bday','$bg','$gender','$city','$state','$tel')";
        mysqli_query($connection,$sql);
        $_SESSION['SuccessMessage']="Request registered successfully";
    }
}
?>


<html>
<head>
    <title>Donor Registration</title>
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/public.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
<style>
body{
color:#123456;
text-align:center;
}
a{
border-radius:5px;
}
em{
color:red;
}
    #Footer{
    padding:10px;
    border-top: 1px solid black;
    color:#eeeeee;
    background-color: #211f22;
    text-align: center;   
}

</style>
</head>
<body>
<div style="height: 10px; background: #27AAE1;"></div>
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
            <li  style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a href="feed.php">Feed</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="whydonateblood.php">Donate Blood</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="requestblood.php">Want Blood</a></li>
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
    <div>
    <div><?php echo message();
               echo successmessage();?></div>
    </div>
<h1 class="w3_inner_tittle">
                                Add Donor Info
                                </h1><br>
<em>* - Indicates required field</em>
<form action="Donorregister.php" method="post">
  Full name*:
  <input type="text" name="firstname" required><br><br>
  Gender*:<br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br><br>
  Birthday*:
  <input type="date" name="bday" required><br><br>
  E-mail*:
  <input type="email" name="email" required><br><br>
  Contact No.*:
  <input name="tel" type="tel" required><br><br>
  City*:
  <input type="text" name="city" required><br><br>
  State*:
  <input type="text" name="state" required><br><br>
 Blood Group*: 
                <select name="bg" required>
                    <option>O-</option>
                    <option>O+</option>
                    <option>A+</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select><br><br>
                
<input class="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
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