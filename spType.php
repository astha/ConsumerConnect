<?php 
       include("connect_sql.php");
       function findDays($days)
        {

        $result="";
        if($days[0]=='1'){
          $result=$result. "Mon ";
          
        }
        if($days[1]=='1')
          $result=$result."Tue ";
        if($days[2]=='1')
          $result=$result."Wed ";
        if($days[3]=='1')
          $result=$result. "Thu ";
        if($days[4]=='1')
          $result=$result."Fri ";
        if($days[5]=='1')
          $result=$result."Sat ";
        if($days[6]=='1')
          $result=$result."Sun ";

        return $result;
      }

       $u=$_REQUEST['see'];
       $lu=40;
       $typeReq=$_REQUEST['type'];
       
?>



<!DOCTYPE html>
<html lang="en"><head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

<title>Service Provider Home - ConsumerConnect </title>
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
         <?php
      echo "<div class=\"span2 main-menu-span\">
        <div class=\"well nav-collapse sidebar-nav in collapse\" style=\"position:fixed; padding:0px; margin-left: 10px; height: 219px;\">
          <ul class=\"nav nav-tabs nav-stacked main-menu\">
            <!-- <li class=\"nav-header hidden-tablet\">Main</li> -->
            <!-- <li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"serviceprovider.php\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Home</span></a></li> -->
            <li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"serviceprovider.php?see=$u\"><i class=\"icon-star\"></i><span class=\"hidden-tablet\"> Reviews</span></a></li>
            <li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"servicequestions.php?see=$u\"><i class=\"icon-question-sign\"></i><span class=\"hidden-tablet\"> Questions</span></a></li>
            <li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"serviceappointments.php?see=$u\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Appointments</span></a></li>
            <li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"servicebids.php?see=$u\"><i class=\"icon-tag\"></i><span class=\"hidden-tablet\"> Bids</span></a></li>
          </ul>
          <!-- <label id=\"for-is-ajax\" class=\"hidden-tablet\" for=\"is-ajax\"><div class=\"checker\" id=\"uniform-is-ajax\"><span><input id=\"is-ajax\" type=\"checkbox\" style=\"opacity: 0;\"></span></div> Ajax on menu</label> -->
        </div><!--/.well -->
      </div><!--/span-->";
      ?>
      <!-- left menu ends -->
      

      <div id="content" class="span8">
        <!-- content starts -->



        <div class="row-fluid sortable ui-sortable" style="text-shadow:none;">
          <div class="box">
            <div class="box-header well" data-original-title="">
             <h2>Service Providers</h2>
             <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
              <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
          </div>
          <div class="box-content" style="display: block;">
            <!-- <div class="thumbnail" style="background-color: rgba(252, 247, 247, 0.68);/* opacity: 0.6; */"> -->
            
                
                  <?php 
      
                      $sql = "SELECT \"ServiceID\" from \"Service\" where \"Type\" ='".$typeReq."';";
                      //echo $sql;
                      $query = pg_query($db, $sql);
                      while ($row = pg_fetch_row($query)) {
                      	$sqlprov = "SELECT * from \"Provides\" where \"ServiceID\" =". $row[0] . ";";
                      	//echo $sqlprov;
                      	$queryprov = pg_query($db, $sqlprov);
                      	while ($rowprov = pg_fetch_row($queryprov)) {

									                        $typesql = "SELECT \"Type\", \"SubType\" from \"Service\" where \"ServiceID\" = ". $row[0] . ";";
									                        $typequery = pg_query($db, $typesql);
									                        $type=pg_fetch_row($typequery);

									                        $regionsql = "SELECT \"CityName\", \"StateName\" from \"Location\" where \"RegionID\" = ". $rowprov[2] . ";";
									                        $regionquery = pg_query($db, $regionsql);
									                        $region=pg_fetch_row($regionquery);

									                        $namesql = "SELECT \"FirstName\", \"LastName\", \"Photograph\" from \"Users\" where \"UserID\" = ". $rowprov[0] . ";";
									                        $namequery = pg_query($db, $namesql);
									                        $name=pg_fetch_row($namequery);
                                          if($name[2]==""){
                                            $name[2]='./people/basic.png';
                                          }

									                        $result=findDays($rowprov[3]);
									                        echo "<table class=\"table table-bordered table-striped\">
									              			<tbody><tr>

                                      
                                      <td style=\"width: 100px;\">
                                        <a style=\"background-color:white\" href=\"$name[2]\" class=\"cboxElement\"><img src=\"$name[2]\" width=\"100\" height=\"100\"></a>
                                      </td>

                                      <td class=\"span5\">
                                        <a href=\"serviceprovider.php?see=$rowprov[0]\"><font style=\"color: #3b5998; font-weight: bold; font-size: 13px; line-height: 1.38; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;\">$name[0] $name[1]</font></a><br>
                                        <font style=\"color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;font-size: 12px; line-height: 1.28;\">$rowprov[6]</font><br>
                    <a href=\"spType.php?type=$type[0]&see=$u\"><font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                    font-size: 11px; line-height: 1.28;\">

                                      $type[0]</font></a> <a href=\"/spSubType.php?type=$type[0]&subtype=$type[1]&see=$u\">
                                             <font style=\"color: #999; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                    font-size: 11px; line-height: 1.28;\"> ($type[1])</a></font>



									                           

									                      

									                      <br><font style=\"color:  #006600; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
									                    font-size: 12px; line-height: 1.28;\">$region[0],$region[1]</font>

									                   
                                    </td>
                                       <td>
                                          <font style=\" font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                                      font-size: 12px; line-height: 1.28;\">$result
                                          <br>$rowprov[4] - $rowprov[5]
                                          <br><font style=\"font-weight: bold; color: #660066;\">Price </font>$rowprov[7] per appointment
                                          <br><font style=\"font-weight: bold; color: #660066;\">Discount </font>$rowprov[8]%</font></td>


                                       

									                           
									                       
									                        </tr>
									                        <tr>
									                        <td colspan=3>
									                        
									                        <br>$rowprov[9]
									                        
									                        </td>
									                        </tr>
									                        </tbody></table>";
									                      }

						}
        ?>

                  

                  
                   

                   
                   <!-- </div> -->

                 </div>
               </div><!--/span-->

             </div>



      <!-- content ends -->
    </div>

<div class="span2">
      <div class="well nav-collapse sidebar-nav in collapse" style="position:fixed; margin-left: 10px; height: 219px; padding:0px">
        <ul class="nav nav-tabs nav-stacked main-menu">
          <!-- <li class="nav-header hidden-tablet">Main</li> -->
          <li class="nav-header hidden-tablet" style="padding-top:10px;">My Services</li>
          <hr style="margin:0px;">
          <hr style="margin:0px;">

          <?php 
      
                      $sql = "SELECT \"Service\".\"Type\" from \"Provides\",\"Service\" where \"ServiceProviderUserID\" = $u and \"Provides\".\"ServiceID\"=\"Service\".\"ServiceID\" group by \"Service\".\"Type\";";
                      $query = pg_query($db, $sql);
                      while ($row = pg_fetch_row($query)) {
                        echo "<li class=\"nav-header hidden-tablet\" style=\"margin-top:8px;\">$row[0]</li>";


                        $typesql = "SELECT \"SubType\",\"Service\".\"ServiceID\" from \"Service\",\"Provides\" where \"ServiceProviderUserID\" = $u and \"Provides\".\"ServiceID\"=\"Service\".\"ServiceID\" and \"Type\" = '". $row[0] . "';";
                        $typequery = pg_query($db, $typesql);
                        while ($typerow = pg_fetch_row($typequery)) {
                          echo "<li style=\"margin-left: -2px;\"><a class=\"ajax-link\" href=\"/moreservices.php?sid=$typerow[1]&see=$u\"><span class=\"hidden-tablet\"><i class=\"icon-play\"></i><font style=\"color:  #6d84b4; font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
                          font-size: 12px; line-height: 1.28;\">$typerow[0]</font></span></a></li>";
                        }
                      }
                        
                      
          ?>


         
        </ul>
        <!-- <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><div class="checker" id="uniform-is-ajax"><span><input id="is-ajax" type="checkbox" style="opacity: 0;"></span></div> Ajax on menu</label> -->
      </div><!--/.well -->
    </div>

   

  </div><!--/fluid-row-->







  <div class="modal hide fade" id="myModal" style="display: none;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">ÃƒÆ’Ã†â€™Ãƒâ€&nbsp;Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬&nbsp;ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€šÃ‚Â</button>
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
  



</body></html>