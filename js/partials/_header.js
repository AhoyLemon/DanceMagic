// jshint -W117
$('a.flapjax').click(function() {
  $('nav.sidebar').toggleClass('visible');
  $(this).toggleClass('active');
});