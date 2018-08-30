<?php
include('Include/DB.php');
include('Include/session.php');
if(isset($_GET["id"]))
{
global $connection;
    $id=$_GET["id"];
    $sql="Delete from registeration Where id='$id'";
    $execute=mysqli_query($connection,$sql);
    if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed!!!!!!';
            header("Location:Admins.php");
        }
        else{
            $_SESSION['SuccessMessage']='Admin Deleted Successfully';
            header("Location:Admins.php");
        }
}

?>
