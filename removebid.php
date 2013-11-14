<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       
       $spid=$_REQUEST["spid"];
       $wid=$_REQUEST["wid"];
       $cid=$_REQUEST["cid"];
       
       $sql = "delete from  \"Bids\" where \"ServiceProviderUserID\" = '$spid' and \"CustomerUserID\" = '$cid' and \"WishID\"=$wid;";
       $query = pg_query($db, $sql);
       
       //echo $sql;

    header("Location:bids.php");
        die();
       
?>