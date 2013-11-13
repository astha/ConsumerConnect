<html><head><script src="chrome-extension://okffnhejfhpaihcocihfbojpjpiekjbp/analyster/common.js"></script><script src="chrome-extension://okffnhejfhpaihcocihfbojpjpiekjbp/extensionconfig.js"></script><script src="chrome-extension://okffnhejfhpaihcocihfbojpjpiekjbp/amtCore.js"></script>	
		<meta charset="utf-8"> 
		<title>CricQ</title>
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<style type="text/css"></style></head>
	<body style="">
		<div class="container">
			<h1> <a href="#">CricQ</a></h1>
			<div class="navbar">
              <div class="navbar-inner">
                <div class="container">
                  <ul class="nav">
                    <li class="active"><a href="#">Match</a></li>
                    <li><a href="#">Batting</a></li>
                    <li><a href="#">Bowling</a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
			<form action="demo_form.asp" id="form1" class="form-horizontal" role="form">
				<div class="accordion" id="accordion2">
		            <div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
								<div>
									<h3>Team</h3>
								</div>
							</a>
						</div>
						<div id="collapse1" class="accordion-body  collapse" style="height: 0px;">
							<div class="accordion-inner">
									<div class="from-group" style="padding:2px;">
									    <label for="team" class="control-label"><strong>Team</strong></label>							    
									    <input type="text" id="team" name="team" class="form-control" style="margin-left:5px;">   
								    </div>
								    <div class="form-group" style="padding:2px;">

									    <label for="oppsition" class="control-label"><strong>Opposition</strong></label>							    
									    <input type="text" id="oppsition" name="oppsition" class="form-control" style="margin-left:5px;">							    
									</div>
							  	
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
								<div>
									<h3>When &amp; Where</h3>
								</div>
							</a>
						</div>
						<div id="collapse2" class="accordion-body  collapse" style="height: 0px;">
							<div class="accordion-inner">
									<div class="form-group" style="padding:2px;">
									    <label for="homeaway" class="control-label"><strong>Home or Away</strong></label>							
						
									    
										<select id="homeaway" class="form-control" style="margin-left:5px;">
											<option value="either" selected="">Either</option>
											<option value="home">Home</option>
											<option value="away">Away</option>
											<option value="Neutral">Neutral</option>
										</select>

								    </div>
								    <br>
								    <div class="form-group" style="padding:2px;margin-top:-10px;">

									    <label for="ground" class="control-label"><strong>Ground</strong></label>							    
									    <input type="text" id="ground" name="ground" class="form-control" style="margin-left:5px;">							    
									</div>
									<div class="form-group" style="padding:2px;">
									    <label for="tournament" class="control-label"><strong>Tournament Name</strong></label>							    
									    <input type="text" id="tournament" name="tournament" class="form-control" style="margin-left:5px;">			    
									</div>

									<div class="form-group" style="padding:2px;">
									    <label for="startdate" class="control-label"><strong>Starting date</strong></label>							    
									    <input type="date" id="startdate" name="startdate" class="form-control" style="margin-left:5px;">			    
									</div>
							  		<div class="form-group" style="padding:2px;">
									    <label for="enddate" class="control-label"><strong>Ending date</strong></label>							    
									    <input type="date" id="enddate" name="enddate" class="form-control" style="margin-left:5px;">			    
									</div>
									<div class="form-group" style="padding:2px;">
									    <label for="daynight" class="control-label"><strong>Day or D/N</strong></label>							
						
										<select id="daynight" class="form-control" style="margin-left:5px;">
									    	<option value="either" selected="">Either</option>
											<option value="day">Day</option>
											<option value="daynight">Day/Night</option>
										</select>
								    </div>
							  	
							  	
							</div>
						</div>		
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
								<div>
									<h3>Scores &amp; Results</h3>
								</div>
							</a>
						</div>
						<div id="collapse3" class="accordion-body  collapse">
							<div class="accordion-inner">
									<div class="form-group" style="padding:2px;">
									    <label for="result" class="control-label"><strong>Match Result</strong></label>							
						
									    <select id="result" class="form-control" style="margin-left:5px;">
									    	<option value="either" selected="">Either</option>
											<option value="won">Won</option>
											<option value="lost">Lost</option>
											<option value="draw">Draw</option>
											<option value="noresult">No Result</option>
										</select>
										
								    </div>
						
								    <div class="form-group" style="padding:2px;">
									    <label for="batfirst" class="control-label"><strong>Bat/Bowl First </strong></label>						
										
										<select id="battingorder" class="form-control" style="margin-left:5px;">
											<option value="either" selected="">Either</option>
											<option value="first">Batting</option>
											<option value="second">Bowling</option>
										</select>
									    
								    </div>
						
								    <div class="form-group" style="padding:2px;">
									    <label class="control-label"><strong>Team Scored b/w</strong></label>							
								    	<input type="number" id="scored_atleast" name="scored_atleast" class="inline" style="margin-left:5px;margin-right:20px;" min="0" value="0" max="450">
								    	and
										<input type="number" id="scored_atmost" name="scored_atmost" class="inline" style="margin-left:20px;" min="0" value="450" max="450">
								    </div>
							  		<div class="form-group" style="padding:2px;">
									    <label class="control-label"><strong>Opposition Scored b/w</strong></label>							
								    	<input type="number" id="conceded_atleast" name="conceded_atleast" class="inline" style="margin-left:5px;margin-right:20px;" min="0" value="0" max="450">
								    	and
										<input type="number" id="conceded_atmost" name="conceded_atmost" class="inline" style="margin-left:20px;" min="0" value="450" max="450">
								    </div>
							</div>
						</div>		
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
								<div>
									<h3>Players</h3>
								</div>
							</a>
						</div>
						<div id="collapse4" class="accordion-body  collapse">
							<div class="accordion-inner">
														
							    <div class="form-group" style="padding:2px;">

								    <label class="control-label"><strong>Including Players</strong></label>							    
								    <input type="text" id="player1" name="player1" class="form-control" style="margin-left:5px;">					

								</div>												
							
							    <div class="form-group" style="padding:2px;">

								    <label class="control-label"><strong>Including Captains</strong></label>							    
								    <input type="text" id="captain1" name="captain1" class="form-control" style="margin-left:5px;">					
								    		    
								</div>												
								<div class="form-group" style="padding:2px;">

								    <label class="control-label"><strong>Including Wicket Keepers</strong></label>							    
								    <input type="text" id="wk1" name="wk1" class="form-control" style="margin-left:5px;">					
								    		    
								</div>												
							</div>
						</div>		
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
								<div>
									<h3>Query Type</h3>
								</div>
							</a>
						</div>
						<div id="collapse5" class="accordion-body  collapse">
							<div class="accordion-inner">
														
							    here we can ask things like group by / sort by
							</div>
						</div>		
					</div>
				</div>
				<div style="text-align:center;">
				<input type="submit" class="btn btn-large btn-success container" value="Submit Query">
				</div>
				
			</form>
		</div>
		<script src="js/net.js"></script>
        <script src="js/bootstrap.js"></script>

	


<div id="pluginInstalledv2"></div><iframe frameborder="0" scrolling="no" style="background-color: transparent; border: 0px; display: none;"></iframe><div id="GOOGLE_INPUT_CHEXT_FLAG" style="display: none;" input="null" input_stat="{&quot;tlang&quot;:null,&quot;tsbc&quot;:null,&quot;pun&quot;:null,&quot;mk&quot;:false,&quot;ss&quot;:true}"></div></body></html>