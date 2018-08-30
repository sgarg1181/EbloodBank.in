<?php
include('Include/DB.php');
include('Include/session.php');
if(isset($_GET["id"]))
{
global $connection;
    $id=$_GET["id"];
    $sql="Delete from category Where id1='$id'";
    $execute=mysqli_query($connection,$sql);
    if(!$execute)
        {
            $_SESSION['ErrorMessage']='Failed!!!!!!';
            header("Location:Categories.php");
        }
        else{
            $_SESSION['SuccessMessage']='Category Deleted Successfully';
            header("Location:Categories.php");
        }
}

?>
