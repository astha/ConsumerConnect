

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
while(!($i==900)){
  $senderID=rand(1,110);
  $receiverID=rand(1,110);
  if ($senderID != $receiverID){
  $hours=rand(10,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $yy=rand(2012,2013);
  $date="{$yy}-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $description=fgets($file);
  // echo $description;
  $k = fgets($file);
  $query="INSERT INTO \"Message\" (\"SenderCustomerUserID\",\"ReceiverCustomerUserID\", \"Content\", \"Timestamp\") VALUES ({$senderID}, {$receiverID}, '{$description}', '{$timestamp}');";
  echo $query;
  pg_query($db, $query);

  
  
}
  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>