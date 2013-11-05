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
	<script src = "js/main.js"> </script>
	<script src = "js/ajax.js"> </script>
	<script type="text/javascript" src="js/jquery2.js"></script>
	<script>
	$(document).ready(function(){
		$('#username').keyup(username_check);
	});
	
	function username_check(){	
		var username = $('#username').val();
		if(username == "" || username.length < 4){
			$('#username').css('border', '3px #CCC solid');
			$('#tick').hide();
		}
		else{

			jQuery.ajax({
				type: "POST",
				url: "check.php",
				data: 'username='+ username,
				cache: false,
				success: function(response){
					if(response  == 1 ){
						$('#username').css('border', '3px #C33 solid');	
						$('#tick').hide();
						$('#cross').fadeIn();
					}else{
						$('#username').css('border', '3px #090 solid');
						$('#cross').hide();
						$('#tick').fadeIn();
					}

				}
			});
		}
	}


	</script>

	<style>
	#tick{display:none}
	#cross{display:none}
	</style>
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
			<form action="logintest.php" method="post" class="form-1"><h3>Sign In</h3>
				<p class="field">
					<input type="text" name="login" placeholder="Username or email">
					<i class="icon-user icon-large"></i>
				</p>
				<p class="field">
					<input type="password" name="password" placeholder="Password">
					<i class="icon-lock icon-large"></i>
				</p>
				<p class="submit">
					<button id="loginbtn" onclick="login()" type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					<p id="status"> </p>
				</p>
			</form>

			<form name="signupform" id= "signupform" class="form-1" action="info.php" method="post">
				<h3>New User? Sign Up!</h3>
				<p class="field">
					<input name="firstName" id="firstName" type="text" placeholder="First Name" >
					<i class="icon-font icon-large"></i>
				</p>
				<p class="field">
				 <input name="lastName" id="lastName" type="text" placeholder="Last Name">	
				 <i class="icon-bold icon-large"></i>
				</p>
				<p class="field">
					<input id="username" type="text" name="login" placeholder="Username">
					<img id="tick" src="img/tick.png" width="16" height="16"/>
					<img id="cross" src="img/cross.png" width="16" height="16"/>	
					<i class="icon-user icon-large"></i>
				</p>
				<p class="field">
					<input id="email" type="text" name="email" placeholder="Email Address">
					<i class="icon-envelope icon-large"></i>						
				</p>
				<p class="field">
					<input id="pass1" type="password" name="password" placeholder="Password">
					<i class="icon-lock icon-large"></i>
				</p>
				<p class="field">
					<input id="pass2" type="password" name="password2" placeholder="Confirm Password">
					<i class="icon-check icon-large"></i>

				</p>
				<button id="signupbtn">Sign Up</button> 
				<span id="status"></span>
			</form>


		</div>
	</div>
</body>
</html>