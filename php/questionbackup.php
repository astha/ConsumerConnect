<?php 

session_start(); 

function count_ques($con){
	$query= "SELECT count(*) as cnt FROM Question;";
	$res = mysql_query($query,$con) or die("Problems on querying " . mysql_error() );
	$res1=mysql_fetch_assoc($res);
	$current=$res1['cnt'];
	return $current;
}

function max_ques($con){
	$queryt= "SELECT max(TimeStamp) as maxt FROM Question;";
	$rest = mysql_query($queryt,$con) or die("Problems on querying " . mysql_error() );
	$res1t=mysql_fetch_assoc($rest);
	$currentt=$res1t['maxt'];
	return $currentt;
}

//$quesID = $_REQUEST['quesID']; 


$con=mysql_connect("localhost","root","root") or die("Problems connecting to DB.");
mysql_select_db("UsernamePassword",$con) or  die("Problems selecting DB.");







while((count_ques($con)==$_SESSION['prev'] && max_ques($con)==$_SESSION['prevt'])){
	sleep(5);
}
	$_SESSION['prev']=count_ques($con);
	$_SESSION['prevt']=max_ques($con);	
	
	$sql = "SELECT * FROM Question;";
	$result = mysql_query($sql,$con) or die("Problems on querying " . mysql_error() );
	$r=array();
	
	while ($row = mysql_fetch_assoc($result)) {
		$r[] = $row;
	}
  	echo json_encode($r);

//echo $currentt;

mysql_close($con);
?>