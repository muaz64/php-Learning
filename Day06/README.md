
# 📅 **Day 6: Functions & Scope**  
### **Story:**  
Imagine you’re running a restaurant. Every time a customer places an order, you go through the entire process of cooking, serving, and billing manually. Tedious, right? Now, think of a **function** as a **chef’s recipe** — you prepare it once, and you can use it over and over again with just one call. 🍲📞

---

### ✅ **What Are Functions?**  
A **function** is a block of code that performs a specific task when called. It helps **organize code, make it reusable, and improve readability**.  

---

### ✅ **Creating and Calling Functions:**  
```php
<?php
// Function Definition
function greet() {
    echo "Welcome to our restaurant!<br>";
}

// Function Call
greet();
?>
```
**Output:**  
```
Welcome to our restaurant!
```
---

### ✅ **Functions with Parameters:**  
Parameters are like **ingredients** you can pass to the recipe (function) to make it work with different data.  
```php
<?php
function order($item) {
    echo "You have ordered: $item.<br>";
}

order("Pizza");
order("Pasta");
?>
```
**Output:**  
```
You have ordered: Pizza.  
You have ordered: Pasta.  
```
---

### ✅ **Functions with Return Values:**  
A function can **return a result** for further processing.  
```php
<?php
function calculateBill($price, $quantity) {
    $total = $price * $quantity;
    return $total;
}

$bill = calculateBill(100, 2);
echo "Total Bill: $bill<br>";
?>
```
**Output:**  
```
Total Bill: 200
```
---

### ✅ **Default Parameters:**  
If you don’t provide a value for a parameter, a default value will be used.  
```php
<?php
function greeting($name = "Guest") {
    echo "Hello, $name!<br>";
}

greeting("Muaz");
greeting();
?>
```
**Output:**  
```
Hello, Muaz!  
Hello, Guest!  
```
---

### ✅ **Variable Scope:**  
Scope determines where a variable can be accessed.  

1. **Global Scope:**  
   Declared outside functions; accessible globally.  
```php
<?php
$name = "Global Name";

function displayName() {
    global $name;
    echo $name;
}

displayName();
?>
```
**Output:**  
```
Global Name
```

2. **Local Scope:**  
   Declared within functions; only accessible within that function.  
```php
<?php
function showItem() {
    $item = "Burger";
    echo $item;
}

showItem();
echo $item; // Error: Undefined variable
?>
```
**Output:**  
```
Burger
```

3. **Static Scope:**  
   Keeps its value between function calls.  
```php
<?php
function countVisitors() {
    static $count = 0;
    $count++;
    echo "Visitors: $count<br>";
}

countVisitors();
countVisitors();
countVisitors();
?>
```
**Output:**  
```
Visitors: 1  
Visitors: 2  
Visitors: 3  
```
---

### 📌 **Important Points:**  
1. **Functions improve code reusability.**  
2. **Parameters make functions dynamic.**  
3. **Global variables can be accessed within functions using the `global` keyword.**  
4. **`static` variables preserve their values between calls.**  

---

### 💡 **Tips & Tricks:**  
1. **Use `return` wisely:**  
   If a function only `echo`s something, it’s not reusable. But if it `return`s a value, you can store or manipulate it.  
2. **Use `global` sparingly:**  
   Overusing global variables can cause bugs that are hard to trace.  
3. **Naming Functions:**  
   Use **descriptive names** to describe what the function does. Example: `calculateBill()` is better than `calc()`.  
4. **Break Large Functions:**  
   If a function does too much, break it into smaller functions for better readability.  
---

### ❓ **Q&A:**  
**Q1:** What is the difference between `echo` and `return` in a function?  
**A1:** `echo` outputs data directly to the screen, while `return` sends data back to the caller for further processing.  

---

**Q2:** Can I have multiple `return` statements in a function?  
**A2:** Yes! But only one will be executed when the function is called. Example:  
```php
<?php
function checkNumber($num) {
    if ($num > 0) return "Positive";
    if ($num < 0) return "Negative";
    return "Zero";
}

echo checkNumber(5);
?>
```
**Output:**  
```
Positive
```
---

**Q3:** What happens if I don't use `return` in a function?  
**A3:** The function will return `NULL` by default.  

---

### 📖 **Metaphor:**  
Think of functions like a **chef's recipe book**. 📚👨‍🍳  
- The recipe (function) is written once but can be used to cook multiple dishes (call the function multiple times).  
- Ingredients (parameters) can vary depending on the dish you want to make.  
- A `return` is like serving the dish to the customer (giving the result back).  

---

