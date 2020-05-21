<?php

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
    include "connection.php"
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="innerstyle.css">
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span> ENTRY FOR THE TRIP </span></font size></b></center>
   <hr>
    <form action="travel_val.php" method="POST">
    <ul>
    <center><b>PLAN FUTURE RIDE </b></center>
    <br><center><input type="text" name='des' placeholder="WHERE" id="itu"><input type="date" placeholder="date" name='dat' id="itu"></center><br>
</ul> 
<center><button align=center name="plan" class="but" type="submit" value="submit" >PLAN JOURNEY </button> </center> </form>
<p><center> <a href='login_home.php'><input type='button' class='but' value='back'></a></center></p>
        </form>
    </body>
</html>