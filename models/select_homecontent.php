<?php

$page = isset($_GET['page']) ? $_GET['page'] : ''.date('j').'';

if ($page > date('j')){
  $page = date('j');
}

$nr_vid_per_page = 5;
$offset = ($page-2)* $nr_vid_per_page;

$result = "SELECT * FROM videodata ORDER BY number desc LIMIT ".$offset.", ".$nr_vid_per_page;

$data = $mysqli->query($result);
 ?>
