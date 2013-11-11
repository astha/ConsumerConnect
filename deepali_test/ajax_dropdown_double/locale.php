<?
     //กำหนดให้ IE อ่าน page นี้ทุกครั้ง ไม่ไปเอาจาก cache
     header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
     header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
     header ("Cache-Control: no-cache, must-revalidate");
     header ("Pragma: no-cache");
     
     header("content-type: application/x-javascript; charset=tis-620");
     
     $data=$_GET['data'];
     $val=$_GET['val'];
     
	include ("connect_sql.php");
     
     if ($data=='province') { 
          echo "<select name='province' onChange=\"dochange('amper', this.value)\">\n";
          echo "<option value='0'>==== เลือก สังกัด ====</option>\n";
          $result=pg_query($db,"select \"CityName\" from \"Location\" where \"StateName\" ='".$val."');";
          while(list($id, $name)=pg_fetch_array($result)){
               echo "<option value=\"$id\" >$name</option> \n" ;
          }
     } 
     echo "</select>\n";  
?>