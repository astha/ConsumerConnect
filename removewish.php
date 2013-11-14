<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       
       $wid=$_REQUEST["wid"];
       $cid=$_REQUEST["cid"];
       
       $sql = "delete from  \"Wish\" where \"CustomerUserID\" = $cid and \"WishID\"=$wid;";
       $query = pg_query($db, $sql);
       
       // echo $sql;

    header("Location:wishlist.php");
        die();
       
?>