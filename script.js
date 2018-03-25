$(document).ready(function() {
  $('.menu-cont').hide();
  
  $('#menu-btn').click(function() {
    $('.menu-cont').slideToggle(400);
  });
});