<?php
include"connection.php";
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
    $en=$_SESSION['userid'];
    $get="SELECT EMAIL,NAME,ENROLLMENT,HOME,SEMESTER FROM INFO WHERE ENROLLMENT='$en'";
    $get1=mysqli_query($con,$get);
    while($get2=mysqli_fetch_assoc($get1))
    {
        $name=$get2['NAME'];
        $email=$get2['EMAIL'];
        $enrollment=$get2['ENROLLMENT'];
        $home=$get2['HOME'];
        $sem=$get2['SEMESTER'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
         <link rel="stylesheet" type="text/css" href="innerstyle.css">
         <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span>YOUR DETAIL ARE HERE PLEASE EDIT AS PER YOUR CONFORT </span></font size></b></center>
   <hr>
        <table border=2px align=center>
         <tr id="head"> 
        <th>NAME </th>
        <th> EMAIL </th>
        <th>SEMESTER</th>
        <th>HOME</th>
         </tr>  
         <tr> 
        <td><?php echo $name ?> </td>
        <td><?php echo $email ?> </td>
        <td><?php echo $sem ?> </td>
        <td><?php echo $home ?> </td>
         </tr> 
         <tr> 
        <form action='edit_detail_back.php' method='POST'>
        <td><input type='text' id='user' name='user' placeholder='seriously?'/></td>
        <td><input type='email' id='email' name='email' placeholder='abc@xyz.com'/></td>
        <td><input type='number' id='sem' name='sem' placeholder='current sem'/></td>
        <td><input type='text' name='home' id='home' placeholder='current home' /></td>
         </tr>
    </table>
    <br>
    <center><input type ='submit' class="but" name='submit' value='submit'/></center>
    </form>
    <p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
    </body>
</html>