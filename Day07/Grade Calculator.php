<?php
function calculateGrade($marks) {
    if ($marks >= 90) return "A";
    if ($marks >= 80) return "B";
    if ($marks >= 70) return "C";
    if ($marks >= 60) return "D";
    return "F";
}

echo calculateGrade(85); // Output: B
echo "<br>";
echo calculateGrade(55); // Output: F
?>
