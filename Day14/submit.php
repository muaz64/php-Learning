<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $profile = $_FILES['profile'];

    // Simple Validation
    if (empty($name) || empty($email)) {
        die("Name and Email are required!");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // File upload handling
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir);
    }

    $fileName = basename($profile["name"]);
    $targetFile = $targetDir . time() . "_" . $fileName;

    if (move_uploaded_file($profile["tmp_name"], $targetFile)) {
        echo "File uploaded successfully.<br>";
    } else {
        echo "File upload failed.<br>";
    }

    // Save form data to a file
    $log = "Name: $name\nEmail: $email\nProfile: $targetFile\n\n";
    file_put_contents("userdata.txt", $log, FILE_APPEND);

    echo "User data saved successfully!";
}
$data = file_get_contents("userdata.txt");
$entries = explode("\n\n", trim($data)); // Split into blocks

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Email</th><th>Profile</th></tr>";

foreach ($entries as $entry) {
    $lines = explode("\n", $entry);
    $name = str_replace("Name: ", "", $lines[0]);
    $email = str_replace("Email: ", "", $lines[1]);
    $profile = str_replace("Profile: ", "", $lines[2]);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$email</td>";
    echo "<td><img src='$profile' width='80'></td>";
    echo "</tr>";
}

echo "</table>";
?>
