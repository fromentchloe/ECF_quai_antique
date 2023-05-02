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

function checkDate() {
  const selectedDate = new Date($('#selectedDate').val());
  const dayOfWeek = selectedDate.getDay();
  const message = $('#message');
  
  if (dayOfWeek === 1 || dayOfWeek === 2) {
    message.html("Nous sommes fermés le lundi et mardi.");
    message.css('display', 'flex');
    message.css('color', 'red');
  } else {
    message.css('display', 'none');
  }
}

// gallery image 
const galleryItems = document.querySelectorAll('.gallery-item');
galleryItems.forEach(item => {
  const img = item.querySelector('img');
  img.addEventListener('load', () => {
    item.classList.add('loaded');
  });
});



