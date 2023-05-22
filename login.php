<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="login_process.php">
          <h3  class="modal-title" id="login-modal-label">Se connecter</h3>
          
          <label for="login-email">Email :</label>
          <input type="email" id="login-email" name="email" required><br><br>

          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
          <a href="forget_psw.php">Mot de passe oublié ? </a>

          <div class="d-flex justify-content-between align-items-center">
          <input class="contact-link btn" type="submit" value="Se connecter"></input>
          <button class=" contact-link btn" id="signup-link" type="button">s'inscrire</button>
          </div>
          
        </form><hr>
        <div id="signup-content" style="display: none;">
        <form class="signup-form" action="signup_process.php" method="POST">
         
        <h3  class="modal-title">Inscription</h3>
        
          <label for="signup-email">Email :</label>
            <input type="email" id="signup-email" placeholder="quaiAntique@email.com" name="email" required>
          
          <div id="additional-field" style="display: none;" >
            <label for="additional-input">Code restaurant :</label>
              <input type="password" id="additional-input" name="additionalInput">
              <a class="contact-link btn" href="admin_signup.php" id="signup-button">Ajoutez un administrateur 
              </a>
          </div>
          <div id="customer_view">
          
          <label for="signup-name">Nom :</label>
            <input type="text" id="signup-name" placeholder="Quai Antique" name="name" required>
            <span style="color:red; font-size: 0.7em;"> Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre majuscule, et un chiffre.</span>
          <label for="signup-password">Mot de passe :</label>
            <input type="password" id="signup-password" name="password" required pattern="(?=.*\d)(?=.*[A-Z]).{8,}">

          <label for="retype_password">Re-tapez votre Mot de passe : </label>
            <input type="password" id="retype_password" name="retype_password" required>
          
          <label for="allergy">Allergies (optionnel) :</label>
            <textarea id="allergy" placeholder="Arachine, Gluten, Oignon, Tomates..."name="allergy"></textarea>
            <div class="d-flex justify-content-center align-items-center">
              
          <input class="contact-link btn" type="submit" value="S'enregistrer"></div>

          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
