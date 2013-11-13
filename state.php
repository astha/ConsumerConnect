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
     
     if ($data=='states') {  // first dropdown
           echo "<select name='states' onChange=\"dochange('cities', this.value)\">\n"; 
           echo "<option value='0'>Choose state</option>\n";   
           $result=pg_query($db,"select distinct \"StateName\" from \"Location\" order by \"StateName\";");
           while($row=pg_fetch_array($result)){
                echo "<option value=\"$row[0]\" >$row[0]</option> \n" ;
           }
     }
     else if ($data=='cities') { // second dropdown
          //echo "Yoo";
           echo "<select name='cities'>\n";
           echo "<option value='0'>Choose city</option>\n";    
          // echo "<option>Go</option>"  ;                     
          $result=pg_query($db,"SELECT \"CityName\" FROM \"Location\" WHERE \"StateName\" = '$val' ORDER BY \"CityName\"; ");
           while($row=pg_fetch_array($result)){
                echo "<option value=\"$row[0]\" >$row[0]</option> \n" ;
           }
     }
 
    echo "</select>\n";  
?>