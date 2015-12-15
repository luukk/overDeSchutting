<div class="left-content">
  <div class="header-body">
    <div class="t100-title">
      <p>Complete tour top</p>
      <div class="t100-logo">
        <span class="number">1</span>
        <span class="number-G">0</span>
        <span class="number">0</span>
      </div>
    </div>
  </div>
    <div id="content">
      <div id="tour-pdf">
        <div id="pdf-body">
        <div id="tour-text">Tour Top 100 als</div>
        <a href="./Definitieve-Radio-1-Tour-Top-100.pdf"><img src="./img/PDF_Logo.jpg"></a>
      </div>
      </div>
      <div class="t100-list">
        <?php
          while($setlist = $red_list->fetch_assoc()){
            echo '<div class="t100-item">
              <div class="number">' . $setlist['number'] . '</div>
              <div class="t100-songs">' . $setlist['artist'] . '</div>
            </div>';
          }

          while($setlist = $grey_list->fetch_assoc()){
            echo '<div class="t100-item">
              <div class="number gray-number">' . $setlist['number'] . '</div>
              <div class="t100-songs">' . $setlist['artist'] . '</div>
            </div>';
          }
        ?>
    </div>
  </div>
