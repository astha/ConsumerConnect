<?php 

session_start(); 
$quesID = $_REQUEST['quesID']; 


$con=mysql_connect("localhost","root","root") or die("Problems connecting to DB.");
mysql_select_db("UsernamePassword",$con) or  die("Problems selecting DB.");



$prev=0;
$prevt=0;
$query= "SELECT count(*) as cnt FROM Question;";
$res = mysql_query($query,$con) or die("Problems on querying " . mysql_error() );
$res1=mysql_fetch_assoc($res);
$current=$res1['cnt'];

$queryt= "SELECT max(TimeStamp) as maxt FROM Question;";
$rest = mysql_query($queryt,$con) or die("Problems on querying " . mysql_error() );
$res1t=mysql_fetch_assoc($rest);
$currentt=$res1t['maxt'];

if(!($current==$_SESSION['prev'] && $currentt==$_SESSION['prevt'])){
	$_SESSION['prev']=$current;
	$_SESSION['prevt']=$currentt;	
	
	$sql = "SELECT * FROM Question;";
	$result = mysql_query($sql,$con) or die("Problems on querying " . mysql_error() );
	$r=array();
	
	while ($row = mysql_fetch_assoc($result)) {
		$r[] = $row;
	}
  	echo json_encode($r);

}
//echo $currentt;


mysql_close($con);
?>