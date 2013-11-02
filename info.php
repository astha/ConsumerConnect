<?php
	
	$host        = "host=localhost";
   	$port        = "port=8092";
   	$dbname      = "dbname=postgres";
   	$credentials = "user=postgres password=dumpy";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
	$u = $_POST['login'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	//$sql = "INSERT INTO \"Users\" (\"LoginID\", \"Password\", \"EmailID\",\"FirstName\",\"LastName\") VALUES('$u','$p','$e','Anmol', 'Garg')";
	$sql = "INSERT INTO \"Users\" (\"UserID\",\"LoginID\", \"Password\", \"FirstName\",\"LastName\", \"EmailID\",\"Photograph\",\"ContactNumber\",\"Gender\") VALUES ('60','$u','$p', 'Anmol','Garg', '$e','01010','8879507283','Male')";
	//$user_info = “INSERT INTO table_name (username, email) VALUES ('$_POST[username]', '$_POST[email]')”; 
	//if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
	echo $sql;
	$query = pg_query($db, $sql); 
	
	if (!$query) {
  		echo "An error occurred.\n";
 	 exit;
	}

while ($row = pg_fetch_row($query)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}
	//echo “Your information was added to the database.”;
	//pg_close();
?>