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
            $check2="SELECT SENDER FROM MESSAGES WHERE SENDER='$to' AND RECIEVER='$from'";
            $check3=mysqli_query($con,$check2);
            if(mysqli_num_rows($check1)>0)
            {
                echo "YOU HAVE ALREADY REQUESTED THIS PERSON ";
            }
            else if (mysqli_num_rows($check3)>0)
            {
                echo "this person has already requested you <br>";
                echo "<form action='inbox.php'>click to accept request <input type=submit value='accept'/> </form> ";
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