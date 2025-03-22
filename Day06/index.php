<?php
// Function Definition
function greet() {
    echo "Welcome to our restaurant!<br>";
}

// Function Call
greet();
?>
<?php
// Functions with Parameters:
function order($item) {
    echo "You have ordered: $item.<br>";
}

order("Pizza");
order("Pasta");
order("Burger")
?>

<?php
// Functions with Return Values:
function calculateBill($price, $quantity) {
    $total = $price * $quantity;
    return $total;
}

$bill = calculateBill(100, 2);
echo "Total Bill: $bill<br>";
?>

<?php
// Default Parameters:
function greeting($name = "Guest") {
    echo "Hello, $name!<br>";
}

greeting("Muaz");
greeting();
?>

<?php
// Global Scope:
$name = "Global Name";

function displayName() {
    global $name;
    echo $name;
}

displayName();

// Local Scope:
function showItem() {
    $item = "Burger";
    echo $item;
}

showItem();
echo $item; // Error: Undefined variable

// Static Scope:
function countVisitors() {
    static $count = 0;
    $count++;
    echo "Visitors: $count<br>";
}

countVisitors();
countVisitors();
countVisitors();
?>



