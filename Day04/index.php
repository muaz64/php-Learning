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

