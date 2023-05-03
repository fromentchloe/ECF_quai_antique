<div class="modal" id="login-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="login-modal-label">Se connecter</h2>
        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="login.php">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required><br><br>
          <label for="password">Mot de passe :</label>
          <input type="password" id="password" name="password" required><br><br>
          <input class="submit" type="submit" value="Se connecter"></input>
          <button class="cancel" id="cancel" type="button">Annuler</button>
        </form>
        <h3 class="m-4"> Pas Encore Clients... </h3>
      </div>
    </div>
  </div>
</div>





