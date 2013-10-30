

<?php

   $file = fopen("services.csv","r");
   $host        = "host=localhost";
   $port        = "port=5432";
   $dbname      = "dbname=postgres";
   $credentials = "user=postgres password=postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   
   
   $i=0;
while(! feof($file))
  {
  $record=fgetcsv($file);
  $type= $record[0];
  $subtype= $record[1];

  $query="INSERT INTO \"Service\" (\"ServiceID\", \"Type\", \"SubType\") VALUES ({$i}, '{$type}', '{$subtype}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>