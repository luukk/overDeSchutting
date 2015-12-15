<div id="body-container"><!-- start body-->
  <div id="date-header">
    <ul>
      <li id="month">Juli</li>
        <?php
          $total = 24;
          $limitDate = date('j');
          $disabled = $limitDate+1;

          for ($i =2; $i <=($limitDate-1); $i++){
            echo '<div class="passed"><a href="?action=home'."&amp;".'page='.$i.'"><div class="red-stripe"><li><p>'.$i.'</p></li></div></a></div>';
          }
            echo '<a href="?action=home'."&amp;".'page='.$limitDate.'"><li id="today"><p>'.$limitDate.'</p></li></a>';

          for($disabled; $disabled<=$total; $disabled++){
            echo '<div class="disabled"><div class="red-stripe"><li><p>'.$disabled.'</p></li></div></div>';
          }
?>
    </ul>
  </div>
