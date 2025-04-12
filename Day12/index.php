<?php
//   1. Writing to a File (fwrite)
  $file = fopen("example.txt", "w"); // "w" = write, creates file if not exists
  fwrite($file, "Hello, world!\n");
  fwrite($file, "Welcome to PHP file handling!");
  fclose($file);

//   2. Appending to a File
$file = fopen("example.txt", "a"); // "a" = append
fwrite($file, "\nThis line is added later!");
fclose($file);

//  3. Reading a File (fread)
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt")); // read entire file
fclose($file);
echo $content;
?>