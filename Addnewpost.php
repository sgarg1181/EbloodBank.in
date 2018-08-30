<?php include("Include/functions.php");
        Confirm_Login(); ?>
<?php 
$category='';
if(isset($_POST["submit"]))
{   global $connection;
    $title=mysqli_real_escape_string($connection,$_POST['Title']);
    $post=mysqli_real_escape_string($connection,$_POST['Post']);
 $category=mysqli_real_escape_string($connection,$_POST['Category']);
    date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$datetime=strftime("%Y-%m-%d %H:%M:%S",$currenttime);
    $Admin=$_SESSION["username"];
 $image=$_FILES['Image']['name'];
 if(!is_dir("Upload/$Admin"))
 {
   mkdir("Upload/$Admin");   
 }
 $Target="Upload/$Admin/".basename($_FILES["Image"]["name"]);
    if(empty($_POST["Title"]))
    {
        $_SESSION["ErrorMessage"]="Title Must be Filled Out";
    }
    elseif(strlen($_POST["Title"])<2)
    {
        $_SESSION["ErrorMessage"]="Title should be atleast of 2 characters";
    }
    else{
        $sql="INSERT INTO admin_panel(datetime,title,image,category,author,post)
        Values('$datetime','$title','$image','$category','$Admin','$post')";
        $execute=mysqli_query($connection,$sql);
        	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
        if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed!!!!!!';
        }
        else{
            $_SESSION['SuccessMessage']='Added Successfully';
            $category='';
        }
        

    }
}
?>
<!DOCTYPE>
<html>
    <head>
    
    <title>Add New Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/dashboard.css">
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
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="#">Home</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold; " ><a href="feed.php" target="_blank">Feed</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="#">About Us</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="#">Services</a></li>
            <li style="font-family:cursive; font-size:1.2em; font-weight:bold;"><a href="#">Contact Us</a></li>
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
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 ">
            <br><br>
            <ul id="Side_Menu" class="nav nav-pills nav-stacked">
                <li ><a href="Dashboard.php"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li class="active"><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span> Add new post</a></li>
                <li ><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span> Catagories</a></li>
                <li><a href="Admins.php"><span class="glyphicon glyphicon-user"></span> Manage Admins</a></li>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
        <div class="col-sm-10">
        <h1>Add New Post</h1>
           <div><?php echo message();
               echo successmessage();?></div>
            <div>
            <form action="Addnewpost.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group">
                <label for="title">Title: </label>
                <input class="form-control" type="text" name="Title" id="title" placeholder="Title">
                </div>
                    <div class="form-group">
                <label for="categoryselsect">Category: </label>
                <select class="form-control" id="categoryselect" name="Category">
                        <?php   global $connection;
                $sql="Select * from category order by datetime desc";
                $execute=mysqli_query($connection,$sql);
                    while($rows=mysqli_fetch_array($execute))
                {
                    
                    $id=$rows['id1'];
                    $CategoryName=$rows['name'];    
                        ?>
                    <option><?php echo $CategoryName; ?></option>       
                    <?php }?>
                </select>
                    </div>
                    <div class="form-group">
                <label for="selectimage">Select Image: </label>
                <input type="file" class="form-control" name="Image" id="selectimage" >
                </div>
                    <div class="form-group">
                <label for="postarea">Post:</label>
                <textarea class="form-control"  name="Post" id="postarea" placeholder="Post information"></textarea>
                </div>
                    <br>
                    <button name="submit" class="btn btn-primary btn-block" >Add New Post</button>
                    <br>
                </fieldset>
                
                </form>
            
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