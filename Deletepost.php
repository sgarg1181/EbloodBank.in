<?php 
require_once('Include/DB.php');
include('Include/session.php');
?>
<?php 
$category='';
if(isset($_POST["submit"]))
{   global $connection;
        $id=$_GET['id'];
        $sql="delete from admin_panel  where id='$id'";
        $execute=mysqli_query($connection,$sql);
        if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed!!!!!!';
        }
        else{
             $_SESSION['SuccessMessage']='Deleted Successfully';
            header("Location:Dashboard.php");
           
            $category='';
 

}}
?>
<!DOCTYPE>
<html>
    <head>
    
    <title>Edit Post</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/dashboard.css">
    </head>
<body>    
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 ">
            <br><br>
            <ul id="Side_Menu" class="nav nav-pills nav-stacked">
                <li ><a href="Dashboard.php"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
                <li class="active"><a href="Addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span> Add new post</a></li>
                <li ><a href="Categories.php"><span class="glyphicon glyphicon-tags"></span> Catagories</a></li>
                <li><a href="Dashboard.php"><span class="glyphicon glyphicon-user"></span> Manage Admins</a></li>
                <li><a href="Dashboard.php"><span class="glyphicon glyphicon-comment"></span> Comments</a></li>
                <li><a href="Dashboard.php"><span class="glyphicon glyphicon-equalizer"></span> Live blog</a></li>
                <li><a href="Dashboard.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
        <div class="col-sm-10">
        <h1>Delete Post</h1>
           <div><?php echo message();
               echo successmessage();?></div>
            <div>
                
                    <?php   global $connection;
                    $id=$_GET['id'];
                $sql="Select * from admin_panel where id='$id'";
                $execute=mysqli_query($connection,$sql);
                    while($rows=mysqli_fetch_array($execute))
                {
                    
                    $Categorytobeupdated=$rows['category'];
                    $Titletobeupdated=$rows['title'];
                        $imagetobeupdated=$rows['image'];
                        $Posttobeupdated=$rows['post'];
                        $Author=$rows['author'];
                    }
                        ?>
            <form action="Deletepost.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="form-group">
                <label for="title">Title: </label>
                <input disabled class="form-control" type="text" name="Title" id="title" placeholder="Title" value='<?php echo $Titletobeupdated; ?>'>
                </div>
                    <div class="form-group">
                    <p><strong>Existing category:</strong> <?php echo $Categorytobeupdated; ?></p>
                <label for="categoryselsect">Category: </label>
                <select disabled class="form-control" id="categoryselect" name="Category">
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
                    <strong>Existing Image: </strong><img src="Upload/<?php echo $Author; ?>/<?php echo $imagetobeupdated; ?>" width="170"; height="70";><br>
                <label for="selectimage">Select Image: </label>
                <input disabled type="file" class="form-control" name="Image" id="selectimage" >
                </div>
                    <div class="form-group">
                <label for="postarea">Post:</label>
                <textarea disabled class="form-control"  name="Post" id="postarea" placeholder="Post information" ><?php echo $Posttobeupdated; ?></textarea>
                </div>
                    <br>
                    <button name="submit" class="btn btn-danger btn-block" >Delete Post</button>
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