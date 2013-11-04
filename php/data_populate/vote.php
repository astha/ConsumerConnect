

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
//while(! feof($file))  {
while(!($i==50000)){
  $serviceID=rand(0,400);
  $customerID=rand(0,58);
  $reviewID=rand(0,180);
  $type=rand(0,1);
  if($type==0){
  	$type='false';
  }
  else{
  	$type='true';
  }
  
  
  $query="INSERT INTO \"Vote\" (\"ReviewID\", \"ServiceID\", \"VotedByCustomerUserID\",\"TypeOfVote\") VALUES ({$reviewID}, {$serviceID}, {$customerID}, '{$type}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>