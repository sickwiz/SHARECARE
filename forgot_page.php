<?php
if(empty($_SESSION))
{
  session_start();
  if(isset($_SESSION['username']))
    header("location:login_home.php");
}
else if(isset($_SESSION['username']))
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
    <script type="text/javascript" src="forgot.js"> </script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="innerstyle.css">
         <center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>
    <h1>SHARECARE SOLUTIONS INDIA</h1>
    <hr>
   <center><font size= "6"><b><span>RESET PASSWORD WINDOW </span></font size></b></center>
   <hr>
  <center>
    <br>
<form action="forgot.php" onsubmit="return valid()" name="myform" method="POST">
<b><lable>Enrollment</lable>  <input type="number" id="enrol" name="enrol"> <br></b><br>
<b><lable> Select security question </lable></b>
<select name="sec" id="sec">
  <option value="holiday">Your favorite holiday destination</option>
  <option value="movie">First movie you have watched</option>
  <option value="hospital">Hospital you were born in</option>
  <option value="web">your favorite website</option>
</select> <br></b>
<br>
<b><lable>Your answer:</lable> <input type="text" name="ans" id="ans"> <br></b>
<br>
<b><lable> New Password: </lable> 
<input type="password" id="np" name="np"/> <br></b>
<br>
<b><lable> Confirm Password: </lable> 
<input type="password" id="np1" name="np1"/> <br></b>
<br>
<input type="submit" class="but" value="submit" name="submit"/>
</form>
</center>
<p><center> <a href="login_home.php"><input type='button' class='but' value='back'></a></center></p>
</body>
</html>
</body>
</html>