$(document).ready(function() {
    function setEqualCardHeight() {
      $('.card').css('height', 'auto');
      var maxHeight = 0;
      $('.card').each(function() {
        var cardHeight = $(this).outerHeight();
        if (cardHeight > maxHeight) {
          maxHeight = cardHeight;
        }
      });
      $('.card').css('height', maxHeight);
    }
    
    setEqualCardHeight();
    $(window).resize(setEqualCardHeight);
  });
  