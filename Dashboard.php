<?php include("Include/functions.php");
        Confirm_Login(); ?>
    
<!DOCTYPE>
<html>
    <head>
    
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
        <style>
            body{
    background-color: #2f4050;
}

.col-sm-10{
    background-color: white;
}
#Side_Menu a{
    color: azure;
}
#Side_Menu .active a{
    color: #FFFFFF;
    background-color: #27AAE1;
    font-weight: bold;
}
#Side_Menu a:hover{
    color: #ffffff;
    background-color: #1ab394;
    font-weight: bold;
    font-style: italic;
    display: block;
}
.col-sm-2 h1{
    font-style: italic;
    color: aliceblue;
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
            <li style=" font-size:1.2em; font-weight:bold;"><a href="#">Home</a></li>
            <li style=" font-size:1.2em; font-weight:bold; " ><a href="feed.php" target="_blank">Feed</a></li>
            <li style=" font-size:1.2em; font-weight:bold;"><a href="#">About Us</a></li>
            <li style=" font-size:1.2em; font-weight:bold;"><a href="#">Services</a></li>
            <li style=" font-size:1.2em; font-weight:bold;"><a href="#">Contact Us</a></li>
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
                <li class="active"><a href="Dashboard.php"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span> Add new post</a></li>
                <li><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span> Catagories</a></li>
                <li><a href="Admins.php"><span class="glyphicon glyphicon-user"></span> Manage Admins</a></li>
                <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
        <div class="col-sm-10">
        <div><?php echo message();
                 echo successmessage();?></div>
            <h1>Admin Dashboard</h1>
            <table class="table table-striped table-hover">
             <tr>
                <th>No.</th>
                <th>Post title</th>
                <th>Date and time</th>
                <th>Author</th>
                <th>Category</th>
                <th>Banner</th>
                <th>Comments</th>
                <th>Action</th>
                <th>Details</th>
             </tr>
                <?php  
                global $connection;
                $sql="select * from admin_panel";
                $execute=mysqli_query($connection,$sql);
                $srno=1;
                while($rows=mysqli_fetch_array($execute))
                {
                    $id =$rows['id'];
                    $Datetime =$rows['datetime'];
                    $Category =$rows['category'];
                    $Title =$rows['title'];
                    $Image =$rows['image'];
                    $Author =$rows['author'];
                    $Post =$rows['post'];
                ?>
                
                <tr>
                    <td><?php echo $srno++ ?></td>
                    <td><?php if(strlen($Title)>8){$Title=substr($Title,0,8).'..';} 
                    echo $Title 
                        ?></td>
                    <td><?php if(strlen($Datetime)>8){$Datetime=substr($Datetime,0,10).'..';} 
                        echo $Datetime ?></td>
                    <td><?php if(strlen($Author)>8){$Author1=substr($Author,0,8).'..';}
                            echo $Author1 ?></td>
                    <td><?php if(strlen($Category)>8){$Category=substr($Category,0,8).'..';}
                                echo $Category ?></td>
                    <td><img src="Upload/<?php echo $Author?>/<?php echo $Image; ?>" width="180" height="70"></td>
                    <td>Processing</td>
                    <td><a href="Editpost.php?id=<?php echo $id ?>"><span class="btn btn-warning">Edit</span></a> 
                        <a href="Deletepost.php?id=<?php echo $id ?>"><span class="btn btn-danger">Delete</span></a></td>
                    <td><a href="FullPost.php?id=<?php echo $id ?>" target="_blank"><span class="btn btn-primary" >Live Preview </span> </a></td>
                    
                </tr>
                
                <?php } ?>
                
            </table>
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