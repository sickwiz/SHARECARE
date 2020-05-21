<?php
include"connection.php";
if(empty($_SESSION))
{
    session_start();
    if(!isset($_SESSION['username']))
    header("location:login.php");
}
else if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    exit;
    } 
    if(isset($_POST['submit']))
    {
        $id=$_SESSION['userid'];
        $place=$_POST['place'];
        $dt=$_POST['date'];
        $del="DELETE FROM TRAVEL WHERE ENROLLMENT='$id' AND DESTINATION='$place' AND DATE='$dt'";
        if(mysqli_query($con,$del))
        {
            header("location:plan_view.php");
        }
        else {
            echo "can't delete the plan, an error occured";
        }
    }
?>