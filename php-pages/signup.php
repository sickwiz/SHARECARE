<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link href="signup.css" rel="stylesheet">
        <script type="text/javascript" src="signup.js">  </script>
</head>
<body>
        <ul id="menu">
		<li id="item"><a href="homepage.html">HOME</a></li>
		<li id="item"><a href="login.php">LOGIN</a></li>
		</ul>
    
            <center>
                    <img class="image" src="logo1.jpg" height=200 width=200 > </center>
        <h1>WELCOME TO THE SHARECARE FAMILY</h1>
       
        <form  method="POST" onsubmit="return valid()" name="myform"  action="log_entry.php">
        <table cellspacing=10 align=center>
            <tr>
                <td style="font-size:20px;color:rgb(245, 242, 94);"> <label> Name</label> </td>
                <td><input type="text" name="name" id="name"> </td>
            </tr>
            <tr>
            <td style="font-size:20px;color:rgb(245, 242, 94);"> <label> Enrollment</label> </td>
                <td><input type="number" name="enrollment" id="enrollment"> </td>
            </tr>
            <tr>
                <td> <label style="font-size:20px;color:rgb(245, 242, 94);">Email</label></td>
                <td> <input type="email" id="email" name="email" placeholder="example@example.com"></td>
            </tr>
            <tr>
                <td>  <label style="font-size:20px;color:rgb(245, 242, 94);">Gender-</label> </td>
                <td><select name="sex" id="sex">
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option value="other">other</option>
                </select></td>
            </tr>
            <tr>
                <td>  <lable style="font-size:20px;color:rgb(245, 242, 94);">D.O.B   </lable></td>
                <td><input type="date" name="dob" id="date"> </td>
            </tr>
            <tr>
                <td>  <label style="font-size:20px;color:rgb(245, 242, 94);">Choose College</label></td>
                <td> <select default="JIIT-62" id="college" name="college">
                    <option value="JIIT-62">JIIT-62</option>
                    <option  value="JIIT-128">JIIT-128</option>
                </select></td>
            </tr>
            <tr>
                <td> <label style="font-size:20px;color:rgb(245, 242, 94);">Choose Branch</label></td>
                <td> <select default="CSE" id="dept" name="dept">
                    <option  value="cse">CSE</option>
                    <option  value="ECE">ECE</option>
                    <option  value="BIOTECH">Biotech</option>
                </select></td>
            </tr>
            <tr>
                <td>  <lable style="font-size:20px;color:rgb(245, 242, 94);">Select semester</lable> </td>
                <td><select name="sem">
                    <option value="1">I</option>
                    <option value="2">II</option>
                    <option value="3">III</option>
                    <option value="4">IV</option>
                    <option value="5" >V</option>
                    <option value="6" >VI</option>
                    <option value="7" >VII</option>
                    <option value="8">VII</option>
                    <option value="9" >IX</option>
                    <option value="10" >X</option>
                </select></td>
            </tr>
            <tr>
              <td>  <label style="font-size:20px;color:rgb(245, 242, 94);">HOMETOWN</label></td>  
              <td> <input type="text" name="home" id="home" ></td>
            </tr>
            <tr>
                <td><label style="font-size:20px;color:rgb(245, 242, 94);">Set Password</label></td>
                <td><input type="password" placeholder="alphanumeric" name="password" id="password"> </td>
            </tr>
            <tr>
            <td> <label style="font-size:20px;color:rgb(245, 242, 94);">Confirm Password</label></td>
                <td><input type="password" placeholder="alphanumeric" name="password1" id="password1"> <div id="psver" style="font-size:20px;color:rgb(245, 242, 94);"> </div> </td>
            </tr>
            <tr> 
            <td><label style="font-size:20px;color:rgb(245, 242, 94);">Security question</label> </td>
            <td> <select name="security">
            <option value="holiday">Your favorite holiday destination</option>
                    <option value="movie">First movie you have watched</option>
                    <option value="hospital">Hospital you were born in</option>
                    <option value="web">your favorite website</option>
            </select>
            </tr>
            <tr> 
            <td> <label style="font-size:20px;color:rgb(245, 242, 94);">Your answer</label> </td>
            <td> <input type="password" id="secpas" name="secpas" placeholde="one word answers please"> </td>
            </tr>
			
        </table>
        <br> <br>
        <button class="button" align=center name="submit" type="submit" value="submit" >Sign Up</button> <br> <br>
    </form>
    </body>
</html>