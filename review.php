

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
while(! feof($file))
  {
  $customerUserID=rand(0,58);
  $serviceID=rand(0,400);

  $record=fgetcsv($file);
  

  $content= $record[0];
  $rating= $record[1];
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  
  
  $query="INSERT INTO \"Review\" (\"ReviewID\", \"ServiceID\" , \"CustomeruserID\", \"Content\", \"Rating\", \"Timestamp\") VALUES ({$i},{customerUserID},{serviceID}, '{$content}', '{$rating}' , '{$timestamp}');";
  echo $query;
  //pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>