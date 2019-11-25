<?php
include "connection.php";
if($con)
echo "connected <br>";
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
    $userid=$_SESSION['userid'];
   // echo $_SESSION['username'];
    if(isset($_POST['submit']))
    {
        
       //echo "hello";
        $home="SELECT HOME FROM INFO WHERE ENROLLMENT='$userid'";
        $home1=mysqli_query($con,$home);
        $home2=mysqli_fetch_assoc($home1);
        $home3=$home2['HOME'];
        //echo $userid."<br>";
        echo $home3;
        $findhome="SELECT NAME,ENROLLMENT FROM INFO WHERE HOME='$home3'";
        $findhome1=mysqli_query($con,$findhome);
        if(mysqli_num_rows($findhome1)>0)
        {  
            $user=array(); 
            $id=array();
            while($findhome2=mysqli_fetch_assoc($findhome1))
            {
               if($findhome2['ENROLLMENT']!=$userid)
                {
                    //echo $findhome2['NAME']." ".$findhome2['ENROLLMENT']."<br>";
                    array_push($user,$findhome2['NAME']);
                    array_push($id,$findhome2['ENROLLMENT']);
                }
                $_SESSION['to']=$user;
                $_SESSION['toen']=$id;
                header("location:message.php");
            }
        }
        else {
            echo "not found";
        }
    }

?>