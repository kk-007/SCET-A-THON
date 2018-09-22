<?php
try {
  $user = 'opustech_update';
  $pass = 'upDate2018';
  $host = 'localhost';
  $db = 'opustech_update2018';
  $charset = 'utf8';

  $conn = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  print("Error connecting to Server.");
  die();
}
/*if($conn!=null)
{
	echo 'Done';
}*/
?>
