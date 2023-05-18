
<div class="schedule_group container-fluid " id="schedule">
  <div class="row">
    <div class="right-to-left col-lg-6">
    <hr class="custom-hr">
      <h4 class="title mt-5">Horaires d'ouverture</h4>
      <i class="bi bi-clock" style="font-size: 3em"></i><br>

      <?php if (isset($_SESSION['user_is_admin']) && $_SESSION['user_is_admin'] === '1') { ?>         
        <?php
          echo 'Semaine du ' . date('d/m/Y') . ' au ' . date('d/m/Y', strtotime('+7 days')) . '<br>';
        ?>
        <form id="scheduleForm" action="./MySQL/change_schedule.php" method="POST">
          <?php
          $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
          $defaultValues = [
            'lundi' => 'Fermé',
            'mardi' => 'Fermé',
            'mercredi' => '12h00-14h00 / 19h00-21h',
            'jeudi' => '12h00-14h00 / 19h00-21h',
            'vendredi' => '12h00-14h00 / 19h00-21h',
            'samedi' => '12h00-14h00 / 19h00-21h',
            'dimanche' => '12h00-14h00 / 19h00-21h'
          ];
          foreach ($days as $day) {
            $label = ucfirst($day);
            $value = $row[$day] ?? $defaultValues[$day];
            ?>
          <label style="color: gray" for="<?php echo $day; ?>"><?php echo $label; ?>:</label>
            <select name="<?php echo $day; ?>" id="<?php echo $day; ?>">
              <option value="Fermé"<?php echo ($value === 'Fermé') ? ' selected' : ''; ?>>Fermé</option>
              <option value="12h00-14h00 / 19h00-21h"<?php echo ($value === '12h00-14h00 / 19h00-21h') ? ' selected' : ''; ?>>12h00-14h00 / 19h00-21h</option>
              <option value="12h00-14h00 / 19h00-22h"<?php echo ($value === '12h00-14h00 / 19h00-22h') ? ' selected' : ''; ?>>12h00-14h00 / 19h00-22h</option>
              <option value="Fermé / 19h00-21h"<?php echo ($value === 'Fermé / 19h00-21h') ? ' selected' : ''; ?>>Fermé / 19h00-21h</option>
              <option value="12h00-14h00 / 19h00-21h"<?php echo ($value === '12h00-14h00 / 19h00-21h') ? ' selected' : ''; ?>>12h00-14h00 / 19h00-21h</option>
              <option value="Exceptionnellement fermé"<?php echo ($value === 'Exceptionnellement fermé') ? ' selected' : ''; ?>>Exceptionnellement fermé</option>
            </select>
          <?php } ?>
          <button class="contact-link btn" type="submit">Enregistrer</button>
        </form>
      <?php } else { 
        require_once 'MySQL/connection_bdd.php';
        $sql = "SELECT lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche FROM schedule";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        $defaultValues = [
          'lundi' => 'Fermé',
          'mardi' => 'Fermé',
          'mercredi' => '12h00-14h00 / 19h00-21h',
          'jeudi' => '12h00-14h00 / 19h00-21h',
          'vendredi' => '12h00-14h00 / 19h00-21h',
          'samedi' => '12h00-14h00 / 19h00-21h',
          'dimanche' => '12h00-14h00 / 19h00-21h'
        ];
        ?>
                  
            <?php
          echo 'Semaine du ' . date('d/m/Y') . ' au ' . date('d/m/Y', strtotime('+7 days')) . '<br>';

     ?>
        <ul class="schedule_list">
          <?php foreach ($days as $day) {
            $label = ucfirst($day);
            $value = $row[$day] ?? $defaultValues[$day];
            ?>
            <li class="p-1"><span class="fw-bold"><?php echo $label; ?> :</span> <?php echo $value; ?></li>
          <?php } ?>
        </ul>
      <?php } ?>
      <hr><hr>
    </div>
    <div class="col-md-6 mt-5">
      <iframe class="left-to-right cart" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.7954949734085!2d5.910375076219897!3d45.574550971075915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba85be9f4b0c1%3A0x995a84690c36dd5f!2s552%20Rue%20Nicolas%20Parent%2C%2073000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1682517371194!5m2!1sfr!2sfr" width="80%" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
