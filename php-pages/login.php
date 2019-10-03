    <html>
        <link href="loginstyle.css" rel="stylesheet">
        <body>
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
               <td> <lable> <b style="font-size:30px;color:red">ENROLLMENT NUMBER</b></lable></td>
               <td> <input type="number" placeholder="00000000" name="enrollment"></td>
              </tr>
              <td> <lable><b style="font-size:30px;color:red;">PASSWORD</b></lable></td>
                <td> <input type="password" name="password"></td>
              </table>
            <br> <br>
            
            <button class="button" name="submit" type="submit" value="submit">Log In</button>
            
            </form>
            <label> CREATE AN ACCOUNT? </label>
            <button class="button" ><a href="signup.html">Sign up</a></button>
</body>
  </html>