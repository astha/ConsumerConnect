<?php
     //set IE read from page only not read from cache
     header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
     header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
     header ("Cache-Control: no-cache, must-revalidate");
     header ("Pragma: no-cache");
     
     header("content-type: application/x-javascript; charset=tis-620");
     

     $lu=7;
     $cid=$_GET['cid'];
     $rid=$_GET['rid'];
     $val=$_GET['val'];

     
     
	include("connect_sql.php");
     
     if ($val=='up') {  // first dropdown

          $result=pg_query($db,"insert into \"Vote\"(\"ReviewID\",\"CustomerUserID\",\"VotedByCustomerUserID\",\"TypeOfVote\") values ($rid, $cid, $lu,1) ;");
          $sql = "SELECT count(*) from \"Vote\" where \"ReviewID\"=$rid and \"CustomerUserID\"='$cid'and \"TypeOfVote\"=1";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $totalup= $row[0];
          

           echo "$totalup";
              
           
     }
     else if ($val=='down') { // second dropdown
          
          $result=pg_query($db,"insert into \"Vote\"(\"ReviewID\",\"CustomerUserID\",\"VotedByCustomerUserID\",\"TypeOfVote\") values ($rid, $cid, $lu,-1) ;");                   
          $sql = "SELECT count(*) from \"Vote\" where \"ReviewID\"=$rid and \"CustomerUserID\"='$cid' and \"TypeOfVote\"=-1";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $totaldown= $row[0];

          echo "$totaldown";
     }
 
    
?>