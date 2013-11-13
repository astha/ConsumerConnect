

<?php

   $file = fopen("../data/location.csv","r");
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
  

  $city= $record[0];
  $state= $record[1];
  $country='India';
  
  $query="INSERT INTO \"Location\" (\"RegionID\", \"CityName\" , \"StateName\") VALUES ({$i}, '{$city}', '{$state}' );";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>