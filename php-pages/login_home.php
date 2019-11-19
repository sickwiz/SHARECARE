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
<html>
<head>
<title>
SHARE CARE SOLUTION
</title>
<link rel="stylesheet" type="text/css" href="lostyle.css">
</head>
<body>
<div>
<h1>SHARECARE SOLUTIONS INDIA</h1>

<p>
<ul id="menu">
<li id="item"><a href="logout.php">LOGOUT</a></li>
<li id="item"> <?php echo "Welcome ".$_SESSION['username']; ?> </li>
</ul>
</p>
<div id="im">
<img id="im1" src="cabim.jpeg">

<img id="im2" src="share1.jpeg">
</div>
</div>
<h3>PLANING A JOURNEY</h3>
<ul id="men">
<li id="it" class="it">WANNA RIDE! <li><input type="text" placeholder="WHERE" id="itu"></li> </li> <br>
<li id="it"><form action="hometown.php" method=POST > HOME
<input type="submit" value="submit" name="submit"/> </form>
</li> </li><br>
<li id="it">PLAN FUTURE RIDE <li><input type="text" placeholder="WHERE" id="itu"><input type="date" placeholder="date" id="itu"><input type="time" placeholder="time" id="itu"></li> </li><br>
</ul>

<div id="main">

<p><h2>About share care solution</h2></p>

<p>
 Travelling has always been a fun activity for all of us if and only if things go according to our plan.
 In day to day commute, we face several problems like finding an economical mode of transport that is also comfortable and we often end up with options like Uber pool or Ola share.
 Imagine having the option of choosing the person whom you want to travel with and that too along with the travel mode of your choice.
 Welcome to “SHARECARE SOLUTIONS”, a platform which provides all the aforementioned facilities at your fingertips.
</p>
<p>
The most common commute in our college is from Sector-62 campus to Sector-128 campus and finding a mate to travel along with you is really cumbersome and annoying. Our web application will have options of sharing your travel plans and look for people who are having the same travel plans. Even during weekends or during any event , people will get to choose their travel mate just by logging in. 	
Apart from this, we are also including the home travel button so that people from the same part of the country can pre-plan their journey with their college mates.

</p>
</div>

<div>
<p align = "center">
<video controls>
< source src="">
</video>
</p>
</div>

<p id="foo">Copyright &copy; share care solutions<br>
designed by &copy; aamir ahmad<br>
designed by &copy; vivek dwivedi<br>
</P>


</body>
</html>