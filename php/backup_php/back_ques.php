<html>
<head>

</head>
<body>
<script src="js/jquery-1.7.2.min.js"></script>

<script type="text/javascript">
		$.get( "http://localhost:8888/login.php", function( data ) {
		$( "body" )
		    .append(data) ; 
		});
	</script>


<!-- 
<script type="text/javascript">
		$.get( "http://localhost:8888/question.php", function( data ) {
		$( "body" )
		    .append( "Name: " + data[1].Description ) 
		    .append( "Time: " + data[1].TimeStamp ); 
		}, "json" );
	</script>
 -->
	


<!-- 
<script>
 $(document).ready(function(){
     setInterval(ajaxcall, 1000);
 });
 function ajaxcall(){
     $.ajax({
         url: 'http://localhost:8888/question.php',
         dataType: "json",
         success: function(data) {
         for (var i in data){
             $( "body" )
		    .append( "Name: " + data[i].Description ) 
		    .append( "Time: " + data[i].TimeStamp ); 
			}
         }
     });
 }
</script>
 -->


<script type="text/javascript">
function doPoll() {
   $.get("http://localhost:8888/question.php", {}, function(data) {
      for (var i in data){
             $( "body" )
            .append ("Question done")
		    .append( "Name: " + data[i].Description ) 
		    .append( "Time: " + data[i].TimeStamp ); 
			}
      });
      doPoll(); 
   }, 'json'); 
}


$(document).ready(function() {
    $.ajaxSetup({
       timeout: 1000*60///set a global ajax timeout of a minute
    });
    doPoll(); // do the first poll
});
	</script>


</body>
</html>