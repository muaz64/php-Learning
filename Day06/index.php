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

