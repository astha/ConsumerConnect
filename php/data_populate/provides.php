

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

  
  $serviceProviderID=30;
  $serviceID=387;
  $regionID=rand(0,50);
  $price=rand(200,1000);
  
  
  $name="Wellness Pharmacy";
  
  $days=str_shuffle('0011110');
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $startTime="{$hours}:{$min}:00";
  
  $hours1=rand(0,23);
  while($hours1<=$hours){
  	$hours1=rand(0,23);
  }
  $min=rand(0,1)*30;
  $endTime="{$hours1}:{$min}:00";
 

  $query="INSERT INTO \"Provides\" (\"ServiceID\", \"ServiceProviderUserID\", \"RegionID\", \"Price\",\"Days\",\"StartTime\",\"EndTime\", \"Name\") VALUES ({$serviceID}, {$serviceProviderID}, {$regionID} , {$price}, '{$days}', '{$startTime}' , '{$endTime}' , '{$name}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;

  $serviceProviderID=54;
  $serviceID=9;
  $regionID=rand(0,50);
  $price=rand(200,1000);
  
  
  $name="Canara Bank";
  
  $days=str_shuffle('0011110');
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $startTime="{$hours}:{$min}:00";
  
  $hours1=rand(0,23);
  while($hours1<=$hours){
  	$hours1=rand(0,23);
  }
  $min=rand(0,1)*30;
  $endTime="{$hours1}:{$min}:00";
 

  $query="INSERT INTO \"Provides\" (\"ServiceID\", \"ServiceProviderUserID\", \"RegionID\", \"Price\",\"Days\",\"StartTime\",\"EndTime\", \"Name\") VALUES ({$serviceID}, {$serviceProviderID}, {$regionID} , {$price}, '{$days}', '{$startTime}' , '{$endTime}' , '{$name}');";
  echo $query;
  pg_query($db, $query);

  $i=$i+1;

  $serviceProviderID=15;
  $serviceID=411;
  $regionID=rand(0,50);
  $price=rand(200,1000);
  
  
  $name="HallMark Gift Shop";
  
  $days=str_shuffle('0011110');
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $startTime="{$hours}:{$min}:00";
  
  $hours1=rand(0,23);
  while($hours1<=$hours){
  	$hours1=rand(0,23);
  }
  $min=rand(0,1)*30;
  $endTime="{$hours1}:{$min}:00";
 

  $query="INSERT INTO \"Provides\" (\"ServiceID\", \"ServiceProviderUserID\", \"RegionID\", \"Price\",\"Days\",\"StartTime\",\"EndTime\", \"Name\") VALUES ({$serviceID}, {$serviceProviderID}, {$regionID} , {$price}, '{$days}', '{$startTime}' , '{$endTime}' , '{$name}');";
  echo $query;
  pg_query($db, $query);


//echo $data;

fclose($file);
?>