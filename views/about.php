<div class="wrapper">
  <div class="text-about col-md-8 rounded">
      <h1 class="title">Bienvenue <?php  if (isset($_SESSION['user_id'])) {
  
  $user_name = $_SESSION['user_name']; echo '<span> '.$user_name.'</span>';}?> au Quai Avare !</h1>
      <p class="subtitle ">le troisière restaurant du célèbre chef Michant Arnaud ! <br> Venez déguster nos délicieux burgers faits maison, accompagnés de nos frites croustillantes et de nos boissons rafraîchissantes. Notre équipe est impatiente de vous accueillir et de vous offrir une expérience de restauration rapide inoubliable. Venez savourer nos burgers dès maintenant ! </p>
  </div>
</div>