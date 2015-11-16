<?php
  include 'views/header.php';

switch ($action) {
  case 'home':
    include 'views/index.php';
    break;

  default:
    include 'views/index.php';
    break;
}

?>
