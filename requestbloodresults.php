
<html><head>
    <title>Request Blood</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
                <link rel="stylesheet" href="css/public.css">
                <script src="js/jquery-3.2.1.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
    <style>
    
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
        <div class="container">
	<div class="row">
        <br><br>
    <?php
include("Include/DB.php");
 global $connection;
  $city=$_POST["city"];
 $bg=$_POST["bg"];
    $sql="Select count(*) from donor where city='$city' and bg='$bg'";
    $execute=mysqli_query($connection,$sql);
        $rows=mysqli_fetch_array($execute);
        $x=array_shift($rows);
        if($x==0){
            ?>
        <div class="panel panel-danger">
  <div class="panel-heading">
      <div class="panel-title">
    <?php echo $city; ?></div>
  </div>
  <div class="panel-body">
    <h2>We are Sorry No donor available in this city!!!!</h2>  
            </div>
        </div>
        
        
        <?php
        }
        else{
            $sql1="Select * from donor where city='$city' and bg='$bg'";
    $execute1=mysqli_query($connection,$sql1);
  while($row=mysqli_fetch_array($execute1)){  
  $name=$row["name"];
 $tel=$row["tel"];
 $email=$row["email"];
?>
        <div class="panel panel-primary">
  <div class="panel-heading">
      <div class="panel-title">
    <?php echo $city; ?></div>
  </div>
  <div class="panel-body">
    <h4 ><?php echo $name; ?></h4>
    <p >Contact-Info: <?php echo $tel; ?><br>Blood Group: <?php echo $bg; ?><br>Email: <?php echo $email; ?></p>
  </div>
</div>
      <?php }} ?>
 
            </div>
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