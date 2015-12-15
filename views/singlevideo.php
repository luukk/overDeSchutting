<div class="left-content">
  <div class="header-body">
    <p>In de Radio 1 Tour Top 100</p>
  </div>
  <div class="content">
  <!-- navigation-->
  <?php
  if(date('j')>21){
    echo 'oeps...content op';
  }
  if($song_id == 100){
    $b = $video->fetch_assoc();
    echo '<div class="song-pagination">';
      echo '<div class="in-previous">
        <div class="number">'. $b['number'] . '</div>
        <div class="song-id"><a href=?action=detail'."&amp;".'song_id='.$b['number'].'>'. $b['artist'] . ' : ' . $b['title'] . '</a></div>
      </div>';

      $b = $video->fetch_assoc();
      echo '<div class="in-today">
        <div class="number">'. $b['number'] . '</div>
        <div class="song-id">'. $b['artist'] . ' : ' . $b['title'] . '</div>
      </div>';


      echo '<div class="in-next">
      </div>';
    echo '</div>';

    echo '<div class="video-container">
      <iframe class="iframe" src="https://www.youtube.com/embed/FrG4TEcSuRg" frameborder="0" allowfullscreen></iframe>
    </div>';

    echo '<div class="in-description">' .
      $b['text'] .
    '</div>';
    echo '<div class="media">
      <ul>
        <li><img src="./img/svg/facebook.svg" alt="facebook"></li>
        <li><img src="./img/svg/twitter.svg" alt="twitter"></li>
        <li><img src="./img/svg/envelope.svg" alt="envelope"></li>
      </ul>
    </div>';

  }elseif($song_id == 1){
    $b = $video->fetch_assoc();
    echo '<div class="song-pagination">';
      echo '<div class="in-previous">
      </div>';

      echo '<div class="in-today">
        <div class="number">'. $b['number'] . '</div>
        <div class="song-id">'. $b['artist'] . ' : ' . $b['title'] . '</div>
      </div>';

      $b = $video->fetch_assoc();
      echo '<div class="in-next">
        <div class="number">'. $b['number'] . '</div>
        <div class="song-id"><a href=?action=detail'."&amp;".'song_id='.$b['number'].'>'. $b['artist'] . ' : ' . $b['title'] . '</a></div>
      </div>';
    echo '</div>';

    echo '<div class="video-container">
      <iframe class="iframe" src="https://www.youtube.com/embed/FrG4TEcSuRg" frameborder="0" allowfullscreen></iframe>
    </div>';

    echo '<div class="in-description">' .
      $b['text'] .
    '</div>';
    echo '<div class="media">
      <ul>
        <li><img src="./img/svg/facebook.svg" alt="facebook"></li>
        <li><img src="./img/svg/twitter.svg" alt="twitter"></li>
        <li><img src="./img/svg/envelope.svg" alt="envelope"></li>
      </ul>
    </div>';


  }else{

  $b = $video->fetch_assoc();
  echo '<div class="song-pagination">';
    echo '<div class="in-previous">
      <div class="number">'. $b['number'] . '</div>
      <div class="song-id"><a href=?action=detail'."&amp;".'song_id='.$b['number'].'>'. $b['artist'] . ' : ' . $b['title'] . '</a></div>
    </div>';

    $b = $video->fetch_assoc();
    echo '<div class="in-today">
      <div class="number">'. $b['number'] . '</div>
      <div class="song-id">'. $b['artist'] . ' : ' . $b['title'] . '</div>
    </div>';

    $b = $video->fetch_assoc();
    echo '<div class="in-next">
      <div class="number">'. $b['number'] . '</div>
      <div class="song-id"><a href=?action=detail'."&amp;".'song_id='.$b['number'].'>'. $b['artist'] . ' : ' . $b['title'] . '</a></div>
    </div>';
  echo '</div>';

  echo '<div class="video-container">
    <iframe class="iframe" src="https://www.youtube.com/embed/FrG4TEcSuRg" frameborder="0" allowfullscreen></iframe>
  </div>';

  echo '<div class="in-description">' .
    $b['text'] .
  '</div>';
  echo '<div class="media">
    <ul>
      <li><img src="./img/svg/facebook.svg" alt="facebook"></li>
      <li><img src="./img/svg/twitter.svg" alt="twitter"></li>
      <li><img src="./img/svg/envelope.svg" alt="envelope"></li>
    </ul>
  </div>';
  }
  ?>

</div>
  <!-- end navigation -->
  <div class="header-body">
    <p>Reageer op dit bericht</p>
  </div>
  <div class="content">
  <form method="post" id="submit-form" action="?action=insert-comment&song_id=<?php echo $song_id;?>">
    <label for="input-name"><span>Naam</span><br>
    <input type="text" name="name" id="input-name" autocomplete="off" required></label><br>
    <label for="input-email"><span>E-mail</span><span id="grey">(word niet verplicht)</span></label><br>
    <input type="email" name="email" id="input-email"><br>
    <label for="input-website"><span>Website</span></label><br>
    <input type="text" name="website" id="input-website" autocomplete="off" required><br>
    <label for="input-reaction"><span>Reactie</span></label><br>
    <textarea id="input-reaction" name="reaction" required></textarea><br>
    <span id="checkbox">
    <input type="checkbox" id="keepdata-checkbox"><label for="keepdata-checkbox"><span>Gegevens onthouden</span></label><br>
    <input type="checkbox" id="mail-checkbox"><label for="mail-checkbox"><span>Mail me bij nieuwe reacties</span></label>
    </span>
    <input type="submit" name="submit-reaction" id="submit-button" value="VERSTUUR">
  </form>
</div>
  <div class="header-body">
    <p>Reacties op dit bericht [<?php echo $tst ?>]</p>
  </div>
  <div class="content">
  <?php
  while($comment = $result->fetch_assoc()){
    echo '<div class="single-comment">';
      echo '<div class="name">'.$comment['name'].'</div>';
      echo '<div class="date">'.$comment['date'].'</div>';
      echo '<div class="comment">'.$comment['comment'].'</div>';
      echo '<div class="warning">Waarschuw de redactie over deze</div>';
    echo '</div>';
  }
  if($total_records >=4 && $comment_page <= $total_pages){
    echo '<div class="pagination">';
      if($comment_page != 1){
        echo '<div id="previous"><a href="?action=detail&song_id=70&comment_page='.($comment_page-1).'">vorige</a></div>';
      }
      if($comment_page != $total_pages){
        echo '<div id="next"><a href="?action=detail&song_id=70&comment_page='.($comment_page+1).'">volgende</a></div>';
      }
      echo '<nav>';
      $i=1;
      if($comment_page >=6){
        $i = $i+1;
      }else{
        $i = 1;
      }
      for($i; $i<=$total_pages;$i++){

       if(isset($_GET['comment_page']) && $i == $_GET['comment_page']){
           $active = 'id="comment-active"';
       }else{
         $active = 'class="comment-disabled"';
       }

        echo '<div '.$active.'><a href=?action=detail&song_id='.$song_id.'&comment_page='.$i.'>'.$i.'</a></div>';
      }
      echo '</nav>';

    echo '</div>';
}
  ?>
</div>
