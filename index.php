<?php
  ob_start();
  
  include 'includes/db_connect.php';
  include 'includes/database.php';
  include 'views/head.php';
  include 'views/header.php';
  include 'views/date-navigation.php';

  $action = isset($_GET['action']) ? $_GET['action'] : 'home';
  switch ($action) {
    case 'home':
      include 'models/select_homecontent.php';
      include 'views/home-content.php';
    break;
    case 'detail':
      include 'models/select_singlevideo.php';
      include 'models/select_comment.php';
      include 'views/singlevideo.php';
    break;
    case 'list':
      include 'models/select_list.php';
      include 'views/top-list.php';
    break;
    case 'bner':
      include 'models/select_bner.php';
      include 'views/bner.php';
    break;
    case 'price_question':
      include 'models/select_pricequestion.php';
      include 'views/price_question.php';
      break;
    case 'insert-comment':
      $id = $_GET['song_id'];
      //$id = isset($_GET['song_id']) ? $_GET['song_id'] : 1;
      require_once 'models/insert_comment.php';
      header('Location: ?action=detail&song_id='.$id.'');
      exit();
    break;
  }
  include 'views/sidebar.php';
  include 'views/footer.php';

?>
