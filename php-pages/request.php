<html>
<body>
<link rel="stylesheet" type="text/css" href="innerstyle.css">
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1> 
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
    if(isset($_POST['request']))
    {
        if($_POST['to']!="")
        {
            $from=$_SESSION['userid'];
            $to=$_POST['to'];
            $check="SELECT SENDER FROM MESSAGES WHERE SENDER='$from' AND RECIEVER='$to'";
            $check1=mysqli_query($con,$check);
            if(mysqli_num_rows($check1)>0)
            {
                echo "<center><b>"."you have already requested this person"."</center></b>";
            }
            else {
                $req="INSERT INTO MESSAGES VALUES ('$from','$to','home',0)";
            if(mysqli_query($con,$req))
            {
                echo "<center><b>"."message succesfully sent to ".$to."</center></b>";
            }
            }
        
        }
    }
?>
<html>
<body>
<p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
</body>
</html>