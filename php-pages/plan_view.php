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
    $id=$_SESSION['userid'];
    $view="SELECT DESTINATION,DATE FROM TRAVEL WHERE ENROLLMENT='$id'";
    $view1=mysqli_query($con,$view);
    $place=array();
    $date=array();
   // echo "out";
    while($view2=mysqli_fetch_assoc($view1))
    {
        //echo "in";
        array_push($place,$view2['DESTINATION']);
        array_push($date,$view2['DATE']);
    }
    $length=count($place);
    //echo $length;
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
     <script type=text/javascript>
     function create_del()
     {
         var x=document.getElementById('area');
         x.innerHTML="<center><input type=text placeholder='place' name='place'/> <input type='date' name='date'/><br><br><input type='submit' class='but' value='DELETE THIS' name='submit'/></center>";
     }
     </script>
     <link rel="stylesheet" type="text/css" href="innerstyle.css">
         <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span>THESE ARE YOUR TRAVEL PLANS</span></font size></b></center>
   <hr>
     <table border=3px align=center id="head">
     <tr> 
     <th> PLACE </th> <th>DATE </th>
     </tr>
     <tr> 
     <td> 
     <?php 
     for($x=0;$x<$length;$x++)
     {
         echo $place[$x]."<br> <hr>";
     }
     ?>
     </td>
     <td> 
     <?php 
     for($x=0;$x<$length;$x++)
     {
         echo $date[$x]."<br><hr>";
     }
     ?>
     </td>
     </tr>
     </table>
     <br>
     <center><input type=button  onclick=create_del() value="DELETE PLAN" class="but"/></center>
     <br>
     <form action='del_plan.php' method='POST'>
     <div id='area'> </div>
     </form>
     <p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
    </body>
</html>  