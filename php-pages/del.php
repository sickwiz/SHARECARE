<?php
// THIS PAGE DELETES THE MESSAGE REQUESTS
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
    if(isset($_POST['submit']))
    {
        echo "hello";
        $s=$_SESSION['userid'];
        $del=$_POST['del_list'];
        for($x=0;$x<sizeof($del);$x++)
        {
            $q="DELETE FROM MESSAGES WHERE SENDER='$del[$x]' AND RECIEVER ='$s'";
            mysqli_query($con,$q);
        }
        header("location:inbox.php");
    }
?>