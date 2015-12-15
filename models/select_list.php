<?php
$red_limit = 100-(date('j')-1)*5;
$grey_offset = $red_limit;
$limit = 100;

$query = "SELECT * FROM  videodata ORDER BY number LIMIT ".$red_limit;
$red_list = $mysqli->query($query);

$query2 = "SELECT * FROM videodata  ORDER BY number LIMIT ".$grey_offset.",".$limit;
$grey_list = $mysqli->query($query2);

 ?>
