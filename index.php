<?php
  $_POST = json_decode(file_get_contents('php://input'), true);
  file_put_contents('postcatch.log', var_export($_POST, true), FILE_APPEND);
  foreach (getallheaders() as $name => $value) {
    file_put_contents('postcatch.log', var_export($name . ": " . $value, true), FILE_APPEND);
  }
  echo "done";
?>