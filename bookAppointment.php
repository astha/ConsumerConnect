<?php 
       include("connect_sql.php");
       
       $lu=40;
       $u=$_REQUEST['see'];
       $startdate=$_REQUEST["startdate"];
       $enddate=$_REQUEST["enddate"];
       $starttime=$_REQUEST["starttime"];
       $endtime=$_REQUEST["endtime"];
       $mon=$_REQUEST["mon"];
       $tue=$_REQUEST["tue"];
       $wed=$_REQUEST["wed"];
       $thu=$_REQUEST["thu"];
       $fri=$_REQUEST["fri"];
       $sat=$_REQUEST["sat"];
       $sun=$_REQUEST["sun"];
       $sid=$_REQUEST["sid"];
       $description=$_REQUEST["description"];

       echo $starttime;
       echo $endtime;
       echo $startdate;
       echo $enddate;
       echo $days;
       echo $description;
       echo $mon;
       echo $tue;
       echo $wed;
       echo $thu;
       echo $fri;
       echo $sat;
       echo $sun;


       


       //$sql = "INSERT INTO \"Review\" (\"Rating\",\"ServiceID\", \"CustomerUserID\", \"ServiceProviderUserID\",\"Content\", \"Timestamp\") Values (".$rating.",".$sid.",".$lu.",".$u.",'".$content."', '".$timestamp."');";
       //$query = pg_query($db, $sql);

       //echo $sql;

       //header("Location:moreservices.php?sid=$sid&see=$u");
	//   die();
       
?>