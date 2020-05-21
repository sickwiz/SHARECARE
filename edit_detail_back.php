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
    $en=$_SESSION['userid'];
    if(isset($_POST['submit']))
    {
        echo "hello";
        if($_POST['email']!="")
        {
            $email=$_POST['email'];
            $change="UPDATE INFO SET EMAIL ='$email' WHERE ENROLLMENT='$en' ";
          if(mysqli_query($con,$change))
          {
            header("location:edit_detail.php");
          } 
          else {
            echo "error";
          } 
        }
        if($_POST['user']!="")
        {
            $name=$_POST['user'];
            $change="UPDATE INFO SET NAME ='$name' WHERE ENROLLMENT='$en' ";
          if(mysqli_query($con,$change))
          {
            header("location:edit_detail.php");
          } 
          else {
            echo "error";
          } 
        }
        if($_POST['home']!="")
        {
            $home=$_POST['home'];
            $change="UPDATE INFO SET HOME ='$home' WHERE ENROLLMENT='$en'";
          if(mysqli_query($con,$change))
          {
            header("location:edit_detail.php");
          } 
          else {
              echo "error";
          } 
        }
        if($_POST['sem']!="")
        {
            $sem=$_POST['sem'];
            $change="UPDATE INFO SET SEMESTER ='$sem' WHERE ENROLLMENT='$en'";
          if(mysqli_query($con,$change))
          {
            header("location:edit_detail.php");
          } 
          else {
            echo "error";
          } 
        }
    }
?>