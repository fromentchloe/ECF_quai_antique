$(document).ready(function() {
  //gestion du menu burger 
  $('.navbar-nav').on('click', function() {
    if($('.navbar-collapse').hasClass('show')) {
      $('.navbar-collapse').removeClass('show');
    }
  });
  //transparence de la navbar au scroll
  $(window).scroll(function () {
    if($(window).scrollTop() > 300) {
       $('.navbar').css("background", "#7f553973");
    } else {
       $(".navbar").css("background", "#7f5539");
    }
   });
});




