<?php

include("connect_sql.php");
$u = $_POST['login'];
$e = $_POST['email'];
$p = $_POST['password'];
$fn= $_POST['firstName'];
$ln= $_POST['lastName'];
	//$sql = "INSERT INTO \"Users\" (\"LoginID\", \"Password\", \"EmailID\",\"FirstName\",\"LastName\") VALUES('$u','$p','$e','Anmol', 'Garg')";
$sql = "INSERT INTO \"Users\" (\"UserID\",\"LoginID\", \"Password\", \"FirstName\",\"LastName\", \"EmailID\") VALUES ('1','$u','$p', '$fn','$ln', '$e')";
	//$user_info = “INSERT INTO table_name (username, email) VALUES ('$_POST[username]', '$_POST[email]')”; 
	//if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
echo $sql;
$query = pg_query($db, $sql); 

if (!$query) {
	//echo "An error occurred.\n";
	exit;
}

while ($row = pg_fetch_row($query)) {
	//echo "Author: $row[0]  E-mail: $row[1]";
	echo "<br />\n";
}
	//echo “Your information was added to the database.”;
	//pg_close();
?>

<html>
<body>

Please	<a href="index.php"> Login </a> to continue
</body>
</html>