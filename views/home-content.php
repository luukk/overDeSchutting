<div class="left-content">
  <div class="header-body">
    <p><?php
    //$page = isset($_GET['page']) ? $_GET['page'] : date('j');

    $getDate = date('j') - $page;
    switch ($getDate) {
      case 0:
        echo 'Vandaag ';
        break;
     case 1:
        echo 'Gisteren ';
        break;
     case 2:
        echo 'Eergisteren ';
        break;
     default:
      if($page >date('j')){
        echo date('j'). ' Juli ';
      }else{
      echo $page.' Juli ';
      }
    }
     ?>in de Radio 1 Tour Top 100</p>
  </div>
  <div class="content">
    <div class="song-list">
      <?php
      if($offset >=100){
        echo 'tja.... toen was de content op....';
      }
      while($videodata = $data->fetch_assoc()){
          echo '<div class="song-list-item">';
            echo '<img class="thumbnail" src="'. $videodata['video'] .'" alt="thumbnail">';
            echo '<div class="song-content">';
              echo '<div class="song-title">';
                echo '<div class="number">'. $videodata['number'] .'</div>';
                echo '<div class="info">'.
                  $videodata['artist'] .' : '.
                  $videodata['title'] .'
                </div>';
              echo '</div>';
              echo '<div class="description">'. substr($videodata['text'],0,200) .'...'.'</div>';
            echo '<div class="read-more">
              <ul>
                <li><img src="./img/svg/speechBubble.svg" alt="speechbubble"></li>
                <li>[';
                  $query = "SELECT *FROM comments WHERE songId = ".$videodata['number']."";
                  $number = $mysqli->query($query);
                  $tst = mysqli_num_rows($number);
                  echo $tst;
                echo ']</li>
                <li> | </li>
                <li><a href="?action=detail'."&amp;".'song_id='. $videodata['number'] .'">Lees meer</a></li>
                <li><img src="./img/svg/envelope.svg" alt="envelope"></li>
                <li><img src="./img/svg/twitter.svg" alt="twitter"></li>
                <li><img src="./img/svg/facebook.svg" alt="facebook"></li>
              </ul>';
            echo '</div>';
            echo '</div>';
          echo '</div>';

      }
      ?>
    </div>
</div>
