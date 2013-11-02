<?php
include("connect_sql.php");
//$connector = new DbConnector();

$username = trim(strtolower($_POST['username']));
//$username = mysql_escape_string($username);

$query = "SELECT \"LoginID\" FROM \"Users\" WHERE \"LoginID\" = '$username' LIMIT 1";
//$result = $connector->query($query);
$result = pg_query($db,$query);
$num = pg_num_rows($result);

echo $num;
pg_close();
