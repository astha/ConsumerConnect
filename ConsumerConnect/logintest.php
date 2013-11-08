<?php

include("connect_sql.php");
$u = $_POST['login'];
//$e = $_POST['email'];
$p = $_POST['password'];

	//$sql = "INSERT INTO \"Users\" (\"LoginID\", \"Password\", \"EmailID\",\"FirstName\",\"LastName\") VALUES('$u','$p','$e','Anmol', 'Garg')";
//$sql = "INSERT INTO \"Users\" (\"UserID\",\"LoginID\", \"Password\", \"FirstName\",\"LastName\", \"EmailID\") VALUES ('1','$u','$p', '$fn','$ln', '$e')";
	//$user_info = “INSERT INTO table_name (username, email) VALUES ('$_POST[username]', '$_POST[email]')”; 
	//if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
$sql = "SELECT * from \"Users\" where \"LoginID\" = '$u' and \"Password\" = '$p'";
//echo $sql;
$query = pg_query($db, $sql);
$num = pg_num_rows($query); 
//echo $num;

if (!$query) {
	//echo "An error occurred.\n";
	exit;
}

while ($row = pg_fetch_row($query)) {
	//echo "Author: $row[0]  E-mail: $row[1]";
	echo "<br />\n";
}

if ($num == "1") {
	echo "Welcome "."$u";
}
else {
	echo "Username or password incorrect";
}

	//echo “Your information was added to the database.”;
	//pg_close();
?>

