<?php
//THIS PAGE IS THE BACKEND FOR ACCEPTING REQUESTS 
include "connection.php";;
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
        $u=$_SESSION['userid'];
        $alist=$_POST['accep_list'];
        $plist=$_POST['place_list'];
        for($x=0;$x<sizeof($alist);$x++)
        {
            $q="UPDATE MESSAGES SET STATUS=1 WHERE SENDER ='$alist[$x]' AND RECIEVER='$u'AND TYPE='$plist[$x]'";
            mysqli_query($con,$q);
        }
        header("location:local_confirm.php");
    }
?>