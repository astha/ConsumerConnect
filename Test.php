<?php 
$login = $_REQUEST['login']; 
$password = $_REQUEST['password'];
$submit = $_REQUEST['submit'];
//echo $login; 
//echo $password;

$con=mysql_connect("localhost","root","root") or die("Problems connecting to DB.");
mysql_select_db("UsernamePassword",$con) or  die("Problems selecting DB.");

$sql = "SELECT * FROM Login WHERE Username=\"{$login}\" AND Password=\"{$password}\";";
$result = mysql_query($sql,$con) or die("Problems on querying " . mysql_error() );

if (mysql_num_rows($result)>0){
	while($row = mysql_fetch_array($result))
  	{
  		echo $row['Username'] . " " . $row['Password'];
  		echo "<br>";
  	}
}
else{
	echo "Not a Registered User";
}
mysql_close($con);
?>