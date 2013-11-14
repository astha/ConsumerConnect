

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
  $customerID=rand(0,58);
  $serviceProviderID=rand(0,400);
  $wishID=rand(0,400);
  $bidValue=rand(0,500);
 

  $query="INSERT INTO \"Bids\" (\"WishID\", \"CustomerUserID\", \"ServiceProviderUserID\", \"BidValue\") VALUES ({$wishID},{$customerID}, {$serviceProviderID},{$bidValue});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>