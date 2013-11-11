<?
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
          echo "<option value='0'>==== choose state ====</option>\n";
          $result=pg_query($db,"select \"StateName\" from \"Location\" order by \"StateName\";");
          while(list($id, $name)=mysql_fetch_array($result)){
               echo "<option value=\"$id\" >$name</option> \n" ;
          }
     } else if ($data=='cities') { // second dropdown
          echo "<select name='cities' >\n";
          echo "<option value='0'>====choose cities ====</option>\n";                           
          $result=pg_query($db,"SELECT \"CityName\" FROM \"Location\" WHERE \"StateName\" = '$val' ORDER BY \"CityName\"; ");
          while(list($id, $name)=mysql_fetch_array($result)){       
               echo "<option value=\"$id\" >$name</option> \n" ;
          }
     } 
     echo "</select>\n";  
?>