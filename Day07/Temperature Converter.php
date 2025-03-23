<?php
function convertTemperature($temp, $scale) {
    if ($scale == 'C') {
        return ($temp * 9/5) + 32; // Convert to Fahrenheit
    } elseif ($scale == 'F') {
        return ($temp - 32) * 5/9; // Convert to Celsius
    } else {
        return "Invalid scale!";
    }
}

echo convertTemperature(100, 'C'); // Output: 212
echo "<br>";
echo convertTemperature(212, 'F'); // Output: 100
?>
