<?php
$name = $_POST['name'];
$email = $_POST['email'];
$reaction = $_POST['reaction'];

$insert = "INSERT INTO comments (name,email,comment,songId) VALUES ('$name','$email','$reaction','$id')";
$insertQuery = $mysqli->query($insert);

?>
