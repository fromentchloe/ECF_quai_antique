
    var menuIcon = document.querySelector('.menu-icon');
    var menu = document.querySelector('.menu');
    menuIcon.addEventListener('click', function() {
      this.classList.toggle('active');
      menu.classList.toggle('active');
    });