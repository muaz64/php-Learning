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

// Counting Words (str_word_count)
$text = "PHP is amazing!";
echo str_word_count($text); // Output: 3




?>