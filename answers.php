

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

  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $description="Because we dont have required resources. We are working on it.";
  $query="INSERT INTO \"Answer\" (\"QuestionID\",\"AnswerID\", \"Description\", \"Timestamp\") VALUES ({$i},{$i}, '{$description}', '{$timestamp}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;
  
  $hours=rand(0,23);
  $mm=rand(1,9);
  $dd=rand(1,9);
  $date="2013-0{$mm}-0{$dd}";
  $timestamp="{$hours}:00:00";
  $timestamp="{$date} {$timestamp}";
  
  $description="We use vegetable oils with almond, vanilla and chocolate extracts. I would not recommend a high quantity of the cookies for heart patients.";
  $query="INSERT INTO \"Answer\" (\"QuestionID\",\"AnswerID\", \"Description\", \"Timestamp\") VALUES ({$i},{$i}, '{$description}', '{$timestamp}');";
  echo $query;
  pg_query($db, $query);

  
  $i=$i+1;


//echo $data;

fclose($file);
?>