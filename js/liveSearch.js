$(document).ready(function() {
  function search() {
    var query_value = $('#searchFriend').val();
    if(query_value !== ''){
      $.ajax({
        type: "POST",
        url: "search.php",
        data: { query: query_value },
        cache: false,
        success: function(html){
          $("ul#results").html(html);
        }
      });
    }return false;    
  }

  $("#searchFriend").live("keyup", function(e) {
    // Set Timeout
    clearTimeout($.data(this, 'timer'));

    // Set Search String
    var search_string = $(this).val();

    // Do Search
    if (search_string == '') {
      $("ul#results").fadeOut();
    }else{
      $("ul#results").fadeIn();
      $(this).data('timer', setTimeout(search, 1));
    };
  });
});

$("#onlineSearch").live("keyup", function(e) {
    var search_string = $(this).val();
    console.log("yo"+search_string + "yo");
    var count = 0;
    while($("#of" + count).html()){
      if($("#of" + count).html().toLowerCase().match(search_string.toLowerCase()) == null){
        $("#of" + count).hide();
      }
      else{
        $("#of" + count).show();
      }
      count++;
    }
    

  });