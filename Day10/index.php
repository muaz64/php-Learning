<?php
//1.Indexed Arrays:
$books = ["Harry Potter", "Lord of the Rings", "Percy Jackson"];
echo $books[0];  // Output: Harry Potter
echo count($books); // Counts the number of elements in the array
sort($books);       // Sorts the array in ascending order

?>
<?php
$bookDetails = [
    "title" => "Harry Potter",
    "author" => "J.K. Rowling",
    "price" => 20
];
echo $bookDetails["author"];
$bookDetails["price"] = 25; // Updating the price
echo $bookDetails["price"];
echo "<br>";
foreach ($bookDetails as $key => $value) {
    echo "$key: $value <br>";
}

?>