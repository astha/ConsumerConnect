

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
  
  $userID=rand(0,58);
  if($userID%2==0){
  	$gender='Male';
  }
  else{
  	$gender='Female';
  }
  $up=rand(0,500);
  $down=rand(0,500);
  
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  
  
  $query="INSERT INTO \"Customer\" (\"UserID\", \"Gender\", \"DOB\", \"CumulativeUpVotes\", \"CumulativeDownVotes\") VALUES ({$userID}, '{$gender}', '{$date}', {$up}, {$down});";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>