

<?php

  // $file = fopen("services.csv","r");
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
while(! ($i==5000))
  {
  $f1customerID=rand(0,58);
  $f2customerID=rand(0,58);
  
 

  $query="INSERT INTO \"Follows\" (\"FollowerCustomerUserID\",  \"FollowedCustomerUserID\") VALUES ({$f2customerID},{$f1customerID});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>