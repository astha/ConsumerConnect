

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
while(!($i==5000000)){
  $serviceID=rand(0,100);
  $customerID=rand(0,100);
  $reviewID=rand(14000,15000);
  $type=rand(0,1);
  if($type==0){
  	$type=1;
  }
  else{
  	$type=-1;
  }
  
  
  $query="INSERT INTO \"Vote\" (\"ReviewID\", \"CustomerUserID\", \"VotedByCustomerUserID\",\"TypeOfVote\") VALUES ({$reviewID}, {$serviceID}, {$customerID}, $type);";
  // echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>