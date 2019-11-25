<html>
<body>
<link rel="stylesheet" type="text/css" href="innerstyle.css">
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span> REQUEST DETAILS </span></font size></b></center>
   <hr>
    </body>
    </html>
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
echo "<b><center>TRIP SUCCESSFULLY PLANNED FOR ".$en."</b></center>";
echo "<b><center>ON ".$dat."</b></center>";
  $quer="INSERT INTO TRAVEL VALUES ('$en','$des','$dat')";
  $s=mysqli_query($con,$quer);
   if(!$s)
    echo "sdfgh".mysqli_error;
   else 
echo"<center><b>PLEASE WAIT FOR THE CONFIRMATION FROM OTHER SIDE</b></center>";
}
echo "<p><center> <a href='login_home.php'><input type='button' class='but' value='back'></a></center></p>";

?>
