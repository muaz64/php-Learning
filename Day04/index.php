<?php
//if Statement:
$age = 20;

if ($age >=18) {
    echo "You are eligible to vote.";
}

?>

<?php
//if...else Statement:
$age = 16;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are not eligible to vote.";
}
//Ternary Operator (Shortcut for if...else)
$age = 20;
echo ($age >= 18) ? "Adult." : "Minor.";

?>

<?php

// if...elseif...else Statement:
$grade = 85;

if ($grade >= 90) {
    echo "Excellent!";
} elseif ($grade >= 80) {
    echo "Good job!";
} elseif ($grade >= 70) {
    echo "Keep trying!";
} else {
    echo "Need more practice.";
}

?>

<?php

//switch Statement:
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Friday":
        echo "Almost the weekend!";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!";
        break;
    default:
        echo "It's just a regular day.";
}
?>


