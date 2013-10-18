<?php 
$quesID = $_REQUEST['quesID']; 


$con=mysql_connect("localhost","root","root") or die("Problems connecting to DB.");
mysql_select_db("UsernamePassword",$con) or  die("Problems selecting DB.");

$sql = "SELECT * FROM Question;";
$result = mysql_query($sql,$con) or die("Problems on querying " . mysql_error() );
$r=array();

// if (mysql_num_rows($result)>0){
while ($row = mysql_fetch_assoc($result)) {
	$r[] = $row;
}
  	echo json_encode($r);
// }
// else{
// 	echo "Not a Registered User";
// }


mysql_close($con);
?>