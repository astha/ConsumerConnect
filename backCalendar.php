<?php


    
     set IE read from page only not read from cache
     header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
     header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
     header ("Cache-Control: no-cache, must-revalidate");
     header ("Pragma: no-cache");
     
     header("content-type: application/x-javascript; charset=tis-620");
     
     
     $lu=38;  
	include("connect_sql.php");
     
    
           $result=pg_query($db,"select * from \"Appointment\" where \"CustomerUserID\" = $lu and \"Status\"='Confirmed';");
           $out = array();
           while($row=pg_fetch_array($result)){
               
                 $today=$row[6];
                 $today=strftime("%Y-%m-%d", strtotime("$today -1 day"));
                 $datefinal= strtotime($row[7]);
                 $days=$row[8];

               while (strtotime($today)<=$datefinal)
              { 
                $today=strftime("%Y-%m-%d", strtotime("$today +1 day"));
                $dayofweek = date('w', strtotime($today));
                if($days[$dayofweek]=='1'){
                  array_push($out, array( 'startDate' => $today, 'endTime' => $row[10], 'startTime' => $row[9] ));
                }
                
              }
            }
   
          echo json_encode($out);
    
?>