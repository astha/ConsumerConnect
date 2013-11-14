<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       
       $lu=$userID;
       
       $starttime=$_REQUEST["starttime"];
       $endtime=$_REQUEST["endtime"];

       $type=$_REQUEST["services"];
       $subtype=$_REQUEST["subservices"];
       $state=$_REQUEST["states"];
       $city=$_REQUEST["cities"];
       $price=$_REQUEST["price"];
       $description=$_REQUEST["description"];

       $discount=$_REQUEST["discount"];
       $sname=$_REQUEST["sname"];

       // echo $starttime;
       // echo $endtime;
       // echo $startdate;
       // echo $enddate;
       // echo $u;
       // echo $sid;
       // echo $description;

       $daystring="0000000";
       foreach ($_REQUEST['days'] as $selectedOption){
              //echo $selectedOption."\n";
              if($selectedOption=="Monday"){
                     $daystring[0]=1;
              }
              if($selectedOption=="Tuesday"){
                     $daystring[1]=1;
              }
              if($selectedOption=="Wednesday"){
                     $daystring[2]=1;
              }
              if($selectedOption=="Thursday"){
                     $daystring[3]=1;
              }
              if($selectedOption=="Friday"){
                     $daystring[4]=1;
              }
              if($selectedOption=="Saturday"){
                     $daystring[5]=1;
              }
              if($selectedOption=="Sunday"){
                     $daystring[6]=1;
              }


       }
       //echo $price;

       $sql = "SELECT \"ServiceID\" from \"Service\" where \"Type\"='$type' and \"SubType\" = '$subtype';";
       $query = pg_query($db, $sql);
       while ($row = pg_fetch_row($query)) {
              $sid=$row[0];
       }

     // echo $sql;

       $sql = "SELECT \"RegionID\" from \"Location\" where \"StateName\"='$state' and \"CityName\" = '$city';";
       $query = pg_query($db, $sql);
       while ($row = pg_fetch_row($query)) {
              $rid=$row[0];
       }

      //echo $sql;
       
       $sql = "INSERT INTO \"Provides\" (\"RegionID\",\"ServiceID\", \"ServiceProviderUserID\",\"Price\", \"Days\", \"StartTime\", \"EndTime\", \"Description\", \"Discount\", \"Name\") Values (".$rid.",".$sid.",".$lu.",".$price.",'".$daystring."','".$starttime."','".$endtime."','".$description."','".$discount."','".$sname."');";
       $query = pg_query($db, $sql);

       //echo $sql;

     

     header("Location:addservice.php");
       die();
       
?>