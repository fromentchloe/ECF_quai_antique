<?php    
?>
<nav id="navbar" class="navbar transparent-background navbar-expand-md fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" ></span>
      </button>
    <div class="navbar-collapse collapse" id="navbarNav">
        <a class="navbar-brand navbar-brand-title" href="index.php">
          <img class="logo" src="./image/text+logo.png" width="100" alt="Logo de l'entreprise">
        </a>

    <!-- Liste des liens de navigation -->

<ul class="navbar-nav justify-content-center">
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
        <a class="nav-link dropdown-toggle" href="./index.php#carte" role="button" data-bs-toggle="dropdown">
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
 
        if (isset($_SESSION['user_name'])) {
    ?>
            <a class="contactbtn p-2 m-2 rounded" href="logout.php">
                <button type="button" class="btn">Déconnexion</button>
            </a>
    <?php
        } else {        
    ?>
            <a class="contactbtn p-2  rounded" id="login-button">
                <button type="button" class="btn" id="open-login-modal" >Se connecter / s'inscrire</button>
            </a>
            <?php
            }

            ?>
                <a class=" contactbtn p-2 m-2 rounded" id="reservation-button">
                    <button type="button" class="btn" id="open-reservation-modal">Réserver</button>
                </a>
    
    <?php include "reservation.php"; include "login.php";?>
</div>
</div>
    
  </div>
  </div>
</nav>