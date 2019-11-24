<html>
<body>
<link rel="stylesheet" type="text/css" href="innerstyle.css">
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span> PERSONS FROM YOUR HOME TOWN </span></font size></b></center>
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
$toname=$_SESSION['to'];
$toen=$_SESSION['toen'];
$arrlength=count($toname);
//echo $arrlength;
//echo $toname[0];
for($x=0;$x<$arrlength;$x++)
{
    echo "<b><center>".$toname[$x]."  ".$toen[$x]."</center><br></b>";
}
?>
<html>
<script type=text/javascript>
function create_button()
{
    var x=document.getElementById('butarea');
    //var y="<input type='number' placeholder='enrollment'/> <br> <input type=button value='submit'/>";
    x.innerHTML="<center><input type='number' name='to' placeholder='enrollment'/> <br> <input type='submit' class='but' value='request' name='request'/></center>";
}
</script>
 
<form action="request.php" method="POST">
<br>
<p><center><input type="button" class="but" onclick="create_button()" value="REQUEST SOMEONE"/></center></p>
<div id="butarea"> </div>
<br>
<p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
</form>
</html>
