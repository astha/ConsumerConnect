<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       date_default_timezone_set("Asia/Kolkata"); 
	$timestamp=date("Y-m-d H:i:s");
       $lu=$userID;
       $u=$_REQUEST['see'];
       $content=$_REQUEST["content"];
       $sid=$_REQUEST["sid"];
       $rating=$_REQUEST["score"];

       


       $sql = "INSERT INTO \"Review\" (\"Rating\",\"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\",\"Content\", \"Timestamp\") Values (".$rating.",".$sid.",".$lu.",".$u.",'".$content."', '".$timestamp."');";
       $query = pg_query($db, $sql);

       //echo $sql;

       header("Location:moreservices.php?sid=$sid&see=$u");
	   die();
       
?>