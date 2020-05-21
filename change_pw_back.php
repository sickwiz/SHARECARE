<?php
include "connection.php";
if(isset($_POST['submit']))
{
    if(empty($_SESSION))
{
  session_start();
  if(!isset($_SESSION['username']))
    header("location:login_home.php");
}
else if(!isset($_SESSION['username']))
{
  header("location:login_home.php");
}
$en=$_SESSION['userid'];
if(isset($_POST['submit']))
{
    $newp=$_POST['np'];
    $newp1=password_hash($newp,PASSWORD_ARGON2I);
    $change="UPDATE LOGIN SET PASSWORD='$newp1' WHERE ENROLLMENT='$en'";
    if(mysqli_query($con,$change))
    echo "password changed successfully";
    else {
        echo "password can't be changed";
    }
}
}
?>

