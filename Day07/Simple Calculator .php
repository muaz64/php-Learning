<?php
function calculator($num1, $num2, $operation) {
    switch($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Division by zero error!";
            }
        default:
            return "Invalid operation!";
    }
}

echo calculator(10, 5, 'add'); // Output: 15
echo "<br>";
echo calculator(10,5, 'subtract'); //Output: 5
echo "<br>";
echo calculator(10,5, 'multiply'); //Output: 50
echo "<br>";
echo calculator(10, 5, 'divide'); // Output: 2

?>
