<?php
function generateMultiplicationTable($number) {
    echo "Multiplication Table for $number:<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$number x $i = " . ($number * $i) . "<br>";
    }
}

generateMultiplicationTable(5);
?>
