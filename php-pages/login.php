 <html>
        <link href="loginstyle.css" rel="stylesheet">
        <body>
		<ul id="menu">
		<li id="item"><a href="homepage.html">HOME</a></li>
		<li id="item"><a href="signup.php">SIGN UP</a></li>
		<li id="item"><a href="forgot.html">FORGOT PASSWORD</a></li>
		
		</ul>
        <div id="login">   
            <center>
                <img class="image" src="logo1.jpg" height=200 width=200 > </center>
                <h1>
                        SHARECARE SOLUTIONS!
                </h1>
                <br>
                <br>
                <br>
            
            <form action="log_val.php" method="POST">
            
            <table align=center>
              <tr>
               <td> <lable> <b style="font-size:30px;color:rgb(245, 242, 94)">ENROLLMENT NUMBER</b></lable></td>
               <td> <input type="number" placeholder="00000000" name="enrollment"></td>
              </tr>
              <tr>
              <td> <lable><b style="font-size:30px;color:rgb(245, 242, 94);">PASSWORD</b></lable></td>
                <td> <input type="password" name="password"></td>
              </tr>
              </table>
            <br> <br>
            
            <button align=center class="button" name="submit" type="submit" value="submit">Log In</button>
            
            </form>
            
</body>
  </html>