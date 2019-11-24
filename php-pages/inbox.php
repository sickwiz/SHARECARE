<?php
include "connection.php";
// THIS PAGE SHOWS MESSAGES AND GIVES OPTION TO ACCEPT OR DELETE REQUESTS
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
    $mes="SELECT SENDER,TYPE FROM MESSAGES WHERE RECIEVER='$u' AND STATUS=0";
    $mes1=mysqli_query($con,$mes);
    if(mysqli_num_rows($mes1)>0)
    {
       // echo "hi";
        $t=array();  //type
        $s=array();  //sender 
        $sname=array();
    while($mes2=mysqli_fetch_assoc($mes1))
    {
        array_push($t,$mes2['TYPE']);
        array_push($s,$mes2['SENDER']);
        $x=$mes2['SENDER'];
        $name="SELECT NAME FROM INFO WHERE ENROLLMENT='$x'";
        $name1=mysqli_query($con,$name);
        $name2=mysqli_fetch_assoc($name1);
        array_push($sname,$name2['NAME']);
    }
    $length=count($t);
   // echo $length;
}
?>
<!DOCTYPE html>
 <html> 
 <script type=text/javascript>
      function create_del()
{
    var x=document.getElementById('en');
    //var y="<input type='number' placeholder='enrollment'/> <br> <input type=button value='submit'/>";
    x.innerHTML+="<center><p><input type='number' name='del_list[]' placeholder='enrollment'/></p></center>";
    var y=document.getElementById('del');
    y.innerHTML="<center><p><input type=button value='delete another' onclick='create_del()'  class='but'/></p></center>";
}

function create_accep()
{
    var x=document.getElementById('en1');
    //var y="<input type='number' placeholder='enrollment'/> <br> <input type=button value='submit'/>";
    x.innerHTML+="<center><p><input type='number' name='accep_list[]' placeholder='enrollment'/></p></center> ";
    var y=document.getElementById('del1');
    y.innerHTML="<center><p><input type=button value='accept another' onclick='create_accep()' class='but'/></p></center>";
}
        </script>
        <link rel="stylesheet" type="text/css" href="innerstyle.css">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1> 
   
   <div class=navbar>
    <center><p>
    <ul>
    <b align= center id="it"><input type="button" class="but" onclick="create_del()" value="DELETE REQUEST"/></b>
    <!-- <form action='del.php' method=POST>
    <div id=en> </div>
    <div id=del> </div>
    <b align= center id="it"><input type=submit class="but" value='DELETE MESSEGE' name='submit'/></b>
    </form> -->
     <b align= center id="it"><input type="button" class="but" onclick="create_accep()" value="ACCEPT REQUEST"/></b>
    <!-- <form action='accept.php' method=POST>
    <div id=en1> </div>
    <div id=del1> </div>
    <b align= center id="it"><input type=submit class="but" value='ACCEPT REQUESTS' name='submit'/></b>
    </form> -->
    </ul>
    </p></center>
</div>


    <br>   
    <table align=center cellpadding=20px border=10px BORDERCOLOR=RED>
    <br>
    <br>   
    <center><b>THESE PEOPLE WANT TO TRAVEL WITH YOU</b></center> <br>
    <hr>
    <tr id="head">
    <td> SENDER </td>
    <td> TYPE   </td>
    <td> SENDER'S NAME </td>
    </tr>
    <tr>
     <td> 
     <?php for($x=0;$x<$length;$x++)
      {  
          echo $s[$x]."<br>";
      }
      ?> 
     </td>
     <td>
     <?php 
     for($y=0;$y<$length;$y++)
     {
         echo $t[$y]."<br>";
     }
     ?>
     </td>
     <td>
     <?php 
     for($z=0;$z<$length;$z++)
     {
         echo $sname[$z]." <br> ";
     }
     ?>
     </td>
    </tr>
    </table>
    <form action='del.php' method=POST>
    <div id=en> </div>
    <div id=del> </div>
    <p><center><b align= center ><input type=submit class="but" value='DELETE MESSEGE' name='submit'/></b></center></p>
    </form>
    <form action='accept.php' method=POST>
    <div id=en1> </div>
    <div id=del1> </div>
    <p><center><b align= center><input type=submit class="but" value='ACCEPT REQUESTS' name='submit'/></b></center></p>
    </form>
   <p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
    </body>
</html>