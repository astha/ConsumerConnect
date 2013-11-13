<?php
//include_once("checksession.php");
$userID=1;
?>


<?php 

       include("connect_sql.php");
       $profile=$_REQUEST['profile'];
       $firstname=$_REQUEST['firstname'];
       $lastname=$_REQUEST['lastname'];

      $contactno=$_REQUEST['contactno'];
      $emailID=$_REQUEST['emailID'];
      $password=$_REQUEST['password'];

     
      // echo $profile;
      // echo $firstname;
      // echo $lastname;
      // echo $contactno;
      // echo $pasword;

       $sql = "UPDATE \"Users\" set (\"FirstName\",\"LastName\", \"Password\", \"EmailID\",\"ContactNumber\") = ('$firstname', '$lastname', '$password', '$emailID', '$contactno')where \"UserID\" = $userID;";
       $query = pg_query($db, $sql);

       //echo $sql;

       if($profile == 'customer'){

        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        $states=$_REQUEST['states'];

        $cities=$_REQUEST['cities'];


        $query="select \"RegionID\" from \"Location\" where \"CityName\" = '$cities' and \"StateName\"='$states';";
        $result=pg_query($db,$query);
           
           while($row=pg_fetch_array($result)){
              $rid=$row[0];

           }

       



        $sql = "UPDATE \"Customer\" set (\"Gender\", \"DOB\",\"RegionID\") = ('$gender', '$dob', '$rid') where \"UserID\" = $userID;";
        $query = pg_query($db, $sql);


        // echo $gender;
        // echo $dob;
        // echo $states;
        // echo $cities;

        //echo $sql;

       }
       else if($profile=='sp'){

        $webpage=$_REQUEST['webpage'];

        // echo $webpage;

        $sql = "UPDATE \"ServiceProvider\" set (\"Webpage\") = ('$webpage') where \"UserID\" = $userID;";
        $query = pg_query($db, $sql);

        //echo $sql;


       }
       
       


     //   $sql = "INSERT INTO \"Review\" (\"Rating\",\"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\",\"Content\", \"Timestamp\") Values (".$rating.",".$sid.",".$lu.",".$u.",'".$content."', '".$timestamp."');";
     //   $query = pg_query($db, $sql);

     //   //echo $sql;

      header("Location:editprofile.php");
      die();
       
?>