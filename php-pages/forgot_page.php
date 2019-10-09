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
<form action="forgot.php" onsubmit="return valid()" name="myform" method="POST">
<lable>Enrollment</lable>  <input type="number" id="enrol" name="enrol"> <br>
<lable> Select security question </lable>
<select name="sec" id="sec">
  <option value="holiday">Your favorite holiday destination</option>
  <option value="movie">First movie you have watched</option>
  <option value="hospital">Hospital you were born in</option>
  <option value="web">your favorite website</option>
</select> <br>
<lable>Your answer:</lable> <input type="text" name="ans" id="ans"> <br>
<lable> New Password: </lable> 
<input type="password" id="np" name="np"/> <br>
<lable> Confirm Password: </lable> 
<input type="password" id="np1" name="np1"/> <br>
<input type="submit" value="submit" name="submit"/>
</form>
</body>
</html>
</body>
</html>