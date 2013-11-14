

<?php
   $host        = "host=localhost";
   $port        = "port=8092";
   $dbname      = "dbname=postgres";
   $credentials = "user=postgres password=dumpy";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      //echo "Opened database successfully\n";
   }
?>
