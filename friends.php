<!DOCTYPE html>

<?php
include_once("checksession.php");
$lu = $userID;
?>

<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>My Friends - ConsumerConnect </title>
  <?php 
      include_once("consnavbar.php");
     ?>
     
  <div class="container-fluid">
    <div class="row-fluid">

     <?php 
      include_once("conssidebar.php");
     ?>
      

      <div id="content" class="span8">
        <!-- content starts -->



        <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
          <div class="box">
            <div class="box-header well" data-original-title="">
             <h2>Friends </h2>
             <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content" style="display: block;">
            <table class="table table-bordered table-striped">
              <tbody>
            <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
            <?php
               
              include("connect_sql.php");
              include 'paging.php';
              $sql = "SELECT \"FollowedCustomerUserID\" from \"Follows\" where \"FollowerCustomerUserID\"= $lu order by \"FollowedCustomerUserID\"";
 
              $sql = paging_function('page',"friends.php",$sql);
              $query1 = pg_query($db, $sql);
              
              //echo $sql;

              
              if (!$query1) {
                //echo "An error occurred.\n";
               exit;
              }
              else {
                //echo "No Error!";
              }
              while ($row = pg_fetch_row($query1)) {
                  $followed = $row[0];
                 
                  $sql = "SELECT \"FirstName\", \"LastName\",\"EmailID\",\"ContactNumber\", \"Photograph\" from \"Users\" where \"UserID\" = '$followed'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $cfn = $row[0];
                  $cln = $row[1];
                  $cpic = $row[4];
                  $email = $row[2];
                  $contact = $row[3];
                  $sql = "SELECT \"CumulativeUpVotes\", \"CumulativeDownVotes\" from \"Customer\" where \"UserID\" = '$followed'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $uv = $row[0];
                  $dv = $row[1];
                  $ratio = $uv/$dv;
                   
                  if ($ratio < 1){
                      $ratimage = "images/J.jpeg";
                  }
                  elseif ($ratio < 2){
                      $ratimage = "images/Q.jpeg";
                  }
                  elseif ($ratio < 3){
                      $ratimage = "images/K.jpeg";
                  }
                  else{
                      $ratimage = "images/A.jpeg";
                  }
                  
                  
                 
              echo "
                
                <tr>

                  <td style=\"width: 100px; height: 100px;\">
                    <a style=\"background-color:white\" title=\"User3\" href=$cpic class=\"cboxElement\"><img src=$cpic alt=\"User3\" width=\"100\" height=\"100\"></a></td>
                    <td class=\"span4\"><font style=\"color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\"><a href =\"consprofile.php?see=$followed\">$cfn $cln</a></font><br>
                      
                      <img src=$ratimage width=40px height=70px>
                    </td>
                    <td class=\"span4\"><font style=\"float:right; color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">Contact Details</font><br>
                      <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                      font-size: 11px; line-height: 1.28;\">$email</font><br>
                      <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                      font-size: 11px; line-height: 1.28;\">$contact</font><br>
                      <div class=\"dropdown pull-right\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Options <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" align=\"left\">
                          <li><a href=\"#\">Send Message</a></li>
                          <li><a href=\"#\">Unfriend</a></li>
                        </ul>
                      </li>
                    </td>


                  </tr>
"; 
              }

            
            ?>
                </tbody></table>
                  </div>


                </div>
              </div>

              <!-- content ends -->
            </div>




          </div><!--/fluid-row-->


        </div><!--/.fluid-container-->

  <!-- external javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->

  <!-- jQuery -->
  <script src="js/jquery-1.7.2.min.js"></script>
  <!-- jQuery UI -->
  <script src="js/jquery-ui-1.8.21.custom.min.js"></script>
  <!-- transition / effect library -->
  <script src="js/bootstrap-transition.js"></script>
  <!-- alert enhancer library -->
  <script src="js/bootstrap-alert.js"></script>
  <!-- modal / dialog library -->
  <script src="js/bootstrap-modal.js"></script>
  <!-- custom dropdown library -->
  <script src="js/bootstrap-dropdown.js"></script>
  <!-- scrolspy library -->
  <script src="js/bootstrap-scrollspy.js"></script>
  <!-- library for creating tabs -->
  <script src="js/bootstrap-tab.js"></script>
  <!-- library for advanced tooltip -->
  <script src="js/bootstrap-tooltip.js"></script>
  <!-- popover effect library -->
  <script src="js/bootstrap-popover.js"></script>
  <!-- button enhancer library -->
  <script src="js/bootstrap-button.js"></script>
  <!-- accordion library (optional, not used in demo) -->
  <script src="js/bootstrap-collapse.js"></script>
  <!-- carousel slideshow library (optional, not used in demo) -->
  <script src="js/bootstrap-carousel.js"></script>
  <!-- autocomplete library -->
  <script src="js/bootstrap-typeahead.js"></script>
  <!-- tour library -->
  <script src="js/bootstrap-tour.js"></script>
  <!-- library for cookie management -->
  <script src="js/jquery.cookie.js"></script>
  <!-- calander plugin -->
  <script src="js/fullcalendar.min.js"></script>
  <!-- data table plugin -->
  <script src="js/jquery.dataTables.min.js"></script>

  <!-- chart libraries start -->
  <script src="js/excanvas.js"></script>
  <script src="js/jquery.flot.min.js"></script>
  <script src="js/jquery.flot.pie.min.js"></script>
  <script src="js/jquery.flot.stack.js"></script>
  <script src="js/jquery.flot.resize.min.js"></script>
  <!-- chart libraries end -->

  <!-- select or dropdown enhancer -->
  <script src="js/jquery.chosen.min.js"></script>
  <!-- checkbox, radio, and file input styler -->
  <script src="js/jquery.uniform.min.js"></script>
  <!-- plugin for gallery image view -->
  <script src="js/jquery.colorbox.min.js"></script>
  <!-- rich text editor library -->
  <script src="js/jquery.cleditor.min.js"></script>
  <!-- notification plugin -->
  <script src="js/jquery.noty.js"></script>
  <!-- file manager library -->
  <script src="js/jquery.elfinder.min.js"></script>
  <!-- star rating plugin -->
  <script src="js/jquery.raty.min.js"></script>
  <!-- for iOS style toggle switch -->
  <script src="js/jquery.iphone.toggle.js"></script>
  <!-- autogrowing textarea plugin -->
  <script src="js/jquery.autogrow-textarea.js"></script>
  <!-- multiple file upload plugin -->
  <script src="js/jquery.uploadify-3.1.min.js"></script>
  <!-- history.js for cross-browser state change on ajax -->
  <script src="js/jquery.history.js"></script>
  <!-- application script for Charisma demo -->
  <script src="js/charisma.js"></script>
  <!-- to specify the rating ids -->
  <script src="js/rating.js"></script>
  <script src="js/liveSearch.js"></script>
  



</body>
</html>