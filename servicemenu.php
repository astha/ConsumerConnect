<!DOCTYPE html>
<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>Select Servie Type - ConsumerConnect </title>
<link rel="icon" type="image/png" href="favicon.ico">
<link href="css/my.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">
<link href="css/fullcalendar.print.css" rel="stylesheet" media="print">
<link href="css/chosen.css" rel="stylesheet">
<link href="css/uniform.default.css" rel="stylesheet">
<link href="css/colorbox.css" rel="stylesheet">
<link href="css/jquery.cleditor.css" rel="stylesheet">
<link href="css/jquery.noty.css" rel="stylesheet">
<link href="css/noty_theme_default.css" rel="stylesheet">
<link href="css/elfinder.min.css" rel="stylesheet">
<link href="css/elfinder.theme.css" rel="stylesheet">
<link href="css/jquery.iphone.toggle.css" rel="stylesheet">
<link href="css/opa-icons.css" rel="stylesheet">
<link href="css/uploadify.css" rel="stylesheet">

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">

<!-- <link href="css/reset.css" rel="stylesheet"> -->



</head>

<body class="">
  <!-- topbar starts -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <!-- <div class="container-fluid"> -->
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="span3" style="min-width:278px;"><a href="index.html"><img src="./images/logo.gif" width="270px" height="40px" style="float: left;"></a></div>
      <img class="span2">
      <div class="nav-collapse in collapse" style="height: auto;">
        <form class="navbar-form pull-left">
          <input class="span4" type="text" placeholder="Find Users...">
          <button type="submit" class="btn">Search</button>
        </form>

        <span>
          <ul class="nav pull-right">
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings <b class="caret"></b></a>
            <ul class="dropdown-menu" align="left">
              <li><a href="#"><i class="icon-share"></i> Switch To</a></li>
              <li><a href="#"><i class="icon-pencil"></i> Edit Profile</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="icon-off"></i> Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </span></div>
    </div>
    <!-- </div> -->
  </div>
  <!-- topbar ends -->
  <div class="container-fluid">
    <div class="row-fluid">

      <!-- left menu starts -->
      <div class="span2 main-menu-span">
        <div class="well nav-collapse sidebar-nav in collapse" style="position:fixed; padding:0px; margin-left: 10px; height: 219px;">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <!-- <li class="nav-header hidden-tablet">Main</li> -->
            <li style="margin-left: -2px;"><a class="ajax-link" href="cons.html"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="myreviews.html"><i class="icon-star"></i><span class="hidden-tablet"> My Reviews</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="friends.html"><i class="icon-user"></i><span class="hidden-tablet"> My Friends</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="friendreviews.html"><i class="icon-star-empty"></i><span class="hidden-tablet"> Friends' Reviews</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="questions.html"><i class="icon-question-sign"></i><span class="hidden-tablet"> My Questions</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="appointments.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Appointments</span></a></li>
            <li style="margin-left: -2px;"><a class="ajax-link" href="wishlist.html"><i class="icon-gift"></i><span class="hidden-tablet"> Wishlist</span></a></li>
          </ul>
          <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><div class="checker" id="uniform-is-ajax"><span><input id="is-ajax" type="checkbox" style="opacity: 0;"></span></div> Ajax on menu</label> -->
        </div><!--/.well -->
      </div><!--/span-->
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



  <div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav in collapse" style="position:fixed; margin-left: 10px; height: 219px; padding:0px">
      <ul class="nav nav-tabs nav-stacked main-menu">
        <!-- <li class="nav-header hidden-tablet">Main</li> -->
        <li style="margin-left: -2px;"><a class="ajax-link" href="services.html"><i class="icon-random"></i><span class="hidden-tablet"> Services</span></a></li>
        <li style="margin-left: -2px;"><a class="ajax-link" href="myreviews.html"><span class="hidden-tablet"><i class="icon-play"></i> Doctor</span></a></li>
        <li style="margin-left: -2px;"><a class="ajax-link" href="friendreviews.html"><span class="hidden-tablet"><i class="icon-play"></i> Salon</span></a></li>
        <li style="margin-left: -2px;"><a class="ajax-link" href="questions.html"><span class="hidden-tablet"><i class="icon-play"></i> Mechanic</span></a></li>
        <li style="margin-left: -2px;"><a class="ajax-link" href="appointments.html"><span class="hidden-tablet"><i class="icon-play"></i> Plumber</span></a></li>
        <li style="margin-left: -2px;"><a class="ajax-link" href="wishlist.html"><span class="hidden-tablet"><i class="icon-list"></i> More Services</span></a></li>
      </ul>
      <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><div class="checker" id="uniform-is-ajax"><span><input id="is-ajax" type="checkbox" style="opacity: 0;"></span></div> Ajax on menu</label> -->
    </div><!--/.well -->
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

  



</body>
</html>