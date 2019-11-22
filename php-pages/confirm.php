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
    $cnf="SELECT SENDER,RECIEVER,TYPE FROM MESSAGES WHERE ( RECIEVER='$u' OR SENDER='$u') AND STATUS=1";
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
           $detail="SELECT EMAIL,NAME FROM INFO WHERE ENROLLMENT='$slist[$x]'";
           $detail1=mysqli_query($con,$detail);
           $detail2=mysqli_fetch_assoc($detail1);
           array_push($nlist,$detail2['NAME']);
           array_push($elist,$detail2['EMAIL']);
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
    <body>
    <table cellpadding=20px border=20px align=center>
    <tr>
    <td>NAME</td>
    <td> EMAIL </td> 
    <td> TYPE </td>
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
     </tr>
     </table>
    </body>
</html>