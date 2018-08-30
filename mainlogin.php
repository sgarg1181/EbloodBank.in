<?php 
include('Include/session.php');
include('Include/functions.php')
?>
<?php 

$username='';
$password='';
if(isset($_POST["submit"]))
    
{   global $connection;
    $username=mysqli_real_escape_string($connection,$_POST["Username"]);
    $password=mysqli_real_escape_string($connection,$_POST["Password"]);
    if(empty($_POST["Username"])||empty($_POST["Password"]))
    {
        $_SESSION["ErrorMessage"]="All Entities Must be Filled Out";
    }
    else{
        $Found_Admin=Login_Attempt($username,$password);
        if($Found_Admin)
        {   $_SESSION["user"]=$Found_Admin["id"];
                $_SESSION["username"]=$Found_Admin["username"];
            $_SESSION["SuccessMessage"]="Welcome back {$_SESSION["username"]}";
            Redirect_to('Dashboard.php');
        }
        else {
            $_SESSION["ErrorMessage"]="Invalid Username/Password";
            Redirect_to('mainlogin.php');
        }
    }
}

?>
<!DOCTYPE>
<html>
    <head>
    
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/dashboard.css">
        <style>
            body{
                background-color: #ffffff;
            }
            .navbar-brand{
                font-size: 1.5em;
                color: blue;
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
                <a class="navbar-brand">BloodDonation.com</a></div>
            <div class="collapse navbar-collapse" id="collapse">
            </div> 
        </div>
    </nav>
     <div style="background:#27aae1; height:10px; margin-top: -20px;"></div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
        <br>
            <br><br><br>
            <h1>Welcome Back!</h1>
           <div><?php echo message();
               echo successmessage();?></div>
            <div>
            <form action="mainlogin.php" method="post">
                <fieldset>
                    <div class="form-group">
                <label for="categoryname">UserName: </label>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-envelope text-primary"></span>
                    </span>
                <input class="form-control" type="text" name="Username" id="categoryname" placeholder="Username" required oninvalid="this.setCustomValidity('Enter Username')" oninput="setCustomValidity('')" >
                </div>
                        </div>
                    <div class="form-group">
                        <label for="categoryname">Password: </label>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-lock text-primary"></span>
                    </span>
                <input class="form-control" type="password" name="Password" id="categoryname" placeholder="Password">
                </div>
                    </div>
                    <br>
                    <button name="submit" class="btn btn-info btn-block" >Login</button>
                    <br>
                </fieldset>
                
                </form>
            
            </div>
        </div>
      

    </body>

</html>