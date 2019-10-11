<?php
$user="sickwiz";
$l="localhost";
$p="2409";
$d="SHARECARE";
$con= mysqli_connect($l,$user,$p,$d);
if($con)
{
    if(isset($_POST["submit"]))
    {
        $en=$_POST['enrollment'];
        $pass=$_POST['password'];
        $pass2=password_hash($pass,PASSWORD_ARGON2I);
        $sq="SELECT NAME FROM INFO WHERE ENROLLMENT='$en'";
        $res=mysqli_query($con,$sq);
       /* if($res)
        echo "hello <br>";*/
        if(mysqli_num_rows($res)>0)
        {
            echo "ACCOUNT ALREADY EXISTS WITH THE FOLLOWING ENROLLMENT NUMBER <br>";
            mysqli_close($con);
        }
        else
        {
            $sec=$_POST['security'];
            $sec_ps=($_POST['secpas']);
            $sec_ps1=password_hash($sec_ps,PASSWORD_ARGON2I);
            echo "<br>";
            echo $sec;
            echo $sec_ps1;
            echo $pass2;
            echo $en;
            $in_login="INSERT INTO LOGIN VALUES('$en','$sec','$pass2','$sec_ps1')";
            if(mysqli_query($con,$in_login)) 
                echo "1 <br>";
            else
            echo "2";
            $n=$_POST['name'];
            $e=$_POST['email'];
            $d=$_POST['dob'];
            $h=$_POST['home'];
            $col=$_POST['college'];
            $branch=$_POST['dept'];
            $sem=$_POST['sem'];
            $gen=$_POST['sex'];
            $in_info="INSERT INTO INFO VALUES('$n','$e','$gen','$d','$col','$branch','$sem','$h','$en')";
            if(mysqli_query($con,$in_info))
            {
                echo "account created succesfully , now you can login <br>";
            }
            else
            {
                echo "failed" .mysqli_error();
            }
        }
    }
}
else
{
    die("connection failed") .mysqli_connect_error;
}
?>