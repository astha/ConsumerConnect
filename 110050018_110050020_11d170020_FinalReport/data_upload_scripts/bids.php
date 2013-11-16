

<?php
 $file = fopen("../data/messages.txt","r");
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
while(! ($i==50000))
  {
  $customerID=rand(0,100);
  $serviceProviderID=rand(0,400);
  $wishID=rand(0,400);
  $bidValue=rand(300,500);
 
 if (feof($file)){
  fclose($file);
 $file = fopen("../data/messages.txt","r");
 }
  $description=fgets($file);
  // echo $description;
  $k = fgets($file);


  $query="INSERT INTO \"Bids\" (\"WishID\", \"CustomerUserID\", \"ServiceProviderUserID\", \"BidValue\", \"Details\") VALUES ({$wishID},{$customerID}, {$serviceProviderID},{$bidValue}, '{$description}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>