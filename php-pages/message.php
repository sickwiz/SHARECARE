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
    echo $toname[$x]."  ".$toen[$x]."<br>";
}
?>
<html>
<script type=text/javascript>
function create_button()
{
    var x=document.getElementById('butarea');
    //var y="<input type='number' placeholder='enrollment'/> <br> <input type=button value='submit'/>";
    x.innerHTML="<input type='number' name='to' placeholder='enrollment'/> <br> <input type='submit' value='request' name='request'/>";
}
</script>
<form action="request.php" method="POST">
<span> REQUEST THE PERSON YOU WANT TO TRAVEL WITH </span>
<br>
<input type="button" onclick="create_button()" value="REQUEST SOMEONE"/>
<div id="butarea"> </div>
</form>
</html>
