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
echo "<br>";

// 4. Line-by-Line Reading (fgets, feof)
$file = fopen("example.txt", "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);

// 5. file_get_contents() and file_put_contents()
// Quick file read:
$content = file_get_contents("example.txt");
echo $content;

// Quick file write (replaces all content):
$content =file_put_contents("example.txt", "Overwritten content!");
echo $content;

// Quick append:
$content =file_put_contents("example.txt", "\nNew line", FILE_APPEND);
echo $content;

?>