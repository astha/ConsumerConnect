<!DOCTYPE html>

<?php
include_once("checksession.php");
?>
<?php 
       
       $lu=$userID;

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

          <!-- content ends -->


          <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
            <div class="box">
              <div class="box-header well" data-original-title="">
               <h2>Add a Service</h2>
               <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
              </div>
            </div>
            <div class="box-content" style="display: block;">
             <table class="table table-bordered table-striped">
              <tbody><tr>
                <td>
                  <form role="form" action="addservicenext.php" method="post" class="form-horizontal">
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

                      <label class="control-label" for="startdate">Service Name</label>
                      <div class="controls">
                        <input type="text"  id="sname" name="sname" placeholder="Service Name">
                      </div>
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
                    <label class="control-label" for="appendedPrependedInput">Price</label>
                    <div class="controls">
                      <div class="input-prepend input-append">
                        <span class="add-on">&#8377</span><input id="appendedPrependedInput" size="16" type="text" name="price"><span class="add-on">per appointment</span>
                      </div>
                    </div>
                  </div>   


                  <div class="control-group">
                    <label class="control-label" for="appendedPrependedInput">Discount</label>
                    <div class="controls">
                      <div class="input-prepend input-append">
                        <span class="add-on">&#8377</span><input id="appendedPrependedInput" size="16" type="text" name="discount"><span class="add-on">per appointment</span>
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
                    <button type="submit" class="btn btn-primary">Add Service</button>
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