<?php
include("connect_sql.php");

$country=$_REQUEST['country'];

$sql = "SELECT \"StateName\" from \"Location\" where \"CountryName\"='".$country."';";
//echo $sql;
$query=pg_query($db,$sql);
while ($row = pg_fetch_row($query)) {
   echo "<option>".$row[0]."</option>";
}

?>