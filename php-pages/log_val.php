<?php
echo "welcome <br>";
$user="sickwiz";
$l="localhost";
$p="2409";
$d="SHARECARE";
$con= mysqli_connect($l,$user,$p,$d);
if(isset($_POST['submit']))
{
    $e=$_POST['enrollment'];
    $p=md5($_POST['password']);
    $sq="SELECT PASSWORD FROM LOGIN WHERE ENROLLMENT='$e'";
    $res=mysqli_query($con,$sq);
    $row=mysqli_fetch_assoc($res);
    if($row['PASSWORD']==$p)
    {
        echo "logged in";
        
    }
    else
    echo "invalid password";
}
?>