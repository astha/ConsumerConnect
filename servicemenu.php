<!DOCTYPE html>

<include_once("checksession.php");
$lu = $userID;
?>

<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>Select Servie Type - ConsumerConnect </title>
<?php
include_once("consnavbar.php");
?>  <!-- topbar ends -->
  <div class="container-fluid">
    <div class="row-fluid">

      <!-- left menu starts -->
      <?php
    include_once("conssidebar.php");
    ?>
      <!-- left menu ends -->
      

      <div id="content" class="span8">
        <!-- content starts -->



        <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
          <div class="box">
            <div class="box-header well" data-original-title="">
              <h2>Select Service</h2>
              <div class="box-icon">
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
              </div>
            </div>
            <div class="box-content" style="display: block;">


             <table class="table table-bordered table-striped">
              <tbody><tr>
                <td>
                  <form action="demo_form.asp" id="form1" class="form-horizontal" role="form">
                    <div class="accordion" id="accordion2">
                      <?php
                      include("connect_sql.php");
                      include_once("classes/develop_php_library.php");

                      $sql = "SELECT DISTINCT \"Type\" from \"Service\" order by \"Type\"";
                      $query = pg_query($db, $sql);


                      while ($row = pg_fetch_row($query)) {
                        $type = $row[0];
                        $type1 = str_replace(' ', '_', $type);
                        $type1 = str_replace(',', '', $type1);
                        $type2 = str_replace(' ', '%20', $type);
                        echo "<div class=\"accordion-group\">
                        <div class=\"accordion-heading\">
                        <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#$type1\">
                        <div>
                        <h4>$type</h4>
                        </div>
                        </a>
                        </div>
                        <div id=\"$type1\" class=\"accordion-body  collapse\" >
                        <div class=\"accordion-inner\">
                        <ul class=\"nav nav-tabs nav-stacked\"> ";
                        $sql1 = "SELECT  \"SubType\", \"ServiceID\" from \"Service\" where \"Type\"='$type'";
                        $query1 = pg_query($db, $sql1);
                        // echo "astha";
                        //echo $sql1;
                        while ($row1 = pg_fetch_row($query1)){
                          $subtype = $row1[0];
                          $subtype2 = str_replace(' ', '%20', $subtype);
                          $sid = $row[1];
                          
                          echo "<li><div class=\"serviceoptions\"><a href=spSubType.php?type=$type2&subtype=$subtype2>{$subtype}</a></div></li>";
                        }
                        echo " </ul>

                        </div>
                        </div>
                        </div>";
                      }
                      ?>


                    </div >
                   

                  </form>
                  <!-- </div> -->
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div><!--/span-->

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