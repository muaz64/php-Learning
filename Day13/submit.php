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
?>
