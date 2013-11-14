<!DOCTYPE html>

<?php 
      include_once("checksession.php");

       include("connect_sql.php");
       $lu=$userID;
?>



<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>Messages - ConsumerConnect </title>
 <?php 
      include_once("consnavbar.php");
      ?>  <div class="container-fluid">
    <div class="row-fluid">

      <?php 
      include_once("conssidebar.php");
      ?>
      

      <div id="content" class="span8">
        <!-- content starts -->



        <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
          <div class="box">
            <div class="box-header well" data-original-title="">
             <h2>Messages </h2>
             <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content" style="display: block;">

            <?php
            
                include_once("classes/develop_php_library.php"); // Include the class library
                $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
                $sql = "SELECT DISTINCT \"ReceiverCustomerUserID\" from \"Message\" where \"SenderCustomerUserID\"='$lu'";
                $query1 = pg_query($db, $sql);
              
               
                
                while ($row = pg_fetch_row($query1)) {
                  $rec = $row[0];
                  //echo $rec;
                  //echo "\n";
                  $sql = "SELECT * from \"Users\" where \"UserID\" = '$rec'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                  $rfn = $row[3]." ".$row[4];
                  $rpic = $row[6];
                  //echo $rfn;
                  //echo "\n";
                  $sql = "SELECT * from \"Message\" where (\"SenderCustomerUserID\"='$lu' and \"ReceiverCustomerUserID\"= '$rec') or (\"SenderCustomerUserID\"='$rec' and \"ReceiverCustomerUserID\"= '$lu') order by \"Timestamp\" asc";
                  $query = pg_query($db, $sql);

                  if ($rpic == "") {
                    $rpic= "./people/basic.png";
                  }
                  echo "<table class=\"table table-bordered table-striped\">
                  <tbody><tr>
                  <td class=\"span2\">



                  <a style=\"background-color:white\"  href=\"$rpic\" class=\"cboxElement\"><img src=\"$rpic\"  width=\"80px\" height=\"80px\"></a><br>
                  <br>$rfn
                  </td><td class=\"span5\">";


                  if (!$query) {
                  //echo "An error occurred.\n";
                    exit;
                  }
                  else {
                  // echo "No Error!";
                  }
                  while ($row = pg_fetch_row($query)) {
                   $sen = $row[0];
                   $ts = $row[1];
                         $convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
                         $time = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time

                         $con = $row[2];
                         $rec = $row[3];
                         if ($sen == $lu){
                          $other=$rec;
                          echo "<font style=\"color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 12px; line-height: 1.28;\">Me :</font>
                          <font style=\"color: #000; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 11px; line-height: 1.28;\">$con</font>
                          <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 11px; line-height: 1.28;\">$time</font><br>
                          ";
                        }
                        else if ($rec == $lu) {
                          $other=$sen;
                          echo "<font style=\"color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 12px; line-height: 1.28;\">$rfn :</font>
                          <font style=\"color: #000; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 11px; line-height: 1.28;\">$con</font>
                          <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 11px; line-height: 1.28;\">$time</font><br>
                          ";
                        }

                      }

                      echo "<form action=\"sendmessage.php\">
                      <input type=\"hidden\" name=\"sid\" value=$lu>
                      <input type=\"hidden\" name=\"rid\" value=$other>
                      <textarea name=\"content\" class=\"autogrow span8\" style=\"height:40px;\" placeholder=\"Send a Reply\"></textarea>
                      <button type=\"submit\" class=\"btn\">Send</button>
                      </form>
                      </tr>
                      </tbody></table>";
                    }

                    ?>

                    <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
                  </table>
                </div>


              </div>
      </div><!--/row

      <!-- content ends -->
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
<script src="js/liveSearch.js"></script>
  
  



</body>
</html>