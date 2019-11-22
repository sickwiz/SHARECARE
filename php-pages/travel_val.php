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
if(isset($_POST['plan']))
{
  $des=$_POST['des'];
  $dat=$_POST['dat'];
	$en=$_SESSION['userid'];
echo $en;
echo " ".$dat;
  $quer="INSERT INTO TRAVEL VALUES ('$en','$des','$dat')";
  $s=mysqli_query($con,$quer);
   if(!$s)
    echo "sdfgh".mysqli_error;
   else 
echo"sucess";
}

?>
