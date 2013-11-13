<!DOCTYPE html>

<?php
include_once("checksession.php");
?>
<?php 
       
       $lu=49;

       function findDays($days)
        {

        $result="";
        if($days[0]=='1'){
          $result=$result. "Sun ";
          
        }
        if($days[1]=='1')
          $result=$result."Mon ";
        if($days[2]=='1')
          $result=$result."Tue ";
        if($days[3]=='1')
          $result=$result. "Wed ";
        if($days[4]=='1')
          $result=$result."Thu ";
        if($days[5]=='1')
          $result=$result."Fri ";
        if($days[6]=='1')
          $result=$result."Sat ";

        return $result;
      }
       
?>



<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>My Wishlist - ConsumerConnect </title>
<?php
include_once("consnavbar.php");
?>  <!-- topbar ends -->
  <div class="container-fluid">
    <div class="row-fluid">

      <!-- left menu starts -->
     <?php 
      include_once("conssidebar.php");
     ?>      

      <div id="content" class="span8">
        <!-- content starts -->



        <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
          <div class="box">
            <div class="box-header well" data-original-title="">
             <h2>My Wishlist</h2>
             <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content" style="display: block;">
           <?php
            include("connect_sql.php");
            include_once("classes/develop_php_library.php"); // Include the class library
            $timeAgoObject = new convertToAgo; // Create an object for the time conversion functions
              // Query your database here and get timestamp
              $sql = "SELECT * from \"Wish\" where \"CustomerUserID\"='$lu' order by \"Timestamp\" desc";
              
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
                  $wid= $row[0];
                  $des= $row[2];
                  $mp= $row[3];
                  $sd= $row[4];
                  $ed= $row[5];
                  $days= $row[6];
                  $st= $row[7];
                  $et= $row[8];
                  $sid= $row[9];
                  $rid= $row[10];
                  $ts= $row[11];
                  $convertedTime = ($timeAgoObject -> convert_datetime($ts)); // Convert Date Time
                  $time = ($timeAgoObject -> makeAgo($convertedTime)); // Then convert to ago time
                  $sql = "SELECT \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where \"UserID\" = '$lu'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
              
                  
                  $cfn = $row[0];
                  $cln = $row[1];
                  $cpic = $row[2];
              
                  $sql = "SELECT \"Type\", \"SubType\" from \"Service\" where \"ServiceID\" = '$sid'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                 
                  $type = $row[0];
                  $stype = $row[1];
                  $sql = "SELECT \"CumulativeUpVotes\", \"CumulativeDownVotes\" from \"Customer\" where \"UserID\" = '$lu'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                   
                  $cu= $row[0];
                  $cd = $row[1];
                  $sql = "SELECT \"CityName\", \"StateName\" from \"Location\" where \"RegionID\" = '$rid'";
                  $query = pg_query($db, $sql);
                  $row = pg_fetch_row($query);
                   
                  $city = $row[0];
                  $state = $row[1];
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

                  $daystring=findDays($days);
                  echo "<table class=\"table table-bordered table-striped\" style=\" margin-bottom:2px\"> 
             <tbody><tr>
              <td style=\"width: 100px; height: 100px;\">



                <a style=\"background-color:white\" title=\"User4\" href=\"images/user4.png\" class=\"cboxElement\"><img src=\"images/user4.png\" alt=\"User4\" width=\"100\" height=\"100\"></a></td>
                <td class=\"span4\"><font style=\"color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\"><a href =\"index.php\">$cfn $cln</a></font><br>


                  <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">$time</font><br>
                  <img src=\"images/Q.jpeg\" width=40px height=70px>
                </td>



                <td class=\"span4\"><font style=\"float:right; color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$type</font><br>
                  <font style=\"float:right;color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 12px; line-height: 1.28;\">$stype</font><br>
                  <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">$city, $state</font><br>
                  <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">$st-$et $daystring</font><br>
                  <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">Maximum Price: $mp</font></td>

                </tr><tr></tr>
                <tr><td colspan=\"4\" style=\"width: 100%;\">
                  <div class=\"btn btn-danger pull-right enabled vbtn\"><i class=\"icon-trash\"></i> Remove wish</div>
                    <br>
                  <p style=\"float: left; color: #333; font-size: 13px;line-height: 1.38; font-weight: normal; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif; padding-top:2px;\"> I urgently need a tutor for my 10 year old son, who needs help with his Grade 5 Mathematics. Anyone willing can put a bid over here, and I will contact you accordingly. The selection of tutor will be solely based on his/her skills and sufficient salary would be provided as long as results are satisfactory. Please provide some details while putting a bid.<br>
                  </p>
                </td>
              </tr>
            </table><table class=\"table table-bordered\"><tbody> ";
                  $sql = "SELECT * from \"Bids\" where \"WishID\" = '$wid' and \"CustomerUserID\" = '$lu'";
                  $query2 = pg_query($db, $sql);
                  
                  while ($row = pg_fetch_row($query2)) {
                    $spid = $row[0];
                    $bid = $row[3];
                    $details = $row[4];
                    $sql = "SELECT \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where \"UserID\" = '$spid'";
                    $query = pg_query($db, $sql);
                    $row = pg_fetch_row($query);
                     
                    $spfn = $row[0];
                    $spln = $row[1];
                    $sppic = $row[2];
                  
                  
                    echo "<tr>


                <!-- <td class=\"span4\"></td> -->
                <td>

                  <p style=\"color: #333; font-size: 13px;line-height: 1.38; font-weight: normal; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">
                    <i class=\"icon-tag\"></i>
                    $details<br>
                    <div class=\"btn btn-success pull-right enabled vbtn\"><i class=\"icon-calendar\"></i> Add Appointment</div>

                  </p>



                </td>
                <td style=\"width:115px;\"><font style=\"float:right;color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$spfn $spln</font><br>
                  <font style=\"float:right;color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                  font-size: 11px; line-height: 1.28;\">&#8377 $bid per appt.</font>
                  <div id=\"half\" data-score=\"3.3\" class=\"pull-right\"></div>

                  <br>
                </td>

                <td style=\"width: 100px;\">
                  <a style=\"background-color:white\" title=\"User5\" href=\"images/user5.png\" class=\"cboxElement\"><img src=\"images/user5.png\" alt=\"User5\"></a></td>

                </tr>";
 
               

                  }
                echo "</tbody></table>";
 
              }
             ?>

           

                <!-- </div> -->

              </div>
            </div><!--/span-->


          </div>

          <!-- content ends -->


          <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
            <div class="box">
              <div class="box-header well" data-original-title="">
               <h2>Add a Wish</h2>
               <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
              </div>
            </div>
            <div class="box-content" style="display: block;">
             <table class="table table-bordered table-striped">
              <tbody><tr>
                <td>
                  <form role="form" action="addWish.php" method="get" class="form-horizontal">
                    <fieldset>
                     <div class="control-group">

                  <?php     
     echo " <label class=\"control-label\">Select Type of Service</label> <div class=\"controls\">
 <font id=services><select>\n";
     echo "<option value='0'></option> \n" ;
     echo "</select></font></div> 
\n";
     
     echo " <label class=\"control-label\">Select SubType of Service</label> <div class=\"controls\"><font id=subservices><select>\n";
     echo "<option value='0'></option> \n" ;
     echo "</select></font></div>\n";
?>
</div>
                    

<div class="control-group">

                  <?php     
     echo "<form name=sel>\n";
     echo " <label class=\"control-label\">Select State</label> <div class=\"controls\">
 <font id=states><select>\n";
     echo "<option value='0'></option> \n" ;
     echo "</select></font></div> 
\n";
     
     echo " <label class=\"control-label\">Select City</label> <div class=\"controls\"><font id=cities><select>\n";
     echo "<option value='0'></option> \n" ;
     echo "</select></font></div>\n";
?>
</div>

                    <div class="control-group">

                      <label class="control-label" for="startdate">Select Date</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge datepicker span6" id="startdate" name="startdate" placeholder="Start Date">
                        <input type="text" class="input-xlarge datepicker span6" id="enddate" name="enddate" placeholder="End Date">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="selectError1">Select Day</label>
                      <div class="controls">
                        <select id="selectError1" multiple data-rel="chosen" name="days[]">
                          <option>Monday</option>
                          <option>Tuesday</option>
                          <option>Wednesday</option>
                          <option>Thursday</option>
                          <option>Friday</option>
                          <option>Saturday</option>
                          <option>Sunday</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group" >
                      <label class="control-label" for="selectError2">Select Time</label>
                      <div class="controls">
                        <div class="input-append bootstrap-timepicker span4" style="float:left;">
                          <input id="timepicker1" type="text" placeholder="Start Time" class="input-small" name="starttime">
                          <span class="add-on"><i class="icon-time"></i></span>
                        </div>
                        <div style="float:left;">  
                          <label class="span8"> to </label>
                        </div>
                        <div class="input-append bootstrap-timepicker span4" style="float:left;">

                          <input id="timepicker2" type="text" class="input-small" name="endtime">
                          <span class="add-on"><i class="icon-time"></i></span>
                        </div>
                      </div>

                    </div>
                  
                  <div class="control-group">
                    <label class="control-label" for="appendedPrependedInput">Maximum Price</label>
                    <div class="controls">
                      <div class="input-prepend input-append">
                        <span class="add-on">&#8377</span><input id="appendedPrependedInput" size="16" type="text" name="price"><span class="add-on">per appointment</span>
                      </div>
                    </div>
                  </div>   
                  <div class="control-group">
                    <label class="control-label" for="appendedPrependedInput">Description</label>
                    <div class="controls">

                      <textarea class="autogrow span10" style="height:80px;" placeholder="Add details..." name="description"></textarea>

                    </div>
                  </div>


                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add Wish</button>
                  </div>
                </fieldset>
              </form>
            </td>
          </tr>
        </table>
        </div>
      </div>
    </div><!--/span-->


 
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
  <script src="js/bootstrap-timepicker.js"></script>
  <script src="js/bootstrap-timepicker.min.js"></script>

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
  

  <script type="text/javascript">
  $('#timepicker1').timepicker();
  </script>
  <script type="text/javascript">
  $('#timepicker2').timepicker();
  </script>

  <script type="text/javascript">
function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
};

function dochange(src, val) {
     var req = Inint_AJAX();
     req.onreadystatechange = function () { 
          if (req.readyState==4) {
               if (req.status==200) {
                    document.getElementById(src).innerHTML=req.responseText; //retuen value
               } 
          }
     };
     req.open("GET", "state.php?data="+src+"&val="+val); //make connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
     req.send(null); //send value
}

window.onLoad=dochange('states', -1);         // value in first dropdown
</script>

<script type="text/javascript">
function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
};

function dochange2(src, val) {
     var req = Inint_AJAX();
     req.onreadystatechange = function () { 
          if (req.readyState==4) {
               if (req.status==200) {
                    document.getElementById(src).innerHTML=req.responseText; //retuen value
               } 
          }
     };
     req.open("GET", "serviceajax.php?data="+src+"&val="+val); //make connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
     req.send(null); //send value
}

window.onLoad=dochange2('services', -1);         // value in first dropdown
</script>


</body>
</html>