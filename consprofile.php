<!DOCTYPE html>

<?php 
       include_once("checksession.php");
       include("connect_sql.php");
       $u=$_REQUEST['see'];
       
?>
<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
<?php
$sql = "SELECT \"FirstName\", \"LastName\" from \"Users\" where \"UserID\" = '$u'";
$query = pg_query($db, $sql);
$row = pg_fetch_row($query);
global $cfn;
$cfn = $row[0];
$cln = $row[1];

echo "<title>$cfn $cln's Profile </title>";
?>
<?php
include_once("consnavbar.php");
?>


  <!-- topbar ends -->
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
             <h2>Profile Info</h2>
             <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content" style="display: block;">
            <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
            <table class="table table-bordered table-striped">
              <tbody>
<?php
                $sql = "SELECT \"FirstName\", \"LastName\",\"EmailID\",\"ContactNumber\", \"Photograph\" from \"Users\" where \"UserID\" = '$u'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $cfn = $row[0];
                  $cln = $row[1];
                  $cpic = $row[4];
                  $email = $row[2];
                  $contact = $row[3];
                  $sql = "SELECT \"CumulativeUpVotes\", \"CumulativeDownVotes\" from \"Customer\" where \"UserID\" = '$u'";
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
                    <a style=\"background-color:white\" title=\"User3\" href=\"images/user3.png\" class=\"cboxElement\"><img src=\"images/user3.png\" alt=\"User3\" width=\"100\" height=\"100\"></a></td>
                    <td class=\"span4\"><font style=\"color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$cfn $cln</font><br>
                      <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                      font-size: 11px; line-height: 1.28;\">32 years old</font><br>
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
"; ?>
</tbody></table>
              </div> </div>


              <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
                <div class="box">
                  <div class="box-header well" data-original-title="">
                  <?php
                  echo "<h2>$cfn's Reviews</h2>";
                  ?>
                   <div class="box-icon">
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                  </div>
                </div>
                <div class="box-content" style="display: block;">
                  <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
                  <?php
                   include_once("classes/develop_php_library.php"); // Include the class library
            $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
           
            $sql = "SELECT * from \"Review\" where \"CustomerUserID\" = '$u' order by \"Timestamp\" desc";
            
              //echo $sql;
            
            $query1 = pg_query($db, $sql);
            
            if (!$query1) {
                //echo "An error occurred.\n";
             exit;
           }
           else {
                //echo "No Error!";
           }
           
           while ($row = pg_fetch_row($query1)) {
            $content = $row[3];
            $rating = $row[4];
            $ts = $row[5];
            $convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
            $time = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time
              
            $spid = $row[6];
            $sid = $row[1];
            $cid = $row[2];
            $rid = $row[0];
            $sql = "SELECT \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where \"UserID\" = '$cid'";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $cfn = $row[0];
            $cln = $row[1];
            $cpic = $row[2];
            $sql = "SELECT \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where \"UserID\" = '$spid'";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $spfn = $row[0];
            $spln = $row[1];
            $sppic = $row[2];
            $sql = "SELECT \"Type\", \"SubType\" from \"Service\" where \"ServiceID\" = '$sid'";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $type = $row[0];
            $stype = $row[1];
            $sql = "SELECT \"CumulativeUpVotes\", \"CumulativeDownVotes\" from \"Customer\" where \"UserID\" = '$cid'";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $cu= $row[0];
            $cd = $row[1];
            $sql = "SELECT count(*) from \"Vote\" where \"ReviewID\"=$rid and \"CustomerUserID\"=$cid and \"TypeOfVote\"=1";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $totalup= $row[0];
            $sql = "SELECT count(*) from \"Vote\" where \"ReviewID\"=$rid and \"CustomerUserID\"=$cid and \"TypeOfVote\"=-1";
            $query = pg_query($db, $sql);
            $row = pg_fetch_row($query);
            $totaldown= $row[0];
                        

            $ratio = $cu/$cd;
            
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
            echo "<table class=\"table table-bordered table-striped\">
            <tbody><tr>
            
            <td style=\"width: 100px; height: 100px;\">



            <a style=\"background-color:white\" title=\"User1\" href=\"images/user4.png\" class=\"cboxElement\"><img src=\"images/user4.png\" alt=\"User4\" width=\"100\" height=\"100\"></a></td>
            <td class=\"span4\"><font class=\"user-name\">$cfn $cln</font><br>


            <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
            font-size: 11px; line-height: 1.28;\">$time</font><br>
            <img src=$ratimage width=40px height=70px>
            </td>



            <td class=\"span4\"><font style=\"float:right; color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$spfn $spln</font><br>
            
            <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
            font-size: 11px; line-height: 1.28;\">$type ($stype)</font></td>

            <td style=\"width: 100px;\">
            <a style=\"background-color:white\" title=\"User3\" href=\"images/user8.png\" class=\"cboxElement\"><img src=\"images/user8.png\" alt=\"User8\" width=\"100\" height=\"100%\"></a></td></tr><tr></tr>
            <tr><td colspan=\"4\" style=\"width: 100%;\">
            
            <div id=\"fixed\" data-score=\"$rating\" class=\"pull-right\"></div>

            <div class=\"btn btn-success enabled vbtn\"><i class=\"icon-thumbs-up\"></i> $totalup</div>
            <div class=\"btn btn-danger enabled vbtn\"><i class=\"icon-thumbs-down\"></i> $totaldown</div> <br>
            <p style=\"float: left; color: #333; font-size: 13px;line-height: 1.38; font-weight: normal; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif; padding-top:2px;\">$content</p>
            </td>
            </tr></tbody></table>";

          } ?>
                        </div>
                            </div><!--/span-->

                          </div>
                          <!-- content ends -->
                        </div>

                        <div class="row-fluid sortable ui-sortable" style="text-shadow:none; float:top;">
                          <div class="box">
                            <div class="box-header well" data-original-title="">
                             
                             <?php
                                echo "<h2>$cfn's Questions</h2>";
                              ?>
                  <div class="box-icon">
                              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                            </div>
                          </div>
                          <div class="box-content" style="display: block;">
                            <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
                           <?php 
                            include_once("classes/develop_php_library.php"); // Include the class library
            $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
            
              $sql = "SELECT * from \"QandA\" where \"CustomerUserID\"= '$u'";
 
              $query1 = pg_query($db, $sql);
              
              if (!$query1) {
                //echo "An error occurred.\n";
               exit;
              }
              else {
                //echo "No Error!";
              }
              while ($row = pg_fetch_row($query1)) {
                  $spid = $row[1];
                  $qid = $row[2];
                  $sql = "SELECT \"Description\",\"Timestamp\" from \"Question\" where \"QuestionID\"= '$qid'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $des = $row[0];
                  $ts = $row[1];
                  $convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
                  $time = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time
              
echo "<table class=\"table table-bordered table-striped\">
              <tbody><tr>


                <td>

                  <p style=\"color: #333; font-size: 13px;line-height: 1.38; font-weight: normal; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">
                    <i class=\"icon-question-sign\"></i>
                    $des<br>
                    <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                    font-size: 11px; line-height: 1.28;\">$time</font>

                  </p>";
                  
                  $sql = "SELECT \"FirstName\",\"LastName\",\"Photograph\" from \"Users\" where \"UserID\"= '$spid'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $fn = $row[0];
                  $ln = $row[1];
                  $pic = $row[2];

                  $sql = "SELECT * from \"Answer\" where \"QuestionID\"= '$qid' order by \"Timestamp\" desc";
                  $query = pg_query($db, $sql);
                  while ($row = pg_fetch_row($query)) {
                      $des1 = $row[2];
                      $ts1 = $row[3];
                      $convertedTime = ($timeAgoObject -> convert_datetime($ts1)); // Convert Date Time
                      $time1 = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time
                                   
                      echo "<p style=\"color: #333; font-size: 13px;line-height: 1.38; font-weight: normal; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">
                    <i class=\"icon-check\"></i>
                    $des1<br>
                    <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                    font-size: 11px; line-height: 1.28;\">$time1</font>
                  </p>
                </td>
                <td style=\"width:110px;\"><font style=\"float:right;color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$fn $ln</font><br>
                  <font style=\"float:right;color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 12px; line-height: 1.28;\">Dinesh Pharmacy</font><br>
                  <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">Medical (Chemist)</font><br>
                  <div id=\"half\" data-score=\"3.3\" class=\"pull-right\"></div></td>

                  <td style=\"width: 100px;\">
                    <a style=\"background-color:white\" title=\"User5\" href=\"images/user5.png\" class=\"cboxElement\"><img src=\"images/user5.png\" alt=\"User5\"></a></td>

                  ";


                  } 
                  echo "</tr></tbody></table>";
              } ?>
                                <!-- </div> -->

                              </div>
                            </div><!--/span-->
                          </div>



                        </div>


                      
       <?php
    include_once("consrightsidebar.php");
    ?>

                      </div><!--/fluid-row-->







                      <div class="modal hide fade" id="myModal" style="display: none;">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">ÃƒÆ’Ã†â€™Ãƒâ€&nbsp;Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬&nbsp;ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬&nbsp;ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€&nbsp;Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â</button>
                          <h3>Settings</h3>
                        </div>
                        <div class="modal-body">
                          <p>Here settings can be configured...</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#" class="btn" data-dismiss="modal">Close</a>
                          <a href="#" class="btn btn-primary">Save changes</a>
                        </div>
                      </div>



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
  


</body>
</html>