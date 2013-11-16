<!DOCTYPE html>

<?php
//include_once("checksession.php");
$userID=1;
?>

<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<script type="text/javascript">
function sp(){
  document.getElementsByName("profile")[0].value = 'sp';
}

function customer(){
  document.getElementsByName("profile")[0].value = 'customer';
}
</script>


<title>Edit Profile - ConsumerConnect </title>
<?php 
include_once("consnavbar.php");
?>
<div class="container-fluid">
  <div class="row-fluid">

   <?php 
   include_once("conssidebar.php");
   include_once("connect_sql.php");
   $result=pg_query($db,"select * from \"Users\" where \"UserID\" = $userID;");
   while($row=pg_fetch_array($result)){
     $password=$row[2];
     $firstname=$row[3];
     $lastname=$row[4];
     $emailID=$row[5];
     $photograph=$row[6];
     $contactno=$row[7];
   }
   ?>


   

   <div id="content" class="span8">
    <!-- content starts -->



    <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
      <div class="box">
        <div class="box-header well" data-original-title="">
         <h2>Modify Profile Information </h2>
         <div class="box-icon">
          <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
          <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
        </div>
      </div>
      <div class="box-content" style="display: block;">
        <table class="table table-bordered table-striped">
          <tbody>
            <tr>
              <td>
                <form role="form" class="form-horizontal" action="ep.php">
                  <fieldset>
                    

                    <input type="hidden" name="profile">

                    <div class="control-group">
                      <label class="control-label" for="selectError2">Your Name</label>
                      <div class="controls">
                        <?php echo "<input class=\"input-xlarge focused span6\" name=\"firstname\" id=\"firstName\" type=\"text\" value=\"$firstname\" >
                        <input class=\"input-xlarge focused span6\" name=\"lastname\" id=\"lastName\" type=\"text\" value=\"$lastname\">";?>

                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="number">Contact Number</label>
                      <div class="controls">
                       <?php echo "<input id=\"number\" size=\"16\" type=\"text\" name=\"contactno\" value=\"$contactno\">"; ?>
                     </div>
                   </div>

                   <div class="control-group">
                    <label class="control-label" for="number">EMailID</label>
                    <div class="controls">
                     <?php echo "<input id=\"emailID\" size=\"16\" type=\"text\" name=\"emailID\" value=\"$emailID\">"; ?>
                   </div>
                 </div>

                 <div class="control-group">
                  <label class="control-label" for="number">Password</label>
                  <div class="controls">
                   <?php echo "<input id=\"password\" name=\"password\" size=\"16\" type=\"password\" value=\"$password\">"; ?>
                 </div>
               </div>


               <div class="control-group">
                <label class="control-label" for="photo">Change Photograph</label>
                <div class="controls">
                  <input class="input-file uniform_on" id="photo" type="file" name="uploaded_file">
                </div>
              </div>  

              


              

              <div id="pinfo">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1" onclick="customer();">
                      <div>
                        <h3>Customer Profile</h3>
                      </div>
                    </a>
                  </div>
                  <div id="collapse1" class="accordion-body  collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      <?php

                      $result=pg_query($db,"select * from \"Customer\" where \"UserID\" = $userID;");
                      while($row=pg_fetch_array($result)){
                       $dob=$row[1];
                       $cu =$row[2];
                       $cd=$row[3];
                       $rid=$row[4];
                       $gender=$row[5];
                     }

                     $result=pg_query($db,"select * from \"Location\" where \"RegionID\" = $rid;");
                     while($row=pg_fetch_array($result)){
                       $city=$row[1];
                       $state =$row[2];
                       
                     }

                     echo "<div class=\"control-group\">";
                     echo " <label class=\"control-label\">States</label> <div class=\"controls\">
                     <font id=\"states\"><select>\n";
                     echo "<option value='$state'>$state</option> \n" ;
                     echo "</select></font></div> 
                     \n";
                     
                     echo " <label class=\"control-label\">Cities</label> <div class=\"controls\"><font id=cities><select>\n";
                     echo "<option value='$city'></option> \n" ;
                     echo "</select></font></div>\n";

                     echo "</div>";
                     if($gender=='Female'){
                      echo "
                      <div class=\"control-group\">
                      <label class=\"control-label\" >Gender</label>


                      <div class=\"controls\">
                      <label class=\"radio\">
                      
                      <input type=\"radio\" name=\"gender\" id=\"male\" value=\"male\">
                      Male
                      </label>
                      <div style=\"clear:both\"></div>
                      <label class=\"radio\">
                      <input type=\"radio\" name=\"gender\" id=\"female\" value=\"female\" checked>
                      Female
                      </label>
                      </div>
                      </div>";
                    }
                    else{echo "
                      <div class=\"control-group\">
                    <label class=\"control-label\" >Gender</label>


                    <div class=\"controls\">
                    <label class=\"radio\">
                    
                    <input type=\"radio\" name=\"gender\" id=\"male\" value=\"male\" checked>
                    Male
                    </label>
                    <div style=\"clear:both\"></div>
                    <label class=\"radio\">
                    <input type=\"radio\" name=\"gender\" id=\"female\" value=\"female\">
                    Female
                    </label>
                    </div>
                    </div>";}

                    echo" <div class=\"control-group\">

                    <label class=\"control-label\">Date of Birth</label>
                    <div class=\"controls\">
                    <input type=\"text\" class=\"input-xlarge datepicker span6\" name=\"dob\" id=\"dob\" value=\"$dob\">

                    </div>
                    </div>";


                    ?>


                    
                  </div>
                </div>
              </div>

              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2" onclick="sp();">
                    <div>
                      <h3>Service Provider Profile</h3>
                    </div>
                  </a>
                </div>
                <div id="collapse2" class="accordion-body  collapse" style="height: 0px;">
                  <div class="accordion-inner">
                    <?php

                    $result=pg_query($db,"select * from \"ServiceProvider\" where \"UserID\" = $userID;");
                    while($row=pg_fetch_array($result)){
                     $webpage=$row[1];
                   }


                   echo "
                   <div class=\"control-group\">
                   <label class=\"control-label\" for=\"number\">WebPage</label>
                   <div class=\"controls\">
                   <input id=\"number\" size=\"16\" type=\"text\" name=\"webpage\" value=\"$webpage\">
                   </div>
                   </div>";

                   ?>
                   
                 </div>
               </div>
             </div>


           </div>

           


           <div class="form-actions">
            <button type="submit" class="btn btn-primary">Submit Details</button>
          </div>
        </fieldset>
      </form>
    </td>
  </tr>
</tbody>
</table>

</div>
</div>
</div>
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



  <script type="text/javascript">
  function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
 };

 function dochange(src, val) {
  console.log(src);
  console.log(val);
  var req = Inint_AJAX();
  req.onreadystatechange = function () { 
    if (req.readyState==4) {
     if (req.status==200) {
      console.log(document.getElementById('pinfo').innerHTML);
                    document.getElementById(src).innerHTML=req.responseText; //retuen value
                  } 
                }
              };
     req.open("GET", "state.php?data="+src+"&val="+val); //make connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
     req.send(null); //send value
   }



window.onLoad=dochange('states', -1);         // value in first dropdown
//window.onLoad(init());
</script>


</body>
</html>