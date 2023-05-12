$(document).ready(function() {
  // Gestion du menu burger
  $('.navbar-nav').on('click', function() {
    if($('.navbar-collapse').hasClass('show')) {
      $('.navbar-collapse').removeClass('show');
    }
  });
  
  // Transparence de la navbar au scroll
  $(document).scroll(function () {
    if($(window).scrollTop() > 20) {
      $('.navbar').css("background", "#7f5539cc");
    } else {
      $(".navbar").css("background", "#7f5539");
    }
  });
  
  // Récupérer la modal de réservation
  const reservationModal = $("#reservation-modal");
  const reservationBtn = $("#reservation-button");
  const reservationCloseBtns = $("#close, #cancel");
  
  function openReservationModal() {
    reservationModal.show();
  }
  
  function closeReservationModal() {
    reservationModal.hide();
  }
  
  reservationCloseBtns.click(function() {
    closeReservationModal();
  });
  
  reservationBtn.click(function() {
    openReservationModal();
  });
  
  // Récupérer la modal de connection
  const loginModal = $("#login-modal");
  const loginBtn = $("#login-button");
  const loginCloseBtns = $("#close, #cancel");
  
  function openLoginModal() {
    loginModal.show();
  }
  
  function closeLoginModal() {
    loginModal.hide();
  }
  
  loginCloseBtns.click(function() {
    closeLoginModal();
  });
  
  loginBtn.click(function() {
    openLoginModal();
  });
  
  // Vérification jour d'ouverture
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
  
  $('#selectedDate').on('input', checkDate);
  
  // Gallery image
  const galleryItems = $('.gallery-item');
  galleryItems.each(function() {
    const img = $(this).find('img');
    img.on('load', function() {
      $(this).parent().addClass('loaded');
    });
  });
  
  // Apparition gauche à droite
  const leftToRightElements = $('.left-to-right');
  const rightToLeftElements = $('.right-to-left');
  
  function isVisible(element) {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;
    const threshold = windowHeight - 70;
  
    return rect.top <= threshold;
  }
  
  function handleScroll() {
    leftToRightElements.each(function() {
      if (isVisible(this)) {
        $(this).addClass('visible');
      } else {
        $(this).removeClass('visible');
      }
    });
  
    rightToLeftElements.each(function() {
      if (isVisible(this)) {
        $(this).addClass('visible');
      } else {
        $(this).removeClass('visible');
      }
    });
  }
  
  $(window).on('scroll', function() {
    handleScroll();
  });

//admin
  $('#signup-email').on('input', function() {
    if ($(this).val() === 'quaiantique@restaurant.com') {
      $('#additional-field').show();
      $('#customer_view').hide();
    } else {
      $('#additional-field').hide();
      $('#customer_view').show();
    }
  });

$("#signup-button").click(function(event) {
  var adminCode = $("#additional-input").val();

  if (adminCode !== "2023$1582") {
    event.preventDefault(); // Empêche la redirection par défaut
    alert("Code restaurant incorrect");
  }
});
});
