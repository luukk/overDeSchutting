<?php

$song_id = isset($_GET['song_id']) ? $_GET['song_id'] : 100;

if(date('j')<21){
$limitSinglePage = 100-(date('j')-2) *5-4;
}
if ($song_id < $limitSinglePage) {
  $song_id = $limitSinglePage;
}

if($song_id == 1){
  $offset = 1;
  $nr = 2;
}
elseif($song_id == 100){
  $nr = 2;
  $offset = 2;
}
else{
  $offset = 2;
  $nr = 3;
}

$id_number = $song_id-$offset;

$query = "SELECT * from videodata ORDER BY number LIMIT ".$id_number.",".$nr;

$video = $mysqli->query($query);

$query = "SELECT *FROM comments WHERE songId = ".$song_id."";
$number = $mysqli->query($query);
$tst = mysqli_num_rows($number);
?>
