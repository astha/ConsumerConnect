

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
while(! ($i==500))
  {
  $customerID=rand(0,58);
  $serviceProviderID=rand(0,58);
  $serviceID=rand(0,400);
  $regionID=rand(0,50);
  $price=rand(200,1000);
  if($customerID%3==0){
  	$status='Pending';
  }
  else if($customerID%3==1){
  	$status='Confirmed';
  }
  else{
  	$status='Cancelled';
  }
  
  $mm=rand(1,9);
  $dd=rand(1,9);
  $startDate="2013-0{$mm}-0{$dd}";
  
  $mm=rand(1,9);
  $dd=rand(1,9);
  $endDate="2013-0{$mm}-0{$dd}";
  
  $days=str_shuffle('0011110');
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $startTime="{$hours}:{$min}:00";
  
  $hours=rand(0,23);
  $min=rand(0,1)*30;
  $endTime="{$hours}:{$min}:00";
 

  $query="INSERT INTO \"Appointment\" (\"CustomerUserID\", \"ServiceID\", \"ServiceProviderUserID\", \"RegionID\", \"Price\",\"Status\", \"StartDate\",\"EndDate\",\"Days\",\"StartTime\",\"EndTime\") VALUES ({$customerID}, {$serviceID}, {$serviceProviderID}, {$regionID} , {$price}, '{$status}', '{$startDate}' , '{$endDate}', '{$days}', '{$startTime}' , '{$endTime}' );";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>