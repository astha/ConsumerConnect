

<?php

   $file = fopen("reviews.csv","r");
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
while(! feof($file))  {

  $serviceID=rand(0,400);
  $customerID=rand(0,58);
  $serviceProviderID=rand(0,58);
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $record=fgetcsv($file);
  $content= $record[0];
  $rating= $record[1];
  
  $query="INSERT INTO \"Review\" (\"ReviewID\", \"Content\", \"Timestamp\", \"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\", \"Rating\") VALUES ({$i}, '{$content}', '{$timestamp}', {$serviceID}, {$customerID}, {$serviceProviderID}, {$rating});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>