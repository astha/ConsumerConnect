<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       date_default_timezone_set("Asia/Kolkata"); 
	   $timestamp=date("Y-m-d H:i:s");
       $lu=$userID;
       $u=$_REQUEST['see'];
       $content=$_REQUEST["content"];

       


       $sql = "INSERT INTO \"Question\" (\"Description\", \"Timestamp\", \"CustomerUserID\", \"ServiceProviderUserID\") Values ('".$content."', '".$timestamp."',".$lu.", ".$u.");";
       $query = pg_query($db, $sql);

       
       header("Location:servicequestions.php?see=$u");
	   die();
       
?>