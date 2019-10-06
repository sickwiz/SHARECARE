<?php
$user="sickwiz";
$l="localhost";
$p="2409";
$d="SHARECARE";
$con= mysqli_connect($l,$user,$p,$d);
if($con)
echo "inside <br>";
if(isset($_POST['submit']))
{
    $ques=$_POST['sec'];
    $e=$_POST['enrol'];
    $new_pass=$_POST['np'];
    $new_pass1=password_hash($new_pass,PASSWORD_ARGON2I);
    $q="SELECT SECURITY_PASS,SECURITY_QUES FROM LOGIN WHERE ENROLLMENT='$e'";
    $sq=mysqli_query($con,$q);
    if($sq)
        $answer=$_POST['ans'];
        $match=mysqli_fetch_assoc($sq);
        if((password_verify($answer,$match['SECURITY_PASS']) && $match['SECURITY_QUES']==$ques)
        { 
            $pchange="UPDATE LOGIN SET PASSWORD='$new_pass1' WHERE ENROLLMENT='$e'";
            if(mysqli_query($con,$pchange))
            echo "password changed succesfully";
            else
            echo "failed";
        }
    else
    echo "wrong security answer or question";
}