

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

<link href="css/bootstrap-timepicker.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">



<script src="js/liveSearch.js"></script>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <!-- <div class="container-fluid"> -->
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div class="span3" style="min-width:278px;"><a href="index.php"><img src="./images/logo.gif" width="270px" height="40px" style="float: left;"></a></div>
    <img class="span2">
    <div class="nav-collapse in collapse" style="height: auto;">
      <form class="navbar-form pull-left">
        <input type="text" class="span4" autocomplete="off" id="searchFriend" placeholder="Find Users...">
        <ul id="results"></ul>
      </form>
      <span>
        <ul class="nav pull-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings <b class="caret"></b></a>
          <ul class="dropdown-menu" align="left">
            <li><a href="serve.php"><i class="icon-share"></i> Switch To Service Provider</a></li>
            <li><a href="cons.php"><i class="icon-share"></i> Switch To Consumer</a></li>
            
            <li><a href="editprofile.php"><i class="icon-pencil"></i> Edit Profile</a></li>
            <li class="divider"></li>
            <li><a href="index.php" onclick="signOut();"><i class="icon-off"></i> Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </span></div>
  </div>
  <!-- </div> -->
</div>
