
# 📅 **Day 9: Validating Form Data & Preventing Injection**

### **Story:**  
Imagine you’re a **bank manager** managing online transactions. You receive **requests from clients (form data)**, but some hackers are trying to **inject harmful commands**. Your goal is to ensure only **valid, safe transactions are processed**. 💸🔐

---

### ✅ **Why Form Validation Is Important:**  
1. Prevents malicious users from injecting harmful scripts.
2. Ensures data integrity and accuracy.
3. Enhances user experience with better error handling.

---

### 📌 **Two Types of Validation:**  
1. **Client-Side Validation (JavaScript):** Fast, but not reliable alone.  
2. **Server-Side Validation (PHP):** Reliable, secure, and must always be used.  

---

### 📖 **Basic Validation with PHP:**  
Always check if the form data exists and is not empty.  

```php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        echo "Name is required.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        echo "Hello, $name!";
    }
}
```

---

### 📌 **Sanitizing & Validating Data:**  
PHP offers functions to sanitize and validate data.  

---

#### 🔒 **1. `htmlspecialchars()` - Prevent XSS (Cross-Site Scripting):**  
Converts special characters to HTML entities.  

```php
$name = htmlspecialchars($_POST["name"]);
```

---

#### 🔒 **2. `filter_var()` - Sanitize Data:**  
Removes illegal characters from a string.  

```php
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
```

---

#### 🔒 **3. `filter_var()` - Validate Data:**  
Checks if the input matches the required format.  

```php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address.";
} else {
    echo "Invalid email address.";
}
```

---

### 📌 **Preventing SQL Injection:**  
SQL injection is when an attacker tries to **manipulate your SQL queries** through user inputs.  

---

#### 🚫 **Example of Vulnerable Code:**  
```php
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
```
An attacker could enter:
```
username: admin' -- 
password: (Anything)
```
And bypass authentication!

---

#### ✅ **Solution: Use Prepared Statements:**  
```php
$conn = new mysqli("localhost", "username", "password", "database");

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
$stmt->close();
$conn->close();
```

---

### 💡 **Tips & Tricks:**  
1. **Always Escape Outputs:**  
   Use `htmlspecialchars()` for all outputs that go back to the browser.  
2. **Use `filter_var()` for Emails & URLs:**  
   ```php
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "Invalid email format.";
   }
   ```
3. **Avoid Direct SQL Queries:**  
   Use **Prepared Statements (PDO or MySQLi)** for database interactions.  
4. **Check for Numeric Values:**  
   ```php
   if (filter_var($age, FILTER_VALIDATE_INT)) {
       echo "Valid age.";
   } else {
       echo "Invalid age.";
   }
   ```

---

### 📖 **Q&A:**  
**Q1:** What’s the difference between `htmlspecialchars()` and `filter_var()`?  
**Ans:** `htmlspecialchars()` prevents **XSS attacks** by converting special characters to HTML entities, while `filter_var()` sanitizes or validates data by applying predefined filters.  

---

**Q2:** Why is `$_REQUEST` risky to use?  
**Ans:** It can accept data from both `$_GET` and `$_POST`, making it difficult to properly secure the data.  

---

**Q3:** Can I use `htmlspecialchars()` for sanitizing database inputs?  
**Ans:** No! Use **prepared statements** or **parameterized queries** to prevent SQL injection. `htmlspecialchars()` is meant for protecting output displayed on a webpage.  

---

