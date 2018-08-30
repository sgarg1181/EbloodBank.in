<?php include("Include/functions.php");
        Confirm_Login(); ?>
<?php 
$username='';
$password='';
if(isset($_POST["submit"]))
    
{   global $connection;
    $username=mysqli_real_escape_string($connection,$_POST["Username"]);
    $password=mysqli_real_escape_string($connection,$_POST["Password"]);
    $confirmpassword=mysqli_real_escape_string($connection,$_POST["Confirmpassword"]);
    date_default_timezone_set("Asia/Kolkata");
$currenttime=time();
$datetime=strftime("%Y-%m-%d %H:%M:%S",$currenttime);
    $Admin=$_SESSION["username"];
    if(empty($_POST["Username"])||empty($_POST["Password"])||empty($_POST["Confirmpassword"]))
    {
        $_SESSION["ErrorMessage"]="All Entities Must be Filled Out";
    }
    elseif(strlen($_POST["Username"])<5)
    {
        $_SESSION["ErrorMessage"]="Too Short Username";
    }
  elseif(strlen($_POST["Password"])<5)
    {
        $_SESSION["ErrorMessage"]="Atleast 5 character password";
    }
 elseif($_POST["Password"]!==$_POST["Confirmpassword"])
    {
        $_SESSION["ErrorMessage"]="Password Doesn't Match";
    }
    
    else{
        
        $sql="INSERT INTO registeration(datetime,addedby,username,password)
        Values('$datetime','$Admin','$username','$password')";
        $execute=mysqli_query($connection,$sql);
        if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed!!!!!!';
        }
        else{
            $_SESSION['SuccessMessage']='Admin Added Successfully';
            $category='';
        }
    }
}
?>
<!DOCTYPE>
<html>
    <head>
    
    <title>Manage Admins</title>
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
            <li style="font-size:1.2em; font-weight:bold;"><a href="#">Home</a></li>
            <li style=" font-size:1.2em; font-weight:bold; " ><a href="feed.php" target="_blank">Feed</a></li>
            <li style="font-size:1.2em; font-weight:bold;"><a href="#">About Us</a></li>
            <li style="font-size:1.2em; font-weight:bold;"><a href="#">Services</a></li>
            <li style="font-size:1.2em; font-weight:bold;"><a href="#">Contact Us</a></li>
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
                <li><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span> Add new post</a></li>
                <li ><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span> Catagories</a></li>
                <li class="active"><a href="Admins.php"><span class="glyphicon glyphicon-user"></span> Manage Admins</a></li>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
        <div class="col-sm-10">
        <h1>Manage Admins</h1>
           <div><?php echo message();
               echo successmessage();?></div>
            <div>
            <form action="Admins.php" method="post">
                <fieldset>
                    <div class="form-group">
                <label for="categoryname">UserName: </label>
                <input class="form-control" type="text" name="Username" id="categoryname" placeholder="Username">
                </div>
                    <div class="form-group">
                <label for="categoryname">Password: </label>
                <input class="form-control" type="password" name="Password" id="categoryname" placeholder="Password" >
                </div>
                    <div class="form-group">
                <label for="categoryname">Confirm-Password: </label>
                <input class="form-control" type="password" name="Confirmpassword" id="categoryname" placeholder="Confirm Password">
                </div>
                    <br>
                    <button name="submit" class="btn btn-primary btn-block" >Add Admin</button>
                    <br>
                </fieldset>
                
                </form>
            
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover ">  
            <tr><th>Serial No.</th>
                <th>Date and Time</th>
                <th>Admin Name</th>
                <th>Added By</th>
                <th>Action</th>
            </tr>
            <?php   global $connection;
                $sql="Select * from registeration order by datetime desc";
                $execute=mysqli_query($connection,$sql);
                    $srno=0;
                while($rows=mysqli_fetch_array($execute))
                {
                    $id=$rows["id"];
                    $username=$rows['username'];
                    $datetime=$rows['datetime'];
                    $Addedby=$rows['addedby'];
                    $srno++;
                    ?>
                    <tr>
                    <td><?php echo $srno;?></td>
                    <td><?php echo $datetime;?></td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $Addedby;?></td>
                    <td><a href="DeleteAdmin.php?id=<?php echo $id; ?>"><span class="btn btn-danger btn-block">Delete</span></a></td>
                    </tr>   
                <?php    
                }
                ?>
                </table>
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