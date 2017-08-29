<?php
  date_default_timezone_set('America/New_York');

  $file = '../data/assignment_submission_' . $_POST['assignment'] . '.json';
  if (!file_exists($file))
    $fh = fopen($file, 'w') or die ('Can not write file');

  $jsonString = file_get_contents($file);
  $data       = json_decode($jsonString, true);
  $output     = [];

  foreach ($_POST as $key => $value) {
    $output[$key] = $value;
  }
  $output['submission_date'] = date('Ymd-Gi');
  $data[] = $output;

  $newJsonString = json_encode($data);
  file_put_contents($file, $newJsonString);
  unset($data);

  echo $_POST['student_id'] . "_" . $output['submission_date'];
?>
