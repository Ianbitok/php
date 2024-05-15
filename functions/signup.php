<?php
if (isset($_COOKIE["userID"]))
  header("Location: http://magicreader.bitzawolf.com/Homepage/");
?>
<!--/start-login-one-->
<h1><img src="../images/MR.png"><br>
Magic Reader Sign-In</h1>
		<div class="login" style="margin-bottom:1em">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>User Login</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form method="post" action="http://magicreader.bitzawolf.com/auth/index.php">
				<ul>
					<li>
						<input name="username" type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" ><a href="#" class=" icon user"></a>
					</li>
					 <li>
						<input name="password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
				</ul>

			<div class="submit">
				<input type="submit" onclick="myFunction()" value="Log in" >
			</div>
			</form>

      <div>
        <center>
          <p>Don't have an account yet?</p>
          <a href="../register/register.php" style="font-size:1.5em; color:#000099">Create Account</a>
        </center>
      </div>
		</div>
		</br>
<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>