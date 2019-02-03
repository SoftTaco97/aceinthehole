$(function() {
  var $elements = $('.animateBlock.notAnimated'); 
  var $window = $(window);
  $elements.each(function(i, elem){
    animateMe($(this));
  });
  $window.on('scroll', function(e) {
    $elements.each(function(i, elem) { 
      if ($(this).hasClass('animated')) return; 
      animateMe($(this));
    });
  });
});
function animateMe(elem) {
  var winTop = $(window).scrollTop(); 
  var winBottom = winTop + $(window).height();
  var elemTop = $(elem).offset().top; 
  var elemBottom = elemTop + $(elem).height();
  if ((elemBottom <= (winBottom - 400)) && (elemTop >= (winTop + 400))) {
    $(elem).removeClass('notAnimated').addClass('animated');
  }
}