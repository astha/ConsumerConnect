<?php
session_start();

$expire=time()+60*60*24;
setcookie("webpage","cons.php", $expire);

if (!isset($_SESSION['userID'])){
  header("Location:index.php");
  die();
}

?>


<script type="text/javascript">
function signOut() {
  $.get("clearAll.php");
}
function yHandler(){
  // Watch video for line by line explanation of the code
  // http://www.youtube.com/watch?v=eziREnZPml4
  var wrap = document.getElementById('wrap');
  var contentHeight = wrap.offsetHeight;
  var yOffset = window.pageYOffset; 
  var y = yOffset + window.innerHeight;
  if(y >= contentHeight){
    // Ajax call to get more dynamic data goes here
    wrap.innerHTML += '<div class="newData"></div>';
  }
}
window.onscroll = yHandler;
</script>