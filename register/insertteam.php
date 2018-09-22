<?php

require 'connection.php';

if(isset($_POST['teamdata']) && !empty($_POST['teamdata'])) {
  $data = json_decode($_POST['teamdata'], true);

  $conn->beginTransaction();

  $insert1 = "INSERT INTO aavishkar_teams (team_id, title, leader_name, description, abstract) VALUES ('".$data[4]."', '".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."')";

  try {
    $res1 = $conn->exec($insert1);
  } catch (\Exception $e) {
    $conn->rollBack();
    HttpResponse.status(205);
    exit('Invalid entry!');
  }

  if($res1 == 1) {
    $que1 = "UPDATE event_data SET total_participation = total_participation + 1 WHERE name = 'Aavishkar'";
    $ans = $conn->query($que1);
    echo $data[4];
    $conn->commit();
  } else {
    $conn->rollBack();
    HttpResponse.status(205);
    exit('Error!');
  }
}

?>
