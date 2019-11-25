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
        $id=$_SESSION['userid'];
        $s=sizeof($_POST['to']);
        $to=$_POST['to'];
        $place=$_POST['place'];
        for($x=0;$x<$s;$x++)
        {
            $rec=$to[$x];
            $pl=$place[$x];
            $check="SELECT SENDER FROM MESSAGES WHERE SENDER='$id' AND RECIEVER='$rec' AND TYPE='$pl'";
            $check1=mysqli_query($con,$check);
            $check2="SELECT SENDER,STATUS FROM MESSAGES WHERE SENDER='$rec' AND RECIEVER='$id' AND TYPE='$pl'";
            $check3=mysqli_query($con,$check2);
            if(mysqli_num_rows($check1)>0)
            {
                echo "<center><p><b>YOU HAVE ALREADY REQUESTED THIS PERSON </b></p></center>";
            }
            else if (mysqli_num_rows($check3)>0)
            {
                $check4=mysqli_fetch_assoc($check3);
                if($check4['STATUS']==0)
                {
                echo "<p><center><b>"."this person has already requested you <br>"."</b></center></p>";
                echo "<form action='inbox.php'><center><p><b>click to accept request</b></p></center> <br> <center><p><input type=submit class='but' value='accept'/></p></center>/> </form> ";
                }
                else
                {
                    echo "<center><p><b>THIS TRAVEL REQUEST IS ALREADY CONFIRMED </b></p></center> <br>";
                echo "<form action='confirm.php'><center><p><b>click to see details</b></p></center> <br><center><p><input type=submit class='but' value='DETAILS'</p></center>/> </form> ";
                }
            }
            else 
            {    # code...
            $q="INSERT INTO MESSAGES VALUES ('$id','$rec','$pl',0)";
            if(mysqli_query($con,$q))
            {
                echo "message ".$x." sent";
            }
            else {
                echo "message ".$x." failed";
            }
        }
        }
    }
?>