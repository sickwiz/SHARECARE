<html>
<body>
<link rel="stylesheet" type="text/css" href="innerstyle.css">
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span> REQUEST DETAILS </span></font size></b></center>
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
    if(isset($_POST['request']))
    {
        if($_POST['to']!="")
        {
            $from=$_SESSION['userid'];
            $to=$_POST['to'];
            $s=sizeof($to);
            for($x=0;$x<$s;$x++)
            {
            $check="SELECT SENDER FROM MESSAGES WHERE SENDER='$from' AND RECIEVER='$to[$x]' AND TYPE='home'";
            $check1=mysqli_query($con,$check);
            $check2="SELECT SENDER,STATUS FROM MESSAGES WHERE SENDER='$to[$x]' AND RECIEVER='$from' AND TYPE='home'";
            $check3=mysqli_query($con,$check2);
            if(mysqli_num_rows($check1)>0)
            {
                echo "<center><p><b>YOU HAVE ALREADY REQUESTED .$to[$x]. </b></p></center>";
            }
            else if (mysqli_num_rows($check3)>0)
            {
                $check4=mysqli_fetch_assoc($check3);
                if($check4['STATUS']==0)
                {
                echo "<p><center><b>".$to[$x]."has already requested you <br>"."</b></center></p>";
                echo "<form action='inbox.php'><center><p><b>click to accept request</b></p></center> <br> <center><p><input type=submit class='but' value='accept'/></p></center>/> </form> ";
                }
                else
                {
                    echo "<center><p><b>".$to[$x]." has already confirmed your request </b></p></center>";
                echo "<form action='confirm.php'><center><p><input type=submit class='but' value=' SEE DETAILS'</p></center>/> </form> ";
                }
            }
            else {
                $req="INSERT INTO MESSAGES VALUES ('$from','$to[$x]','home',0)";
            if(mysqli_query($con,$req))
            {
                echo "<p><center><b>message succesfully sent to ".$to[$x]."</b> </center></p>";
            }
            }
            echo "<p><center> <a href='login_home.php'><input type='button' class='but' value='back'></a></center></p>";
        }
    }
    }
   
?>