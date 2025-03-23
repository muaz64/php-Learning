<?php
function isPalindrome($string) {
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string)); // Remove spaces, symbols, etc.
    $reversedString = strrev($cleanedString);

    return $cleanedString === $reversedString ? "It's a palindrome!" : "Not a palindrome!";
}

echo isPalindrome("Madam"); // Output: It's a palindrome!
echo "<br>";
echo isPalindrome("Hello"); // Output: Not a palindrome!
?>
