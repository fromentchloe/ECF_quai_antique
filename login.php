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
          <input type="email" id="login-email" name="email" required><br><br>


          
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
          
          <input type="hidden" name="role" value="customer"> <!-- Valeur par défaut du rôle -->

          <input class="submit btn" type="submit" value="Se connecter"></input>
        </form><hr>
  
        <form class="signup-form" action="signup_process.php" method="POST">
          <h3 style="text-align: center;">Pas encore de compte... inscription</h3>
         
          
          <label for="signup-email">Email :</label>
            <input type="email" id="signup-email" placeholder="quaiAntique@email.com" name="email" required>
          
          <div id="additional-field" style="display: none;" >
            <label for="additional-input">Code restaurant :</label>
              <input type="password" id="additional-input" name="additionalInput">
              <a class="submit btn" href="admin_signup.php" id="signup-button">Ajoutez un administrateur 

              </a>
          </div>
          <div id="customer_view">
          
          <label for="signup-name">Nom :</label>
            <input type="text" id="signup-name" placeholder="Quai Antique" name="name" required>

          <label for="signup-password">Mot de passe :</label>
            <input type="password" id="signup-password" name="password" required>

          <label for="retype_password">Re-tapez votre Mot de passe : </label>
            <input type="password" id="retype_password" name="retype_password" required>
          
          <label for="allergy">Allergies (optionnel) :</label>
            <textarea id="allergy" placeholder="Arachine, Gluten, Oignon, Tomates..."name="allergy"></textarea>

          <input class="submit btn" type="submit" value="S'inscrire">
          <button class="cancel btn" id="cancel" type="button">Annuler</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
