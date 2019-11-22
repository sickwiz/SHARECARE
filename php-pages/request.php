<?php
include "connection.php";
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
    if(isset($_POST['request']))
    {
        if($_POST['to']!="")
        {
            $from=$_SESSION['userid'];
            $to=$_POST['to'];
            $check="SELECT SENDER FROM MESSAGES WHERE SENDER='$from' AND RECIEVER='$to'";
            $check1=mysqli_query($con,$check);
            if(mysqli_num_rows($check1)>0)
            {
                echo "you have already requested this person";
            }
            else {
                $req="INSERT INTO MESSAGES VALUES ('$from','$to','home',0)";
            if(mysqli_query($con,$req))
            {
                echo "message succesfully sent to ".$to;
            }
            }
            
        }
    }
?>