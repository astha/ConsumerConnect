<?php
// Ajax calls this REGISTRATION code to execute
/*
if(isset($_POST["u"])){
	// CONNECT TO THE DATABASE
	include("connect_sql.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
	
	$u = $_POST['u'];
	$e = $_POST['e'];
	$p = $_POST['p'];
	// GET USER IP ADDRESS
	//$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// DUPLICATE DATA CHECKS FOR USERNAME AND EMAIL
	$sql = "SELECT \"LoginId\" FROM \"Users\" WHERE \"LoginId\"='$u' LIMIT 1";
	$query = pg_query($db, $sql); 
	$u_check = pg_num_rows($query);
	// -------------------------------------------
	$sql = "SELECT \"LoginId\" FROM \"Users\" WHERE \"EmailID\"='$e' LIMIT 1";
	$query = pg_query($db_conx, $sql); 
	$e_check = pg_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($u == "" || $e == "" || $p == ""){
		echo "The form submission is missing values.";
		exit();
	} else if ($u_check > 0){ 
		echo "The username you entered is alreay taken";
		exit();
	} else if ($e_check > 0){ 
		echo "That email address is already in use in the system";
		exit();
	} else if (strlen($u) < 3 || strlen($u) > 16) {
		echo "Username must be between 3 and 16 characters";
		exit(); 
	} else if (is_numeric($u[0])) {
		echo 'Username cannot begin with a number';
		exit();
	} else {
	// END FORM DATA ERROR HANDLING
	    // Begin Insertion of data into the database
		// Hash the password and apply your own mysterious unique salt
		$cryptpass = crypt($p);
		//include_once ("php_includes/randStrGen.php");
		//$p_hash = randStrGen(20)."$cryptpass".randStrGen(20);
		// Add user info into the database table for the main site table
		$sql = "INSERT INTO \"Users\" (\"LoginID\", \"Password\", \"EmailID\") VALUES('$u','$p','$e')";
		$query = pg_query($db, $sql); 
		//$uid = mysqli_insert_id($db_conx);
		// Establish their row in the useroptions table
		//$sql = "INSERT INTO useroptions (id, username, background) VALUES ('$uid','$u','original')";
		//$query = mysqli_query($db_conx, $sql);
		// Create directory(folder) to hold each user's files(pics, MP3s, etc.)
		/*
		if (!file_exists("user/$u")) {
			mkdir("user/$u", 0755);
		}
		// Email the user their activation link
		$to = "$e";							 
		$from = "auto_responder@yoursitename.com";
		$subject = 'yoursitename Account Activation';
		$message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>yoursitename Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.yoursitename.com"><img src="http://www.yoursitename.com/images/logo.png" width="36" height="30" alt="yoursitename" style="border:none; float:left;"></a>yoursitename Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="http://www.yoursitename.com/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';
		$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers);
		echo "signup_success";
		exit(); 
	
	} 
	exit();
} 
else {
	echo "KFH!";
} */
?>
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
	/*
	function signup(){
		var u = _("username").value;
		var e = _("email").value;
		var p1 = _("pass1").value;
		var p2 = _("pass2").value;
		var status = _("status");
		if(u == "" || e == "" || p1 == "" || p2 == ""){
			status.innerHTML = "Fill out all of the form data";
		} else if(p1 != p2){
			status.innerHTML = "Your password fields do not match";
		} else {
			_("signupbtn").style.display = "none";
			status.innerHTML = 'please wait ...';
			var ajax = ajaxObj("POST", "index.php");
			ajax.onreadystatechange = function() {
				if(ajaxReturn(ajax) == true) {
					if(ajax.responseText != "signup_success"){
						status.innerHTML = ajax.responseText;
						_("signupbtn").style.display = "block";
					} else {
						window.scrollTo(0,0);
						//_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
						_("signupform").innerHTML = "Done";
					}
				}
			}
			ajax.send("u="+u+"&e="+e+"&p="+p1);
		}
	}
	*/
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

			<form name="signupform" id= "signupform" class="form-1" action="info.php" method="post">
				<h3>New User? Sign Up!</h3>
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
				<button id="signupbtn" onclick="signup()" >Sign Up</button>
				<span id="status"></span>
			</form>


		</div>
	</div>
</body>
</html>