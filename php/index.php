<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Welcome to ConsumerConnect - Your Online Service Bazaar</title>
        <link rel="icon" type="image/png" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<script src="js/main.js"></script>
		<script src="js/ajax.js"></script>
		<script src="js/funct.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
       <div class="container">
			<header>
				<img src="./images/logo.gif" height=50px align=left >
			</header>
			
			    	 <div class="details" width="40%" >
			    	 	<br><br>
    	 				<p align="center"> All services at one click.
    	 				</p>
    	 				<br><br>
    	 				<table border="0" width="100%" align="center" position="relative">
					<center>
					<tr>
						<td width="33%" align="center"><img  align="center" position="relative" src="./images/cart.jpg" width="120px"></td>
						<td width="33%" align="center"><img align="center" position="relative" src="./images/connect.jpg" width="120px" ></td>
						<td width="33%" align="center"><img align="center" position="relative" src="./images/histogram.jpg" width="120px"></td>
					</tr>

					<tr>
						<td align="center">Find Best Services</td>
						<td align="center">Connect to People</td>
						<td align="center">Grow Your Business</td>
					</tr>
					</center>
					</table>
					<br><br>
 			</div>
			<div class="main">
				<form action="http://localhost:8888/Test.php" class="form-1"><h3>Sign In</h3>
					<p class="field">
						<input type="text" name="login" placeholder="Username or email">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>

				<form name="signupform" id= "signupform" class="form-1" onsubmit="return false;">
				<h3>New User? Sign Up!</h3>
					<p class="field">
						<input id="username" type="text" onblur="checkusername()" onkeyup="restrict('username')" name="login" placeholder="Username">
						<span id="unamestatus"></span>
						<i class="icon-user icon-large"></i>
					</p>
					<p class="field">
						<input id="email" type="text" onfocus="emptyElement('status')" onkeyup="restrict('email')" name="email" placeholder="Email Address">
						<i class="icon-envelope icon-large"></i>						
					</p>
					<p class="field">
							<input id="pass1" type="password" onfocus="emptyElement('status')" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="field">
							<input id="pass2" type="password" onfocus="emptyElement('status')" name="password2" placeholder="Confirm Password">
							<i class="icon-check icon-large"></i>
						
					</p>
					<button id="signupbtn" type="submit" name="submit">Sign Up</button>
					<span id="status"></span>
				</form>


			</div>
        </div>
    </body>
</html>