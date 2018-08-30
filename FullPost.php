<?php 
require_once('Include/DB.php');
include('Include/session.php');
?>
<?php 
$name='';
$email='';
if(isset($_POST["Submit"]))
{   global $connection;
    $name=mysqli_real_escape_string($connection,$_POST['Name']);
    $email=mysqli_real_escape_string($connection,$_POST['Email']);
 $comment=mysqli_real_escape_string($connection,$_POST['Comment']);
 date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$datetime=strftime("%Y-%m-%d %H:%M:%S",$currenttime);
 $postid=$_GET['id'];
 if(empty($_POST["Name"])||empty($_POST["Email"])||empty($_POST["Comment"]))
    {
        $_SESSION["ErrorMessage"]="All field must be Filled Out";
    }
    elseif(strlen($_POST["Comment"])<10)
    {
        $_SESSION["ErrorMessage"]="Atleast 10 character comment ";
    }
    else{
          global $connection;
        $sql="INSERT INTO comments(datetime,name,email,comment,status,admin_panel_id)
        Values('$datetime','$name','$email','$comment','OFF','$postid')";
        $execute=mysqli_query($connection,$sql);
        if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed to add comment';
        }
        else{
            $_SESSION['SuccessMessage']='Comment Added Successfully';
            $name='';
            $email='';
        }
        

    }
}
?>


<html>
<head>
    <title>Full Blog Post</title>
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
                <a class="navbar-brand" href="feed.php">Blood Donation </a></div>
            <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav" style="font-family: sans-serif;">
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold; "><a href="feed.php" >Feed</a></li>
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
            <h1>Full Post</h1>
        </div>
        <div><?php echo message();
                 echo successmessage();?></div>
        <div class="row">
            <div class="col-sm-8">
            <?php  
                global $connection;
                if(isset($_GET['searchbutton'])){
                    $search=$_GET['search'];
                    $query= "SELECT * FROM admin_panel
		WHERE datetime LIKE '%$search%' OR title LIKE '%$search%'
		OR category LIKE '%$search%' OR post LIKE '%$search%' ORDER BY id desc"; }
                else{ $postidget=$_GET['id'];
                $query= "Select * from admin_panel where id=$postidget order by datetime desc";}
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
                        <p class="post"><?php echo $Post; ?></p>
                    </div>
                </div>
                <?php } ?>
                <br>
        <span style="font-size:1.3em;"><strong>Comments</strong></span>
        <?php
$connection;
$PostIdForComments=$_GET["id"];
$ExtractingCommentsQuery="SELECT * FROM comments
WHERE admin_panel_id='$PostIdForComments'";
$Execute=mysqli_query($connection,$ExtractingCommentsQuery);
while($DataRows=mysqli_fetch_array($Execute)){
	$CommentDate=$DataRows["datetime"];
	$CommenterName=$DataRows["name"];
	$Comments=$DataRows["comment"];


?>
<div class="CommentBlock">
	<img style="margin-left: 10px; margin-top: 10px;" class="pull-left" src="comment.png" width=70px; height=70px;>
	<p style="margin-left: 90px;" class="Comment-info"><?php echo $CommenterName; ?></p>
	<p style="margin-left: 90px;"class="description"><?php echo $CommentDate; ?></p>
	<p style="margin-left: 90px;" class="Comment"><?php echo nl2br($Comments); ?></p>
	
</div>

	<hr>
<?php } ?>
 <br><br>
        <span style="font-size:1.3em;"><strong>Share Your Thoughts About This Post.</strong></span>
       
        <br><br>
        <div class="row">
        <div class="col-sm-8">
        <form action="FullPost.php?id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data">
	<fieldset>
	<div class="form-group">
	<label for="Name"><span class="FieldInfo">Name:</span></label>
	<input class="form-control" type="text" name="Name" id="Name" placeholder="Name" value="<?php echo $name?>">
	</div>
	<div class="form-group">
	<label for="Email"><span class="FieldInfo">Email:</span></label>
	<input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $email ?>">
	</div>
	<div class="form-group">
	<label for="Comment"><span class="FieldInfo">Comment:</span></label>
	<textarea class="form-control" name="Comment" id="Comment"></textarea>
	<br>
<input class="btn btn-primary" type="Submit" name="Submit" value="Submit">
        </div>	</fieldset>
	<br>
</form>
    </div>
        </div>

            </div>
            <div class="col-sm-offset-1  col-sm-3">
            <h3>About Us</h3>
                <img class="img-responsive img-circle" src="img/blood-donation.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!</p>
                <br><br><br><br>
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

                <img class="img-responsive img-rounded" style="margin-top:10px; mrgin-left:10px; border:1px solid black;" src="Upload/<?php echo $Author?>/<?php echo $Image; ?>">
                    <p id="heading"><a href="FullPost.php?id=<?php echo $Postid; ?>"><?php echo htmlentities($Title); ?></a></p>
                    <p class="description"><?php echo $Datetime."<hr>"; ?></p>
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