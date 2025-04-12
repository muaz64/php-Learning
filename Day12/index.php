<?php
//   1. Writing to a File (fwrite)
  $file = fopen("example.txt", "w"); // "w" = write, creates file if not exists
  fwrite($file, "Hello, world!\n");
  fwrite($file, "Welcome to PHP file handling!");
  fclose($file);
?>