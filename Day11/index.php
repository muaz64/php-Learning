<!-- Creating Strings in PHP -->
<?php
// Using single quotes
$name = 'Muaz';

// Using double quotes
$greeting = "Hello, $name!";

// Using heredoc syntax (for multi-line text)
$text = <<<EOD
This is a multi-line string.
It preserves formatting.
EOD;

// Using nowdoc syntax (similar to single quotes but for multi-line)
$text2 = <<<'EOD'
This won't interpret variables like $name.
EOD;

?>
<!-- Creating Strings in PHP: -->
<?php
// 1. Finding String Length (strlen)
$text = "Hello, PHP!";
echo strlen($text); // Output: 11
echo "<br>";
// Counting Words (str_word_count)
$text = "PHP is amazing!";
echo str_word_count($text); // Output: 3
echo "<br>";
// 3. Reversing a String (strrev)
$text = "Hello";
echo strrev($text); // Output: olleH
echo "<br>";
// 4. Finding a Word (strpos)
$text = "I love PHP programming!";
$position = strpos($text, "PHP");
echo $position; // Output: 7
echo "<br>";
// 5. Replacing Words (str_replace)
$text = "I love PHP!";
$newText = str_replace("PHP", "JavaScript", $text);
echo $newText; // Output: I love JavaScript!
echo "<br>";

// /6. Converting to Upper/Lowercase (strtoupper, strtolower)
$text = "Hello World!";
echo strtoupper($text); // HELLO WORLD!
echo "<br>";
echo strtolower($text); // hello world!
echo "<br>";

// 7. Extracting a Substring (substr)
$text = "Hello, PHP!";
echo substr($text, 0, 5); // Output: Hello
echo "<br>";

// 8. Splitting a String (explode)
$sentence = "apple,banana,grape";
$fruits = explode(",", $sentence);
print_r($fruits);
// Output: Array ( [0] => apple [1] => banana [2] => grape )
echo "<br>";

// 9. Joining an Array into a String (implode)
$fruits = ["apple", "banana", "grape"];
$text = implode(", ", $fruits);
echo $text; // Output: apple, banana, grape
echo "<br>";

// 10. Removing Whitespaces (trim)
$text = "  Hello, PHP!  ";
echo trim($text); // Output: "Hello, PHP!"
echo "<br>";

?>