$(document).ready(function() {
  //gestion du menu burger 
  $('.navbar-nav').on('click', function() {
    if($('.navbar-collapse').hasClass('show')) {
      $('.navbar-collapse').removeClass('show');
    }
  });

  //transparence de la navbar au scroll
  $(document).scroll(function () {
    if($(window).scrollTop() > 20) {
      $('.navbar').css("background", "#7f5539cc");
    } else {
      $(".navbar").css("background", "#7f5539");
    }
  });

  // Récupérer la modal de réservation 
  const reservationModal = document.getElementById("reservation-modal");
  const reservationBtn = document.getElementById("reservation-button");
  const reservationCloseBtns = $("#close, #cancel");
  
  function openReservationModal() {
    reservationModal.style.display = "block";
  }
  
  function closeReservationModal() {
    reservationModal.style.display = "none";
  }
  
  reservationCloseBtns.click(function() {
    closeReservationModal();
  });
  
  reservationBtn.onclick = function() {
    openReservationModal();
  };

  // Récupérer la modal de connection 
  const loginModal = document.getElementById("login-modal");
  const loginBtn = document.getElementById("login-button");
  const loginCloseBtns = $("#close, #cancel");
  
  function openLoginModal() {
    loginModal.style.display = "block";
  }
  
  function closeLoginModal() {
    loginModal.style.display = "none";
  }
  
  loginCloseBtns.click(function() {
    closeLoginModal();
  });
  
  loginBtn.onclick = function() {
    openLoginModal();
  };
  
  //verification jour d'ouverture 
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
});

//apparition gauche a droite 
const leftToRightElements = document.querySelectorAll('.left-to-right');
const rightToLeftElements = document.querySelectorAll('.right-to-left');

function isVisible(element) {
  const rect = element.getBoundingClientRect();
  const windowHeight = window.innerHeight;
  const threshold = windowHeight - 70;

  return rect.top <= threshold;
}

function handleScroll() {
  leftToRightElements.forEach((element) => {
    if (isVisible(element)) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });

  rightToLeftElements.forEach((element) => {
    if (isVisible(element)) {
      element.classList.add('visible');
    } else {
      element.classList.remove('visible');
    }
  });
}

window.addEventListener('scroll', handleScroll);


