<?php
include "connection.php";
if($con)
if(isset($_POST['submit']))
{
    if(empty($_SESSION))
{
  session_start();
  if(isset($_SESSION['username']))
    header("location:login_home.php");
}
else if(isset($_SESSION['username']))
{
  header("location:login_home.php");
}
    $ques=$_POST['sec'];
    $e=$_POST['enrol'];
    $new_pass=$_POST['np'];
    $new_pass1=password_hash($new_pass,PASSWORD_ARGON2I);
    $q="SELECT SECURITY_PASS,SECURITY_QUES FROM LOGIN WHERE ENROLLMENT='$e'";
    $sq=mysqli_query($con,$q);
    $answer=$_POST['ans'];
    $freeze="SELECT COUNTER FROM FORGOT WHERE ENROLLMENT='$e'";
    $freeze1=mysqli_query($con,$freeze);
    if(mysqli_num_rows($freeze1)==1)
    {
        $count=mysqli_fetch_assoc($freeze1);
        $x=$count['COUNTER'];
        if($x>=5)
        echo "account siezed <br> contact admin";
        else
        {
    $match=mysqli_fetch_assoc($sq);
    if((password_verify($answer,$match['SECURITY_PASS']) && $match['SECURITY_QUES']==$ques))
        { 
            $pchange="UPDATE LOGIN SET PASSWORD='$new_pass1' WHERE ENROLLMENT='$e'";
            if(mysqli_query($con,$pchange))
            {
                echo "password changed succesfully";
                mysqli_query($con,"DELETE FROM FORGOT WHERE ENROLLMENT='$e'");
                header("location:login_home.php");
            }
            else
            {
                echo "failed";
            }
        }
    else
   { 
       echo "wrong security answer or question";
    $y=$x+1;  
    $inc="UPDATE FORGOT SET COUNTER=$y WHERE ENROLLMENT='$e' ";
    mysqli_query($con,$inc);
    echo "<br>".$c."attempts left";
    }
    }
}
else
{
    $match=mysqli_fetch_assoc($sq);
    if((password_verify($answer,$match['SECURITY_PASS']) && $match['SECURITY_QUES']==$ques))
        { 
            $pchange="UPDATE LOGIN SET PASSWORD='$new_pass1' WHERE ENROLLMENT='$e'";
            if(mysqli_query($con,$pchange))
            {
                echo "password changed succesfully";
                header("location:login_home.php");
            }
            else
            {
                echo "failed";
            }
        }  
        else
        {
            echo "wrong security answer or question";
            $entry="INSERT INTO FORGOT VALUES(1,'$e')";
            mysqli_query($con,$entry); 
        } 
}
}

