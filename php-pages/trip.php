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
    <form action="travel_val.php" method="POST">
    <ul>
    <li id="it">PLAN FUTURE RIDE <li><input type="text" name='des' placeholder="WHERE" id="itu"><input type="date" placeholder="date" name='dat' id="itu"></li> </li><br>
</ul> 
<center><button align=center class="plan" name="plan" type="submit" value="submit" > plan journey </button> </center> </form>
        </form>
    </body>
</html>