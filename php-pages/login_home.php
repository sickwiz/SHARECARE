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
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; transform:scale(0.7);" > </center>

<p>
<div class="navbar">
<ul>
<b id="item"><a href="logout.php">LOGOUT</a></b>
<b id="item" style="transform:translate(-20px,20px);"><?php echo "WELCOME ".$_SESSION['username']; ?> </b>
</ul>

<div class="dropdown">
  <button class="dropbtn">REQUESTS
<i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
<ul>
<a href="inbox.php">PENDING HOME</a> 
<a href="confirm.php"> CONFIRMED HOME </a> 
<a href="confirm.php"> PENDING TRIP </a> 
<a href=""> CONFIRMED TRIP </a> 
</ul>
 </div>
  </div>


<div style="float= left;" class="dropdown">
  <button class="dropbtn">PLAN JOURNEY
<i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
<ul>
<a href="">HOME</a> 
<a href="">PLAN A TRIP</a> 
<a href="">SEE LOCAL PLAN</a>  
</ul>
 </div>
  </div>
</div>
<div id="im">
<img id="im1" src="cabim.jpeg">

<img id="im2" src="share1.jpeg">
</div>
</div>
<h3>PLANING A JOURNEY</h3>
<ul id="men">
<li id="it"><form action="hometown.php" method=POST > HOME
<input type="submit" value="submit" name="submit"/> </form>
</li> </li><br>
<form action="travel_val.php" method="POST">
<li id="it">PLAN FUTURE RIDE <li><input type="text" name='des' placeholder="WHERE" id="itu"><input type="date" placeholder="date" name='dat' id="itu"></li> </li><br>
</ul>
<center><button align=center class="plan" name="plan" type="submit" value="submit" > plan journey </button> </center> </form>
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
<video src= "123.webm" autoplay controls></video>
</p>
</div>

<p id="foo">Copyright &copy; SHARECARE SOLUTIONS <br>
<center> <img class="image" src="logo1.jpg" height=200 width=200 style="border-radius:100px; border-style:double; border-color:blue;border-width:5px; transform:scale(0.5);" > </center>
</p>


</body>
</html>
