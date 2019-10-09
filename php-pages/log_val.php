<?php
echo "welcome <br>";
$user="sickwiz";
$l="localhost";
$p="2409";
$d="SHARECARE";
$con= mysqli_connect($l,$user,$p,$d);
if(isset($_POST['submit']))
{
   if(empty($_SESSION))
        session_start();             //starts the session
    $e=$_POST['enrollment'];
    $p=($_POST['password']);
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
            $sq="SELECT PASSWORD FROM LOGIN WHERE ENROLLMENT='$e'";
            $res=mysqli_query($con,$sq);
            $row=mysqli_fetch_assoc($res);
            if(password_verify($p,$row['PASSWORD']))
            {
                mysqli_query($con,"DELETE FROM FORGOT WHERE ENROLLMENT='$e'");
                $_SESSION['username']=$e;
                $_SESSION['password']=$p;
                header("location:login_home.php");
            }
            else
            {
               // echo "invalid password"; 
                $y=$x+1;  
                $inc="UPDATE FORGOT SET COUNTER=$y WHERE ENROLLMENT='$e' ";
                mysqli_query($con,$inc);
               // $c=5-$y;
               session_destroy();
                header("location:login.php");
               // echo "<br>".$c."attempts left";
            }
        }
    }
    else
    {
    $sq="SELECT PASSWORD FROM LOGIN WHERE ENROLLMENT='$e'";
    $res=mysqli_query($con,$sq);
    $row=mysqli_fetch_assoc($res);
    if(password_verify($p,$row['PASSWORD']))
    {
        //echo "logged in";
        $_SESSION['username']=$e;
        $_SESSION['password']=$p;
        header("location:login_home.php");
    }
    else
   {

  // echo "invalid password";
   $entry="INSERT INTO FORGOT VALUES(1,'$e')";
   mysqli_query($con,$entry);
   session_destroy();
   header("location:login.php");
   }
}
}
?>