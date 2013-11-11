<?php 
       include("connect_sql.php");
       date_default_timezone_set("Asia/Kolkata"); 
	   $timestamp=date("Y-m-d H:i:s");
       $lu=40;
       $u=$_REQUEST['see'];
       $content=$_REQUEST["content"];
       $sid=$_REQUEST["sid"];
       $rid=$_REQUEST["rid"];

       


       $sql = "INSERT INTO \"Message\" (\"SenderCustomerUserID\", \"ReceiverCustomerUserID\",\"Content\", \"Timestamp\") Values (".$sid.",".$rid.",'".$content."', '".$timestamp."');";
       $query = pg_query($db, $sql);

       //echo $sql;

       header("Location:messages.php");
	die();
       
?>