<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="login-modal-label">Se connecter</h2>
        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="login_prosess.php">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required><br><br>
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
          <input class="submit" type="submit" value="Se connecter"></input>
        </form>
        <h3 class="m-4"> Pas Encore de compte...</h3>
        <form class="signup-form" action="signup_process.php" method="POST">
		<label  for="name">Nom :</label>
		<input  type="text" id="name" name="name" required>

		<label for="email">Email :</label>
		<input type="email" id="email" name="email" required>

		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password_hash" required>

		<label for="allergies">Allergies (optionnel) :</label>
		<textarea id="allergies" name="allergies"></textarea>

		<input class="submit" type="submit" value="S'inscrire">
		<input class="cancel" type="reset" value="Annuler">
	</form>

      </div>
    </div>
  </div>
</div>





