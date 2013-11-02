

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
while(!($i==10)){
  $senderID=rand(0,58);
  $receiverID=rand(0,58);
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $description="Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?";
  
  $query="INSERT INTO \"Message\" (\"SenderCustomerUserID\",\"ReceiverCustomerUserID\", \"Content\", \"Timestamp\") VALUES ({$senderID}, {$receiverID}, '{$description}', '{$timestamp}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $description="What oil do you use for your chocolate cookies? Is it bad for heart patients?";
  $query="INSERT INTO \"Question\" (\"QuestionID\", \"Content\", \"Timestamp\") VALUES ({$i}, '{$description}', '{$timestamp}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>