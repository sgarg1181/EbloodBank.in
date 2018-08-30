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
        <div class="blog-header">
            <h1>Notifications</h1>
            <p class="lead">All the latest notifications about the blood camps coming soon....</p>
        </div>
        <div class="row">
            <div class="col-sm-8">
            <?php  
                global $connection;
                if(isset($_GET['searchbutton'])){
                    $search=$_GET['search'];
                    $query= "SELECT * FROM admin_panel
		WHERE datetime LIKE '%$search%' OR title LIKE '%$search%'
		OR category LIKE '%$search%' OR post LIKE '%$search%' ORDER BY id desc"; }
                elseif(isset($_GET["Page"]))
                {
                    $page=$_GET["Page"];
                    $showpostfrom=($page*4)-4;
                    if($page==0||$page<0){
                        $showpostfrom=0;
                    }
                    $query= "Select * from admin_panel order by datetime desc LIMIT $showpostfrom,4";
                }
                elseif(isset($_GET["Category"])){
                    $category=$_GET["Category"];
                    $query= "Select * from admin_panel where category='$category' order by datetime";
                }
                else{
                redirect_to("feed.php?Page=1");}
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
                <img class="img-responsive img-rounded" src="Upload/<?php echo $Author?>/<?php echo $Image; ?>" width="100%" height="100%">
                    <div class="caption">
                        <h2 id=heading><?php echo htmlentities($Title); ?></h2>
                        <p class="description">Category:<?php echo $Category?> Published on: <?php echo $Datetime ?></p>
                        <p class="post"><?php if(strlen($Post)>150)
                    { $Post=substr($Post,0,150).'...';}    
                    echo $Post; ?></p>
                    </div>
                    <a href="FullPost.php?id=<?php echo $Postid?>"><span class="btn btn-info">Read More &rsaquo; &rsaquo;</span></a>
                </div>
                <?php } ?>
                <?php if(isset($_GET["Page"])){ ?>
                <nav>
                    <ul class="pagination pull-left pagination-lg">
                <?php 
                        if($page>1)
                        {?>
                        <li><a href="feed.php?Page=<?php echo $page-1; ?>">&laquo;</a></li>
                            <?php } ?>
                        <?php 
                global $connection;
                $sql="SElect count(*) from admin_panel";
                $execute=mysqli_query($connection,$sql);
                $rows=mysqli_fetch_array($execute);
                $totalpost=array_shift($rows);
                $pages=$totalpost/4;
                $pages=ceil($pages);
                for($i=1;$i<=$pages;$i++)
                {
                    if($i==$page){
                ?>
                        <li class="active"><a href="feed.php?Page=<?php echo $i ?>"><?php echo $i ?></a></li>
                <?php }else{ ?>
                        <li><a href="feed.php?Page=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php }} if($page+1<=$pages){?>
                        <li><a href="feed.php?$<?php echo $page+1; ?>">&raquo;</a></li>
                        <?php }?>
                    </ul></nav>
                <?php } ?>
            </div>
            <div class="col-sm-offset-1  col-sm-3">
            <h3>About Us</h3>
                <img class="img-responsive img-circle" src="img/blood-donation.jpg" width="300px" height="400px">
            <p>'BloodDonation.com' is the first product resulted out of the community welfare initiative called 'People Project' from uSiS Technologies. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.

Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.

</p><br><br><br><br>
                <div class="panel panel-primary">
                <div class="panel-heading">
                        <div class="panel-title">Categories</div>
                    </div>
                    <div class="panel-body">
                        <?php   global $connection;
                $sql="Select * from category order by datetime desc";
                $execute=mysqli_query($connection,$sql);
                   while($rows=mysqli_fetch_array($execute))
                {   $id=$rows['id1'];
                    $category=$rows['name']; 
                 ?>
                <a id="heading" href="feed.php?Category=<?php echo $category; ?>"><?php echo $category."<hr>"; ?></a>        
                 <?php }
            ?>
                    </div>
                    <div class="panel-footer">BloodBank.com</div>
                
                </div>
                <br><br><br><br>
                <div class="panel panel-primary background">
                <div class="panel-heading">
                        <div class="panel-title">Recent Post</div>
                    </div>
                    <div class="panel-body">
                <?php
                    $sql="select *from admin_panel order by datetime desc LIMIT 0,4";
                    $execute=mysqli_query($connection, $query);
                while($rows=mysqli_fetch_array($execute))
                {
                    $Postid =$rows['id'];
                    $Datetime =$rows['datetime'];
                    $Title =$rows['title'];
                    $Image =$rows['image'];
                    $Author =$rows['author'];
                    if(strlen($Datetime)>11){$Datetime=substr($Datetime,0,11);}
                        ?>
                <div>

                <img class="pull-left" style="margin-top:10px; mrgin-left:10px; border:1px solid black;" src="Upload/<?php echo $Author?>/<?php echo $Image; ?>" width=120 height=60><br>
                    <p id="heading" style="margin-left: 130px; padding-top: 10px;"><a href="FullPost.php?id=<?php echo $Postid; ?>"><?php echo htmlentities($Title); ?></a></p>
                    <p class="description" style="margin-left: 130px;"><?php echo $Datetime."<hr>"; ?></p>
                    </div>
                        <?php } ?>
                    </div>
                    <div class="panel-footer">BloodBank.com</div>
                
                </div>
        </div>
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

    </body>
</html>