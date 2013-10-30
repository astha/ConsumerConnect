

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
while(! ($i==4))
  {
  
  $serviceProviderID=rand(0,58);
  $customerID=rand(0,58);
  $questionID=rand(0,1);
 
  $query="INSERT INTO \"QandA\" (\"CustomerUserID\", \"ServiceProviderID\", \"QuestionID\") VALUES ({$customerID}, {$serviceProviderID}, {$questionID});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>