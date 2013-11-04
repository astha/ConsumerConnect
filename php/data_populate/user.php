

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

//while(! feof($file))
while(!($i==59))
  {
  $record=fgetcsv($file);
  $firstname= $record[0];
  $lastname= $record[1];
  $gender= $record[2];
  $loginID= $record[3];
  $password= $record[4];
  $date= $record[5];
  $month= $record[6];
  $year= $record[7];
  $phone= $record[8];
  $emailID= $record[9];
  $street= $record[10];
  $state= $record[11];
  $country= $record[12];
  
  $image="./people/women/{$i}.jpg";
  $data = bin2hex(file_get_contents($image));
  $escaped = pg_escape_bytea($data);
  $query="INSERT INTO \"Users\" (\"LoginID\", \"Password\", \"FirstName\", \"LastName\", \"EmailID\", \"Photograph\", \"ContactNumber\") VALUES ('{$loginID}', '{$password}', '{$firstname}', '{$lastname}', '{$emailID}', '{$escaped}' , '{$phone}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
}
//echo $data;

fclose($file);
?>