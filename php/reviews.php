

<?php

   $file = fopen("../data/reviews.csv","r");
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
while ($i < 10000){
while(! feof($file))  {

  $serviceID=rand(0,400);
  $customerID=rand(0,100);
  $serviceProviderID=rand(0,100);
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $m = rand(10,55);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:{$m}:00";
  $timestamp="{$date} {$timestamp}";
  
  $record=fgetcsv($file);
  $content= $record[0];
  $rating= $record[1];
  
  $query = "Select count(*) from \"Provides\" where \"ServiceID\" = $serviceID and \"ServiceProviderUserID\"=$serviceProviderID";
  $astha = pg_query($db, $query);
  $k = pg_fetch_row($astha);
  if ($k[0] != 0){

  $query="INSERT INTO \"Review\" (\"Content\", \"Timestamp\", \"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\", \"Rating\") VALUES ( '{$content}', '{$timestamp}', {$serviceID}, {$customerID}, {$serviceProviderID}, {$rating});";
  echo $query;
  echo "\n";
  pg_query($db, $query);

  
  
}
$i=$i+1;
}
fclose($file);
 $file = fopen("../data/reviews.csv","r");
}
//echo $data;

fclose($file);
?>