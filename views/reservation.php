<div class="modal" id="reservation-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" id="close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" action="./MySQL/reservation_process.php">
        <h2 class="modal-title" id="reservation-modal-label">Réservation</h2>
          <label for="name">Nom :</label>
          <?php
          $user_name = isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : '';
          ?>
          <input type="text" id="name" name="name" value="<?php echo $user_name; ?>" required>
          <br><br>
          <label for="selectedDate">Date :</label>
          <input type="date" id="selectedDate" name="date" onchange="checkDate()" required>
          <br><br>
          <p id="message"></p>
          <label for="time" required>Heure :</label>
          <select id="time" name="time">
            <optgroup label="Midi">
            <option value="11:45">11:45</option>
              <option value="12:00">12:00</option>
              <option value="12:15">12:15</option>
              <option value="12:30">12:30</option>
              <option value="12:45">12:45</option>
              <option value="13:00">13:00</option>

            </optgroup>
            <optgroup label="Soir">
              <option value="19:00">19:00</option>
              <option value="19:15">19:15</option>
              <option value="19:30">19:30</option>
              <option value="19:45">19:45</option>
              <option value="20:00">20:00</option>
              <option value="20:15">20:15</option>
              <option value="20:30">20:30</option>
              <option value="20:30">21:00</option>
            </optgroup>
          </select><br><br>
          <label for="numPeople">Nombre de personnes :</label>
          <input type="number" id="numPeople" name="numPeople" min="1" max="70" required><br><br>

          <label for="allergy">Allergies :</label>
          <?php
          $user_allergy = isset($_SESSION['user_allergy']) ? htmlspecialchars($_SESSION['user_allergy']) : '';
          ?>
          <input type="text" id="allergy" name="allergy" placeholder="Arachine, Gluten, Oignon, Tomates..." value="<?php echo $user_allergy; ?>">
          <br><br>
          <a>créez un compte pour que vos prochaines réservations soit plus rapide ? </a>
          <div class="d-flex justify-content-between align-items-center mt-5">
          <input class="contact-link btn" type="submit" value="Réserver">
          <button class="contact-link btn" id="cancel" type="button">Annuler</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
