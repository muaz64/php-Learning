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
<!--  -->
<?php

?>