

<?php

  $file = fopen("../data/messages.txt","r");
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

while ($i < 1000){
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
   $description=fgets($file);
   $c = rand(1,1000);
   // $s = rand(1,1000);
  // echo $description;
  $k = fgets($file);
  //$description="Why dont you extend the services 24 by 7?";
  $query="INSERT INTO \"Answer\" ( \"Description\", \"Timestamp\", \"QuestionID\") VALUES ( '{$description}', '{$timestamp}', {$c});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
  
  

}
//echo $data;

fclose($file);
?>