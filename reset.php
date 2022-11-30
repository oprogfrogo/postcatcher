<?php
  $f = @fopen("postcatch.log", "r+");
  if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);
  }
  header("Location: /postcatch.log"); 
  exit();
?>