<?php
//1.Indexed Arrays:
$books = ["Harry Potter", "Lord of the Rings", "Percy Jackson"];
echo $books[0];  // Output: Harry Potter
echo count($books); // Counts the number of elements in the array
sort($books);       // Sorts the array in ascending order

?>
<?php
//2. Associative Arrays:
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

<?php
//Multidimensional Arrays (Arrays within Arrays):
$library = [
    "Fiction" => ["Harry Potter", "The Hobbit"],
    "Non-Fiction" => ["Sapiens", "Educated"],
    "Science" => ["A Brief History of Time", "The Selfish Gene"]
];
echo $library["Fiction"][0] ; // Output: Harry Potter
echo "<br>";
echo $library["Science"][1] ; // Output: The Selfish Gene

?>