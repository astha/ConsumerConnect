

<?php

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

while(!($i==70))
  {
  

  $userID=rand(0,100);
  $webpage=str_shuffle('abcdef');
 
 $query = "Select \"LoginID\" from \"Users\" where \"UserID\"=$userID";
  $name = pg_query($db,$query);
  $row = pg_fetch_row($name);
  $webpage = $row[0];
   $webpage="www.{$webpage}.com";
  $query="INSERT INTO \"ServiceProvider\" (\"UserID\", \"Webpage\") VALUES ({$userID}, '{$webpage}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>