<div class="left-content">
  <div class="header-body">
    <p>Prijsvraag</p>
  </div>
  <div class="content">
    <?php
    $price_question = $question->fetch_assoc();
      echo '<img src="'.$price_question['video'].'"id="price_image">';
      echo '<div class="price-content">';
        echo '<div class="number-price">'.$price_question['number'].'</div>';
        echo '<div id="price-title">'.$price_question['artist'].' : ';
          echo $price_question['title'].'</div><br>';
        echo '<div id="price-date-limit">Meedoen kan tot 12 Juni 2011</div>';
        echo '<div id="price-text">'.$price_question['text'];
      echo '</div></div>';
     ?>
  </div>
  <div id="question"><div id="red-word">VRAAG </div> Wat was het debuutalbum van Julien Clerc?</div>
  <div class="header-body">
    <p>Doe mee aan deze prijsvraag</p>
  </div>
  <div class="content">
    <form method="post" id="submit-form">
      <label><span>Naam</span></label><br>
      <input type="text"><br>
      <label><span>E-mail</span><span id="grey">(word niet verplicht)</span></label><br>
      <input type="email"><br>
      <label><span>Antwoord</span></label><br>
      <input type="text"><br>
      <input type="checkbox"><label><span>Inschrijven voor nieuwsbrief</span></label>
      <input type="submit" id="submit-button" value="VERSTUUR">
    </form>
  </div>
