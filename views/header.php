<div id="container">
  <header>
    <div id="header-top-section">
      <ul>
      <li>newsbrief</li>
      <li>|</li>
      <li>mobiel</li>
      <li>|</li>
      <li>contact</li>
      <li>|</li>
      <li>meld een fout</li>
      <li>|</li>
      <li>frequensies</li>
      <li>|</li>
      <li>help</li>
      <li>|</li>
      <li>rss</li>
    </ul>
    </div>
      <img src="img/radio1-logo.png" id="header-logo" alt="logo radio 1">
      <div id="header-menu">
        <div id="header-row-1">
          <div id="header-row-1-left">
            <div id="header-tour-top-100-text">TOUR TOP 100</div>
          </div>
          <div id="header-row-1-right">
            <div id="header-change-fontsize">
              <div id="small">A</div>
              <div id="medium">A</div>
              <div id="tall">A</div>
            </div>
          </div>
        </div>
        <div id="header-row-2">
          <div id="header-row-2-left">
            <div id="header-navbar">
              <a href="http://www.radio1.nl/">
                <div id="header-radio1-button">
                  RADIO1.NL
                </div>
              </a>
              <a href="?action=list">
              <div id="header-tour-top-100-button"  <?php if($_GET['action']  == 'list'){
                echo ' class="tour-top-100-active"';
              }?>>
                  TOUR TOP 100
              </div>
            </a>
              <div id="header-search-section">
                <form method="post">
                  <input type="text" name="header-search" id="header-search" placeholder="zoek binnen radio 1">
                  <div id="header-search-icon">
                    <input type="submit" value="">
                  </div>
                </form>

              </div>
            </div>
          </div>
          <img src="img/biker.png" id="biker">
          <div id="header-row-2-right">
            <a href="http://www.radio1.nl/popup/luisterlive">
              <div id="header-radio1-listen-button">
                <div id="header-radio1-listen-button-text">
                  LUISTER LIVE <br>
                  PRAAT MEE
               </div>
               <div id="header-radio1-listen-button-logos">
                 <img src="./img/speaker-icon.png" alt="speaker icon"><br>
                <img src="./img/bird-icon.png" alt="bird icon">
              </div>
            </div>
            </a>

          </div>
       </div>
    </div>
  </header>
</div>
