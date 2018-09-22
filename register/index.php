<?php

require 'connection.php';

function displayAlert($text) {
  // echo '<script type="text/javascript">alert("'.$text.'");</script>';
}

function errorAlert($text) {
  setHeader();
  // echo '<script type="text/javascript">alert("'.$text.'");</script>';
  exit($text);
}

function setHeader() {
  header('HTTP/1.1 403 Forbidden');
}

if((isset($_POST['data']) && !empty($_POST['data'])) && isset($_FILES['module_ppt'])) {
  $data = json_decode($_POST['data'], true);

  $cnt = 0;

  for ($i = 0; $i < 4; $i++) {
    $alreadyRegisteredQuery = "SELECT COUNT(`id`) FROM `team_data` WHERE `phone_no` = ".$data[$i][3];
    $result = $conn->query($alreadyRegisteredQuery);
    foreach ($result as $row) {
      $temp = $row[0];
    }
    $cnt += $temp;
  }

  if($cnt != 0) {
    errorAlert('Mobile number already registerd!');
  }

  $dest_dir = './uploads/ppt/';

  $req = substr(basename($_FILES["module_ppt"]["name"]), strpos($_FILES["module_ppt"]["name"], '.') + 1);
  $dest_file = $dest_dir.$data[4][0].'.'.$req;
  $upload_flag = 1;
  $pptFileType = strtolower(pathinfo($_FILES['module_ppt']['tmp_name'], PATHINFO_EXTENSION));
  $pptFileType = $req;
  $status_update = "";

  // File type checking
  // if($pptFileType !== false) {
  //   echo 'File type '.$pptFileType['mime'].'.';
  //   $upload_flag = 1;
  // } else {
  //   $upload_flag = 0;
  // }

  // checks if file exists or not
  if(file_exists($dest_file)) {
    errorAlert('File already exists.');
    $upload_flag = 0;
  }

  // file size check
  if($_FILES['module_ppt']['size'] > 25500000) {
    errorAlert('Sorry, file is too large. Maximum upload size is 25MB');
    $upload_flag = 0;
  }

  // File type checking
  if($pptFileType != 'pptx' && $pptFileType != 'ppt' && $pptFileType != 'pdf') {
    errorAlert('Sorry, only pptx, ppt and pdf file is allowed.');
    $upload_flag = 0;
  }

  $entry_flag = 1;

  if($upload_flag) {
    $tmp_flag = move_uploaded_file($_FILES['module_ppt']['tmp_name'], $dest_file);
    if($tmp_flag) {
      $status_update = 'Your file '. basename($_FILES['module_ppt']['name']) .' is uploaded.';
      $entry_flag = 1;
    } else {
      errorAlert('Sorry, your file is not uploaded.');
      $entry_flag = 0;
    }
  } else {
    $entry_flag = 0;
  }

  if($entry_flag == 0) {
    errorAlert('Sorry, your file is not uploaded.');
  }

  $conn->beginTransaction();

  $insertMemberQuery = "INSERT INTO `team_data` (`id`, `team_id`, `student_name`, `email`, `phone_no`, `enroll_no`, `college`, `Branch`, `Year`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";
  $insertMember = $conn->prepare($insertMemberQuery);

  $insertProjectQuery = "INSERT INTO `project_data` (`id`, `team_id`, `title`, `leader`, `abstract`, `ppt_path`) VALUES (NULL, ?, ?, ?, ?, ?)";
  $insertProject = $conn->prepare($insertProjectQuery);

  $cnt = 0;

  for ($i = 0; $i < 4; $i++) {
    $alreadyRegisteredQuery = "SELECT COUNT(`id`) FROM `team_data` WHERE `phone_no` = ".$data[$i][3];
    $result = $conn->query($alreadyRegisteredQuery);
    foreach ($result as $row) {
      $temp = $row[0];
    }
    $cnt += $temp;
  }

  if($cnt != 0) {
    $conn->rollBack();
    errorAlert('Mobile number already registerd!');
  }

  $cnt = 0;

  try {
    for ($i = 0; $i < 4; $i++) {
      $temp = $insertMember->execute($data[$i]);
      if ($temp) {
        $cnt += 1;
      }
    }
  } catch (Exception $e) {
    $conn->rollBack();
    errorAlert(" ");
  }

  try {
    if($cnt == 4) {
      $temp = $insertProject->execute($data[4]);
    } else {
      $conn->rollBack();
      errorAlert(" ");
    }
  } catch (\Exception $e) {
    $conn->rollBack();
    errorAlert(" ");
  }

  if($temp == 1) {
    $conn->commit();
    echo $data[4][0];
  } else {
    $conn->rollBack();
    errorAlert(" ");
  }
}

?>
