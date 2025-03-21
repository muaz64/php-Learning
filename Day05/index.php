<?php
// for Loop:

for ($i = 1; $i <= 5; $i++) {
    echo "Student $i has been graded.<br>";
}
?>

<?php
// while Loop:
$grade = 1;

while ($grade <= 5) {
    echo "Grading student $grade.<br>";
    $grade++;
}
?>

<?php
// do...while Loop:
$grade = 5;

do {
    echo "Grading student no. $grade.<br>";
    $grade++;
} while ($grade <= 10);
?>

<?php
// foreach Loop:
$students = ["Alice", "Bob", "Charlie"];

foreach ($students as $student) {
    echo "$student has submitted the assignment.<br>";
}
?>



