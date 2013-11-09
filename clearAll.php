<?php
	session_start();
	session_destroy();
	setcookie("userID","");
?>