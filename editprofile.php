<!DOCTYPE html>

<?php
include_once("checksession.php");
?>

<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>Edit Profile - ConsumerConnect </title>
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
                    <form role="form" class="form-horizontal">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label" for="selectError2">Your Name</label>
                          <div class="controls">
                            <input class="input-xlarge focused span6" id="firstName" type="text" value="Rashmi" >
                            <input class="input-xlarge focused span6" id="lastName" type="text" value="Sharma">

                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" for="number">Contact Number</label>
                          <div class="controls">
                            <input id="number" size="16" type="text" value="9413382711">
                          </div>
                        </div>


                        <div class="control-group">
                          <label class="control-label" for="photo">Change Photograph</label>
                          <div class="controls">
                            <input class="input-file uniform_on" id="photo" type="file">
                          </div>
                        </div>  

                        <div class="controls">
                          <h5 >
                            For Your Customer Profile
                          </h5>
                        </div>
                        <br>

                        <div class="control-group">

                          <label class="control-label">Select Country</label>
                          <div class="controls">
                            <select name="country" onchange="getState(this.value)"><option>India</option><option value="1">USA</option><option value="2">India</option> <option value="3">Canada</option> </select>
                          </div>
                        </div>

                        <div class="control-group">

                          <label class="control-label">Select State</label>
                          <div class="controls">
                            <select name="state"><option>Rajasthan</option> </select>
                          </div>
                        </div>

                        <div class="control-group">

                          <label class="control-label">Select City</label>
                          <div class="controls">
                            <select name="city"><option>Jaipur</option> </select>
                          </div>
                        </div>

                        <div class="control-group">
                          <label class="control-label" >Gender</label>


                          <div class="controls">
                            <label class="radio">
                              <input type="radio" name="gender" id="male" value="option1">
                              Male
                            </label>
                            <div style="clear:both"></div>
                            <label class="radio">
                              <input type="radio" name="gender" id="female" value="option2" checked>
                              Female
                            </label>
                          </div>
                        </div>

                        <div class="control-group">

                          <label class="control-label">Date of Birth</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge datepicker span6" id="dob" value="25/02/1984">

                          </div>
                        </div>

                        <div class="controls">
                          <h5 >
                            For Your Service Provider Profile
                          </h5>
                        </div>
                        <br>
                        <div class="control-group">
                          <label class="control-label" for="number">WebPage</label>
                          <div class="controls">
                            <input id="number" size="16" type="text" value="www.rashmiarts.com">
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


    
       <?php
    include_once("consrightsidebar.php");
    ?>

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