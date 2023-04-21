var navbarToggler = document.querySelector('.navbar-toggler');
var navbarCollapse = document.querySelector('.navbar-collapse');

navbarToggler.addEventListener('click', function () {
  navbarCollapse.classList.toggle('show');
});

// Animation reservation 
var reservation = document.getElementById("resa-btn");

setInterval(function() {
  reservation.style.visibility =(reservation.style.visibility == 'hiden') ? 'visible' : 'hidden';
}, 500);
