<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="login-modal-label">Se connecter</h3>
        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="login_process.php">
          <label for="login-email">Email :</label>
          <input type="email" id="login-email" name="email" required><br><br>
          
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
          
          <input class="submit" type="submit" value="Se connecter"></input>
        </form>
        <h3 class="m-4">Pas encore de compte...</h3>
        <form class="signup-form" action="signup_process.php" method="POST">
          <label for="signup-name">Nom :</label>
          <input type="text" id="signup-name" name="name" required>
          
          <label for="signup-email">Email :</label>
          <input type="email" id="signup-email" name="email" required>
          
          <label for="signup-password">Mot de passe :</label>
          <input type="password" id="signup-password" name="password" required>
          
          <label for="allergies">Allergies (optionnel) :</label>
          <textarea id="allergies" name="allergies"></textarea>
          
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
          <input class="submit" type="submit" value="S'inscrire">
          <input class="cancel" type="reset" value="Annuler">
        </form>
      </div>
    </div>
  </div>
</div>




