<?php
if(empty($_SESSION))
{
  session_start();
  if(!isset($_SESSION['username']))
    header("location:login_home.php");
}
else if(!isset($_SESSION['username']))
{
  header("location:login_home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <script type="text/javascript" src="pswrd_change.js"> </script>
</head>
<body>

<link rel="stylesheet" type="text/css" href="innerstyle.css">
         <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span>CHANGE YOUR PASSWORD</span></font size></b></center>
   <hr>
<center>
<form action="change_pw_back.php" onsubmit="return valid()" name="myform" method="POST">
<b><lable> New Password: </lable></b> 
<input type="password" id="np" name="np"/> <br>
<br>
<b><lable> Confirm Password: </lable></b> 
<input type="password" id="np1" name="np1"/> <br>
<br>
<input type="submit" class="but" value="submit" name="submit"/>
</form>
</center>
<br>
<p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
</body>
</html>
</body>
</html>