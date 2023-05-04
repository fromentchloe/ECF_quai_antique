<nav class="navbar transparent-background navbar-expand-md fixed-top">
    <div class="container-fluid">
      <!-- Bouton pour le menu déroulant -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<!-- Menu déroulant -->
  <div class="navbar-collapse collapse" id="navbarNav">
    <a class="navbar-brand navbar-brand-title" href="index.php">
<!-- Logo -->
  <img class="logo" src="./image/text+logo.png" width="100" alt="Logo de l'entreprise">
</a>

    <!-- Liste des liens de navigation -->
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link" href="#about">À propos</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="./index.php#schedule">Horaires</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="./index.php#gallery">Galerie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="carte.php" role="button" data-bs-toggle="dropdown">
          La carte
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="./carte.php#formulas">Nos formules</a></li>
          <li><a class="dropdown-item" href="./carte.php#carte">À la carte</a></li>
          <li><a class="dropdown-item" href="./carte.php#dessert">Les gourmandises</a></li>
          <li><a class="dropdown-item" href="./carte.php#aperitif">Apéritifs</a></li>
        </ul>
      </li>
      
    </ul>
  </div>

<!-- Boutons & formulaire de connexion  -->
<div class="contact">
    <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
    ?>
            <a class="contact-link p-2 m-2 rounded" href="logout.php">
                <button type="button" class="btn">Déconnexion</button>
            </a>
    <?php
        } else {        
    ?>
            <a class="contact-link p-2 m-2 rounded" id="login-button">
                <button type="button" class="btn" id="open-login-modal" >Se connecter</button>
            </a>
    <?php
        }
    ?>


<!-- Boutons de reservation -->
    <a class="contact-link p-2 m-2 rounded" id="reservation-button">
      <button type="button" class="btn" id="open-reservation-modal" >Réserver</button>
    </a>
    <?php include "reservation.php"; include "login.php" ?>
   
    </div>
  </div>
  </div>
</nav>