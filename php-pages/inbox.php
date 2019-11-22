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
    x.innerHTML+="<input type='number' name='del_list[]' placeholder='enrollment'/> ";
    var y=document.getElementById('del');
    y.innerHTML="<input type=button value='delete another' onclick='create_del()'/>";
}

function create_accep()
{
    var x=document.getElementById('en1');
    //var y="<input type='number' placeholder='enrollment'/> <br> <input type=button value='submit'/>";
    x.innerHTML+="<input type='number' name='accep_list[]' placeholder='enrollment'/> ";
    var y=document.getElementById('del1');
    y.innerHTML="<input type=button value='accept another' onclick='create_accep()'/>";
}
        </script>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <table align=center cellpadding=20px border=20px>
    THESE PEOPLE WANT TO TRAVEL WITH YOU <br>
    <hr>
    <tr>
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
    CLICK TO DELETE REQUEST <input type="button" onclick="create_del()" value="enter"/>
    <form action=del.php method=POST>
    <div id=en> </div>
    <div id=del> </div>
    <br>
    <input type=submit value='delete messages' name='submit'/>
    </form>
    CLICK TO accept REQUEST <input type="button" onclick="create_accep()" value="enter"/>
    <form action=accept.php method=POST>
    <div id=en1> </div>
    <div id=del1> </div>
    <br>
    <input type=submit value='accept request' name='submit'/>
    </form>

    <hr>
    THESE PEOPLE HAVE ACCEPTED YOUR TRAVEL REQUEST 
    <br>
    <hr>   
    </body>
</html>