

<?php

   $file = fopen("userInfo.csv","r");
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

while(!($i==40))
  {
  
  $userID=rand(1,50);
  $regionID=rand(0,400);
  
  
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="1990-0{$mm}-0{$dd}";
  
  
  $query="INSERT INTO \"Customer\" (\"UserID\", \"Gender\", \"DOB\",  \"RegionID\") VALUES ({$userID}, 'Female', '{$date}',  {$regionID});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

  
   $i=0;

while(!($i==40))
  {
  
  $userID=rand(55,110);
  $regionID=rand(0,400);
  
  
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="1985-0{$mm}-0{$dd}";
  
  
  $query="INSERT INTO \"Customer\" (\"UserID\", \"Gender\" ,\"DOB\",  \"RegionID\") VALUES ({$userID}, 'Male', '{$date}',  {$regionID});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}

//echo $data;

fclose($file);
?>