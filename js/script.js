$(document).ready(function() {
  //gestion du menu burger 
  $('.navbar-nav').on('click', function() {
    if($('.navbar-collapse').hasClass('show')) {
      $('.navbar-collapse').removeClass('show');
    }
  });

  //transparence de la navbar au scroll
  $(document).scroll(function () {
    if($(window).scrollTop() > 300) {
      $('.navbar').css("background", "#7f553973");
    } else {
      $(".navbar").css("background", "#7f5539");
    }
  });

  // Récupérer la modal de réservation 
  const modal = document.getElementById("reservation-modal");
  const btn = document.getElementById("reservation-button");
  const closeBtn = document.getElementById("close");
  const cancelBtn = document.getElementById("cancel");

  function openModal() {
    modal.style.display = "block";
  }

  function closeModal() {
    modal.style.display = "none";
  }

  closeBtn.onclick = function() {
    closeModal();
  }

  cancelBtn.onclick = function() {
    closeModal()
  }

  btn.onclick = function() {
    openModal();
  }
});







