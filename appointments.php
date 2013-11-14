<!DOCTYPE html>

<?php
include_once("checksession.php");
?>

<?php 
include("connect_sql.php");
$lu=$userID; 
?>


<html>
<head>
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">

	<title>Appointments - ConsumerConnect </title>
	<link rel="icon" type="image/png" href="favicon.ico">
	<link href="css/my.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
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
	<!-- <link rel="stylesheet" href="css/calendar.css"> -->
	<link href="css/fullcalendar.css" rel="stylesheet">
	<link href="css/fullcalendar.print.css" rel="stylesheet" media="print">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<script src='js/jquery.min.js'></script>
	<script src='js/jquery-ui.custom.min.js'></script>

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
	<!-- data table plugin -->
	<script src="js/jquery.dataTables.min.js"></script>
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
	<!-- to specify the rating ids -->
	<script src="js/rating.js"></script>
	<script src="js/liveSearch.js"></script>
  
	<script src="js/charisma.js"></script>
	<script src='js/fullcalendar.min.js'></script>


	<script type="text/javascript">
	
	function signOut() {
		$.get("clearAll.php");
	}

	$(document).ready(function() {

		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			editable: true,
			selectable: true,
      //header and other values
      select: function(start, end, allDay) {
      	endtime = $.fullCalendar.formatDate(end,'h:mm tt');
      	starttime = $.fullCalendar.formatDate(start,'ddd, MMM d, h:mm tt');
      	var mywhen = starttime + ' - ' + endtime;
      	$('#createEventModal #apptStartTime').val(start);
      	$('#createEventModal #apptEndTime').val(end);
      	$('#createEventModal #apptAllDay').val(allDay);
      	$('#createEventModal #when').text(mywhen);
      	$('#createEventModal').modal('show');
      }
  });

		$('#submitButton').on('click', function(e){
    // We don't want this to act as a link so cancel the link action
    e.preventDefault();

    doSubmit();
});

		function doSubmit(){
			$("#createEventModal").modal('hide');
			console.log($('#apptStartTime').val());
			console.log($('#apptEndTime').val());
			console.log($('#apptAllDay').val());
			alert("form submitted");

			$("#calendar").fullCalendar('renderEvent',
			{
				title: $('#patientName').val(),
				start: new Date($('#apptStartTime').val()),
				end: new Date($('#apptEndTime').val()),
				allDay: ($('#apptAllDay').val() == "true"),
			},
			true);
		}
	});
</script>

<script type="text/javascript">
function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
};

function dochange() {
	var req = Inint_AJAX();
	req.onreadystatechange = function () { 
		if (req.readyState==4) {
			if (req.status==200) {

               		//alert(req.responseText);
               		var obj = eval(req.responseText);
                    //alert(req.responseText);
                    for(var i in obj){
                    	var startDate = obj[i].startDate;
                    	var startTime = obj[i].startTime;
                    	var endTime = obj[i].endTime;
                    	var caption1 = obj[i].caption1;

                    	startTime= startDate+" "+startTime;
                    	endTime= startDate+" "+endTime;

                    	$("#calendar").fullCalendar('renderEvent',
                    	{
                    		title: caption1,
                    		start: new Date(startTime),
                    		end: new Date(endTime),
                    		allDay: false,
                    	},
                    	true);
 						 //alert(startDate);

 						}
					//alert(obj.startDate); // 12345


        //             $("#calendar").fullCalendar('renderEvent',
        // {
        //     title: $('#patientName').val(),
        //     start: new Date($('#apptStartTime').val()),
        //     end: new Date($('#apptEndTime').val()),
        //     allDay: ($('#apptAllDay').val() == "true"),
        // },
        // true);
} 
}
};
   <?php echo" req.open(\"GET\", \"loadCalendar.php?user=$lu\");"; ?> //make connection
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=iso-8859-1"); // set Header
     req.send(null); //send value
 }

 window.onLoad=dochange();     
 </script>

</head>
<body>
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
						<input type="text" class="span4" autocomplete="off" id="searchFriend" placeholder="Find Users...">
						<ul id="results"></ul>
					</form>

					<span>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings <b class="caret"></b></a>
								<ul class="dropdown-menu" align="left">
									<li><a href="#"><i class="icon-share"></i> Switch To</a></li>
									<li><a href="#"><i class="icon-pencil"></i> Edit Profile</a></li>
									<li class="divider"></li>
									<li><a href="index.php" onclick="signOut();"><i class="icon-off"></i> Sign Out</a></li>
								</ul>
							</li>
						</ul>
					</span></div>
				</div>
				<!-- </div> -->
			</div>

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
									<h2>My Appointments </h2>
									<div class="box-icon">
										<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
										<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
									</div>
								</div>
								<div class="box-content" style="display: block;">
									<table class="table table-striped">
										<tbody><tr><td>

											<div id='calendar' width="100%" ></div>
										</td></tr>			</tbody> </table>
									</div>
								</div>
							</div>
						</div>
						
       <?php
    include_once("consrightsidebar.php");
    ?>
					</div>

					<div id="createEventModal" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="myModalLabel1">Create Appointment</h3>
						</div>
						<div class="modal-body">
							<form id="createAppointmentForm" class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="inputPatient">Patient:</label>
									<div class="controls">
										<input type="text" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">
										<input type="hidden" id="apptStartTime"/>
										<input type="hidden" id="apptEndTime"/>
										<input type="hidden" id="apptAllDay" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="when">When:</label>
									<div class="controls controls-row" id="when" style="margin-top:5px;">
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<button type="submit" class="btn btn-primary" id="submitButton">Save</button>
						</div>
					</div>



				</body>


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

</html>
