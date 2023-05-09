<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="login_process.php">
        <h3 style="text-align: center;" class="modal-title" id="login-modal-label">Se connecter</h3>
          <label for="login-email">Email :</label>
          <input type="email" id="login-email" name="email" placeholder="quaiantique@monrestaurant.com" required><br><br>
          
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
        
          
          <input class="submit" type="submit" value="Se connecter"></input>
        </form><hr>
  
        <form class="signup-form" action="signup_process.php" method="POST">
        <h3 style="text-align: center;">Pas encore de compte... inscription</h3>
          <label for="signup-name">Nom :</label>
          <input type="text" id="signup-name" placeholder="Quai Antique" name="name" required>
          
          <label for="signup-email">Email :</label>
          <input type="email" id="signup-email" placeholder="quaiAntique@monrestaurant.com" name="email" required>
          
          <label for="signup-password">Mot de passe :</label>
          <input type="password" id="signup-password" name="password" required>

          <label for="retype_password">Re-tapez votre Mot de passe : </label>
          <input type="password" id="retype_password" name="retype_password" required>
          
          <label for="allergies">Allergies (optionnel) :</label>
          <textarea id="allergies" placeholder="Arachine, Gluten, Oignon, Tomates..."name="allergies"></textarea>
        
          <input class="submit" type="submit" value="S'inscrire">
          <input class="cancel" type="reset" value="Annuler">
        </form>
      </div>
    </div>
  </div>
</div>




