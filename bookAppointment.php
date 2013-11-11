<?php 
       include("connect_sql.php");
       
       $lu=40;
       $u=$_REQUEST['see'];
       $startdate=$_REQUEST["startdate"];
       $enddate=$_REQUEST["enddate"];
       $starttime=$_REQUEST["starttime"];
       $endtime=$_REQUEST["endtime"];

       $sid=$_REQUEST["sid"];
       $state=$_REQUEST["states"];
       $city=$_REQUEST["cities"];
       $description=$_REQUEST["description"];

       // echo $starttime;
       // echo $endtime;
       // echo $startdate;
       // echo $enddate;
       // echo $u;
       // echo $sid;
       // echo $description;

       $daystring="0000000";
       foreach ($_GET['days'] as $selectedOption){
              echo $selectedOption."\n";
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
       //echo $daystring;

       $sql = "SELECT \"Price\" from \"Provides\" where \"ServiceID\"=$sid and \"ServiceProviderUserID\" = $u;";
       $query = pg_query($db, $sql);
       while ($row = pg_fetch_row($query)) {
              $price=$row[0];
       }

     //  echo $sql;

       $sql = "SELECT \"RegionID\" from \"Location\" where \"StateName\"='$state' and \"CityName\" = '$city';";
       $query = pg_query($db, $sql);
       while ($row = pg_fetch_row($query)) {
              $rid=$row[0];
       }

    //   echo $sql;
       
       $sql = "INSERT INTO \"Appointment\" (\"RegionID\",\"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\",\"Price\", \"Days\", \"StartDate\", \"EndDate\", \"StartTime\", \"EndTime\", \"Status\") Values (".$rid.",".$sid.",".$lu.",".$u.",".$price.",'".$daystring."','".$startdate."','".$enddate."','".$starttime."','".$endtime."','Pending');";
       $query = pg_query($db, $sql);

     //  echo $sql;

     //  header("Location:moreservices.php?sid=$sid&see=$u");
       //   die();
       


       


       //$sql = "INSERT INTO \"Review\" (\"Rating\",\"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\",\"Content\", \"Timestamp\") Values (".$rating.",".$sid.",".$lu.",".$u.",'".$content."', '".$timestamp."');";
       //$query = pg_query($db, $sql);

       //echo $sql;

       header("Location:moreservices.php?sid=$sid&see=$u");
	die();
       
?>