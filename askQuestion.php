<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       date_default_timezone_set("Asia/Kolkata"); 
	   $timestamp=date("Y-m-d H:i:s");
       $lu=$userID;
       $u=$_REQUEST['see'];
       $content=$_REQUEST["content"];

       


       $sql = "INSERT INTO \"Question\" (\"Description\", \"Timestamp\") Values ('".$content."', '".$timestamp."');";
       $query = pg_query($db, $sql);

       $sql = "SELECT \"QuestionID\" from  \"Question\" where \"Timestamp\" = '".$timestamp."';";
       $query = pg_query($db, $sql);
       while ($row = pg_fetch_row($query)) {
       	$qid=$row[0];
       }
       //echo $sql;

       $sql = "INSERT INTO \"QandA\" (\"CustomerUserID\", \"ServiceProviderUserID\", \"QuestionID\") Values (".$lu.", ".$u.", ".$qid.");";
       $query = pg_query($db, $sql);
       //echo $sql;

       header("Location:servicequestions.php?see=$u");
	   die();
       
?>