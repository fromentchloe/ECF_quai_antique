$(document).ready(function() {
  //gestion du menu burger 
  $('.navbar-nav').on('click', function() {
    if($('.navbar-collapse').hasClass('show')) {
      $('.navbar-collapse').removeClass('show');
    }
  });
  // Fenetre de connections 
  $("#login-button").click(function() {
    $("#login-modal").show(400);
  });
  $("#login-modal .close").click(function() {
    $("#login-modal").hide(400);
  });
  
  
  //transparence de la navbar au scroll
  $(window).scroll(function () {

    if($(window).scrollTop() > 100) {
       $('.navbar').css("background", "#7f553973");
    } else {
       $(".navbar").css("background", "#7f5539");
    }
    
   });
});




