

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
while(! ($i==1500))
  {
  
  $serviceProviderID=rand(1,100);
  $serviceID=rand(1,400);
  $regionID=rand(0,50);
  $price=rand(200,1000);
  
  $query = "Select \"FirstName\" from \"Users\" where \"UserID\"=$serviceProviderID";
  $name = pg_query($db,$query);
  $row = pg_fetch_row($name);
  $name = $row[0];

$query = "Select \"SubType\" from \"Service\" where \"ServiceID\"=$serviceID";
  $astha = pg_query($db,$query);
  $row = pg_fetch_row($astha);
  $service = $row[0];

  $name=$name." ".$service;
  
  $days=str_shuffle('1100100');
  
  $hours=rand(10,20);
  $min=rand(0,1)*30;
  $startTime="{$hours}:{$min}:00";
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $endTime="{$hours}:{$min}:00";
  $d = rand(0,5) ;

  $query="INSERT INTO \"Provides\" (\"ServiceID\", \"ServiceProviderUserID\", \"RegionID\", \"Price\",\"Days\",\"StartTime\",\"EndTime\", \"Name\", \"Discount\") VALUES ({$serviceID}, {$serviceProviderID}, {$regionID} , {$price}, '{$days}', '{$startTime}' , '{$endTime}' , '{$name}', {$d});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;

}
//echo $data;

fclose($file);
?>