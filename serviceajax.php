<?php
     //set IE read from page only not read from cache
     header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
     header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
     header ("Cache-Control: no-cache, must-revalidate");
     header ("Pragma: no-cache");
     
     header("content-type: application/x-javascript; charset=tis-620");
     
     $data=$_GET['data'];
     $val=$_GET['val'];

     
     
	include("connect_sql.php");
     
     if ($data=='services') {  // first dropdown
           echo "<select name='services' onChange=\"dochange2('subservices', this.value)\">\n"; 
           $result=pg_query($db,"select distinct \"Type\" from \"Service\" order by \"Type\";");
           while($row=pg_fetch_array($result)){
                echo "<option value=\"$row[0]\" >$row[0]</option> \n" ;
           }
     }
     else if ($data=='subservices') { // second dropdown
          //echo "Yoo";
           echo "<select name='subservices'>\n";
          // echo "<option value='0'>====choose cities ====</option>\n";    
          // echo "<option>Go</option>"  ;                     
          $result=pg_query($db,"SELECT \"SubType\" FROM \"Service\" WHERE \"Type\" = '$val' ORDER BY \"SubType\"; ");
           while($row=pg_fetch_array($result)){
                echo "<option value=\"$row[0]\" >$row[0]</option> \n" ;
           }
     }
 
    echo "</select>\n";  
?>