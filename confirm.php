<?php
// THIS PAGE exchanges information between users who have confirmed requests
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
    $u=$_SESSION['userid'];
    $slist=array();
    $nlist=array();
    $elist=array();
    $tlist=array();
    $moblist=array();
    $genlist=array();
    $semlist=array();
    $cnf="SELECT SENDER,RECIEVER,TYPE FROM MESSAGES WHERE ( RECIEVER='$u' OR SENDER='$u') AND STATUS=1 AND TYPE='home'";
    $cnf1=mysqli_query($con,$cnf);
    if(mysqli_num_rows($cnf1)>0)
    {
        //echo "123";
        while($cnf2=mysqli_fetch_assoc($cnf1))
        {
            if($cnf2['SENDER']==$u)
            {
                array_push($slist,$cnf2['RECIEVER']);
            }
            else 
            {
                array_push($slist,$cnf2['SENDER']);
            }
            array_push($tlist,$cnf2['TYPE']);
        }
        $length=count($tlist);
       // echo $length;
       for($x=0;$x<$length;$x++)
       {
           $detail="SELECT EMAIL,NAME,MOBILE,GENDER,SEMESTER FROM INFO WHERE ENROLLMENT='$slist[$x]'";
           $detail1=mysqli_query($con,$detail);
           $detail2=mysqli_fetch_assoc($detail1);
           array_push($nlist,$detail2['NAME']);
           array_push($elist,$detail2['EMAIL']);
           array_push($moblist,$detail2['MOBILE']);
           array_push($genlist,$detail2['GENDER']);
           array_push($semlist,$detail2['SEMESTER']);
       }
    }
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
    <link rel="stylesheet" type="text/css" href="innerstyle.css">
    <body>
    <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1> 
    <table cellpadding=20px border=20px align=center>
    <center><b>YOUR CONFIRM TRIPS ARE AS FOLLOWS</b></center> <br>
    <hr>
    <tr id="head">
    <td>NAME</td>
    <td> EMAIL </td> 
    <td> PLACE </td>
    <td> MOBILE </td>
    <td> GENDER </td>
    <td> SEMESTER </td>
     </tr>
     <tr>
     <td> <?php
     for($y=0;$y<$length;$y++)
     {
         echo $nlist[$y]."<br>";
     } 
     ?>
     </td>
     <td>
     <?php
      for($y=0;$y<$length;$y++)
      {
          echo $elist[$y]."<br>";
      } 
     ?>
      </td>
      <td>
     <?php
      for($y=0;$y<$length;$y++)
      {
          echo $tlist[$y]."<br>";
      } 
     ?>
      </td>
      <td>
     <?php
      for($y=0;$y<$length;$y++)
      {
          echo $moblist[$y]."<br>";
      } 
     ?>
      </td>
      <td>
     <?php
      for($y=0;$y<$length;$y++)
      {
          echo $genlist[$y]."<br>";
      } 
     ?>
      </td>
      <td>
     <?php
      for($y=0;$y<$length;$y++)
      {
          echo $semlist[$y]."<br>";
      } 
     ?>
      </td>
     </tr>
     </table>
     <center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center>
    </body>
</html>