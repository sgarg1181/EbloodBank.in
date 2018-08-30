<?php 
include('Include/functions.php');
?>

<html>
<head>
    <title>Feed</title>
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
            <li  class="active" style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a>Feed</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="whydonateblood.php">Donate Blood</a></li>
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
        <div class="blog-header">
            <h1>Notifications</h1>
            <p class="lead">All the latest notifications about the blood camps coming soon....</p>
        </div>
        <div class="row">
            <div class="col-sm-8">
            <?php  
                global $connection;
                $query= "Select * from admin_panel order by datetime desc";
                $execute=mysqli_query($connection, $query);
                while($rows=mysqli_fetch_array($execute))
                {
                    $Postid =$rows['id'];
                    $Datetime =$rows['datetime'];
                    $Category =$rows['category'];
                    $Title =$rows['title'];
                    $Image =$rows['image'];
                    $Author =$rows['author'];
                    $Post =$rows['post'];
                ?>
                <div class="blogpost thumbnail">
                <img class="img-responsive img-rounded" src="Upload/<?php echo $Author?>/<?php echo $Image; ?>">
                    <div class="caption">
                        <h2 id=heading><?php echo $Title; ?></h2>
                        <p class="description">Category:<?php echo $Category?> Published on: <?php echo $Datetime ?></p>
                        <p class="post"><?php if(strlen($Post)>150)
                    { $Post=substr($Post,0,150).'...';}    
                    echo $Post; ?></p>
                    </div>
                    <a href="FullPost.php?id=<?php echo $Postid?>"><span class="btn btn-info">Read More &rsaquo; &rsaquo;</span></a>
                </div>
                <?php } ?>
                </div>
            <div class="col-sm-offset-1  col-sm-3">
            <h3>About Us</h3>
                <img class="img-responsive img-circle" src="img/blood-donation.jpg" width="300px" height="400px">
            <p>'BloodDonation.com' is the first product resulted out of the community welfare initiative called 'People Project' from uSiS Technologies. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.

Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
 
        </div>
        </div>
    </div>
    <iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/52de9561-cb1e-440c-a825-39895842bba9">
</iframe>
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