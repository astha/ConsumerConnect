<?php 
       include("connect_sql.php");
       date_default_timezone_set("Asia/Kolkata"); 
	   $timestamp=date("Y-m-d H:i:s");
       $qid=$_REQUEST['qid'];
       $content=$_REQUEST["content"];
      

       


       $sql = "INSERT INTO \"Answer\" (\"Description\", \"Timestamp\", \"QuestionID\") Values ('".$content."', '".$timestamp."','".$qid."');";
       $query = pg_query($db, $sql);

       //echo $sql;

       header("Location:serviceprovideranswer.php");
	die();
       
?>