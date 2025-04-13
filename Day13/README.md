 # **Day 13: Mini Project – Simple Form with Validation & File Upload** 🎉



# 🎯 **Goal**  
We’ll build a form that:

1. Takes a user's name and email ✅  
2. Validates the input ✅  
3. Uploads a profile picture ✅  
4. Saves the data in a `.txt` file ✅  

This project uses everything you’ve learned so far:  
- Forms (`$_POST`, `$_FILES`)  
- Validation (basic security)  
- File handling (saving data)  
- Uploading files

---

# 🧠 Step-by-Step Breakdown

---

### 🧾 1. **Create the HTML Form**
```html
<form action="submit.php" method="POST" enctype="multipart/form-data">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="email" name="email"><br><br>
  Profile Picture: <input type="file" name="profile"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
```

> 💡 `enctype="multipart/form-data"` is **required** for file uploads.

---

### 📄 2. **Create submit.php for Form Handling**

```php
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
```

---

## 🔐 **What Did We Use & Why?**

| Function | Purpose |
|---------|---------|
| `htmlspecialchars()` | Prevent XSS (cross-site scripting) |
| `trim()` | Remove extra white space |
| `filter_var()` | Email validation |
| `$_FILES` | Access uploaded file data |
| `move_uploaded_file()` | Move uploaded file to permanent location |
| `file_put_contents()` | Save data to file |

---

## 💬 **Q&A Section**

🔸 **Q1: What is the role of `$_FILES`?**  
✅ It contains file upload data like name, type, temp path, and size.

---

🔸 **Q2: Why use `htmlspecialchars()`?**  
✅ To prevent users from entering harmful HTML or JavaScript.

---

🔸 **Q3: Why use `move_uploaded_file()`?**  
✅ It safely moves the file from a temporary directory to your uploads folder.

---

🔸 **Q4: What is `FILTER_VALIDATE_EMAIL`?**  
✅ It’s a built-in filter to check if an email is valid.

---

## 💡 Tips & Tricks

🔸 Always check file types and sizes before accepting uploads:
```php
$allowed = ['jpg', 'png', 'jpeg'];
$ext = pathinfo($fileName, PATHINFO_EXTENSION);

if (!in_array($ext, $allowed)) {
    die("Only JPG, JPEG, and PNG files are allowed.");
}
```

🔸 Name files uniquely to avoid overwriting:
```php
$uniqueFile = time() . "_" . $fileName;
```

🔸 Store files in a dedicated `/uploads` directory with correct permissions (`chmod 755` or `775`).

---

## 🧪 Challenge Time!  
🔹 Modify the form to include a **message box** and also save the message with the data.  
🔹 Prevent upload if the file is larger than 1MB.  
🔹 Display all saved user data in a readable HTML table (optional for Day 14).

---

## ✅ Summary

- Collected user data via form
- Validated inputs to prevent garbage and malicious data
- Handled file uploads securely
- Saved everything into a `.txt` log
- Reinforced real-world skills!

