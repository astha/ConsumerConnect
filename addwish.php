<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       
       $lu=$userID;
       $startdate=$_REQUEST["startdate"];
       $enddate=$_REQUEST["enddate"];
       $starttime=$_REQUEST["starttime"];
       $endtime=$_REQUEST["endtime"];

       $type=$_REQUEST["services"];
       $subtype=$_REQUEST["subservices"];
       $state=$_REQUEST["states"];
       $city=$_REQUEST["cities"];
       $price=$_REQUEST["price"];
       $description=$_REQUEST["description"];

       date_default_timezone_set("Asia/Kolkata"); 
       $timestamp=date("Y-m-d H:i:s");
       

       // echo $starttime;
       // echo $endtime;
       // echo $startdate;
       // echo $enddate;
       // echo $u;
       // echo $sid;
       // echo $description;

       $daystring="0000000";
       foreach ($_GET['days'] as $selectedOption){
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
       
       $sql = "INSERT INTO \"Wish\" (\"RegionID\",\"ServiceID\", \"CustomerUserID\",\"MaximumPrice\", \"Days\", \"StartDate\", \"EndDate\", \"StartTime\", \"EndTime\", \"Description\", \"Timestamp\") Values (".$rid.",".$sid.",".$lu.",".$price.",'".$daystring."','".$startdate."','".$enddate."','".$starttime."','".$endtime."','".$description."','".$timestamp."');";
       $query = pg_query($db, $sql);

       //echo $sql;

     

     header("Location:wishlist.php");
	 die();
       
?>