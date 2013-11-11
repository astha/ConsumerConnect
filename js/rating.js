    $(function() {

     $('div#star').raty({
      score: function() {
        return $(this).attr('data-score');
      },

    });

     $('div#fixed').raty({
      score: function() {
        return $(this).attr('data-score');
      },
      readOnly: true

    });


     $('div#custom').raty({
      scoreName:  'entity.score',
      number:   10
    });

     $('div#click').raty({
      onClick: function(score) {
        alert('score: ' + score);
      }
    });

     $('div#half').raty({
      score: function() {
        return $(this).attr('data-score');
      },
      showHalf: true,
      readOnly: true
    });

     $('div#cancel').raty({
      showCancel: true
    });

     $('div#cancel-custom').raty({
      cancelHint: 'remove my rating!',
      cancelPlace: 'right',
      showCancel: true,
      onClick: function(score) {
        alert('score: ' + score);
      }
    });

   });

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17006803-1']);
    _gaq.push(['_trackPageview']);
    

    
