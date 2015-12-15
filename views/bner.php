<div class="left-content">
  <div class="header-body">
    <p>Tour Top lijsten van BN'ers</p>
  </div>
  <div class="content">
    <?php
      while($bner = $result->fetch_assoc()){
        echo '<div class="bner-list-item">';
          echo '<img src="'.$bner['picture'].'" class="thumbnail" width=211 height=140>';
          echo '<div class="bner-content">';
          echo '<div class="bner-title">';
            echo '<div class="bner-name">'.$bner['name'].'</div>';
            echo '</div>';
            echo '<div class="bner-description">'.substr($bner['text'],0,350).'...</div>';
            echo '<div class="read-more">
              <ul>
                <li><img src="./img/svg/speechBubble.svg"></li>
                <li>[0]</li>
                <li> | </li>
                <li><a href="?action=bner">Lees meer</a></li>
                <li><img src="./img/svg/envelope.svg"></li>
                <li><img src="./img/svg/twitter.svg"></li>
                <li><img src="./img/svg/facebook.svg"></li>
              </ul>';
            echo '</div>';
          echo '</div>';
        echo '</div>';
      }
    ?>
    </div>
