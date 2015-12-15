<?php
if(isset($_GET['comment_page'])){
  $comment_page = $_GET['comment_page'];
}else{
  $comment_page = 1;
}
//$song_id = $_GET['song_id'];


$nr_comments_per_page = 2;
$offset = ($comment_page-1) *$nr_comments_per_page;
$query = "SELECT * FROM comments  WHERE songId = ".$song_id." ORDER by date desc LIMIT ".$offset.", ".$nr_comments_per_page;
$result = $mysqli->query($query);



$query = "SELECT * FROM comments WHERE songId = ".$song_id;
$rs_result = $mysqli->query($query);
$total_records = $rs_result->num_rows;
$total_pages = ceil($total_records / $nr_comments_per_page);

 ?>
