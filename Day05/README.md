## 📅 **Day 5: Loops (for, while, foreach)**  
### **Story:**  
Imagine you're a teacher grading students' assignments. Instead of grading each one manually, you decide to automate it. **Loops** are like your teaching assistant that helps you repeat the grading process for each student automatically. It saves you time and effort!  

---

### ✅ **What Are Loops?**  
Loops are used to **execute a block of code repeatedly** until a specified condition is met. PHP supports:  
1. `for` Loop  
2. `while` Loop  
3. `do...while` Loop  
4. `foreach` Loop  

---

### ✅ **1. `for` Loop:**  
Best for when you know **exactly how many times you want to iterate**.  
```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Student $i has been graded.<br>";
}
?>
```
**Output:**  
```
Student 1 has been graded.  
Student 2 has been graded.  
Student 3 has been graded.  
Student 4 has been graded.  
Student 5 has been graded.  
```
---

### ✅ **2. `while` Loop:**  
Executes code as long as a condition remains true.  
```php
<?php
$grade = 1;

while ($grade <= 5) {
    echo "Grading student $grade.<br>";
    $grade++;
}
?>
```
**Output:**  
```
Grading student 1.  
Grading student 2.  
Grading student 3.  
Grading student 4.  
Grading student 5.  
```
---

### ✅ **3. `do...while` Loop:**  
Executes code **at least once**, then repeats if the condition is true.  
```php
<?php
$grade = 1;

do {
    echo "Grading student $grade.<br>";
    $grade++;
} while ($grade <= 5);
?>
```
**Output:**  
```
Grading student 1.  
Grading student 2.  
Grading student 3.  
Grading student 4.  
Grading student 5.  
```
---

### ✅ **4. `foreach` Loop:**  
Ideal for **iterating over arrays**.  
```php
<?php
$students = ["Alice", "Bob", "Charlie"];

foreach ($students as $student) {
    echo "$student has submitted the assignment.<br>";
}
?>
```
**Output:**  
```
Alice has submitted the assignment.  
Bob has submitted the assignment.  
Charlie has submitted the assignment.  
```
---

### 📌 **Important Points:**  
1. `for` loops are great for **fixed, countable iterations**.  
2. `while` loops are best when you **don’t know how many times to iterate beforehand**.  
3. `do...while` loops **always execute at least once**, even if the condition is false.  
4. `foreach` is a lifesaver for **arrays and associative arrays**.  

---

### 💡 **Tips & Tricks:**  
1. **Avoid Infinite Loops:**  
   Always ensure your loops have a condition that will eventually be `false`.  
   ```php
   while (true) { 
       echo "Infinite Loop"; 
   }
   ```
   ❌ This will cause your program to run forever.  

2. **Break and Continue:**  
   - `break;` - Stops the loop entirely.  
   - `continue;` - Skips the current iteration and moves to the next one.  
   ```php
   <?php
   for ($i = 1; $i <= 10; $i++) {
       if ($i == 5) continue;
       if ($i == 8) break;
       echo "$i<br>";
   }
   ?>
   ```
   **Output:**  
   ```
   1  
   2  
   3  
   4  
   6  
   7  
   ```
3. **Nested Loops:**  
   You can put loops inside loops for multi-dimensional operations.  
   ```php
   <?php
   for ($i = 1; $i <= 3; $i++) {
       for ($j = 1; $j <= 3; $j++) {
           echo "Cell $i$j<br>";
       }
   }
   ?>
   ```
   **Output:**  
   ```
   Cell 11  
   Cell 12  
   Cell 13  
   Cell 21  
   Cell 22  
   Cell 23  
   Cell 31  
   Cell 32  
   Cell 33  
   ```

---

### ❓ **Q&A:**  
**Q1:** What's the difference between `while` and `do...while` loops?  
**A1:** A `while` loop checks the condition **before executing**, whereas a `do...while` loop checks the condition **after executing**.  

---

**Q2:** Can you use `break` and `continue` in a `foreach` loop?  
**A2:** Yes!  
```php
<?php
$students = ["Alice", "Bob", "Charlie"];

foreach ($students as $student) {
    if ($student == "Bob") continue;
    if ($student == "Charlie") break;
    echo "$student<br>";
}
?>
```
**Output:**  
```
Alice  
```

---

**Q3:** When should I use `foreach` instead of `for` or `while`?  
**A3:** Use `foreach` when you’re working with arrays or associative arrays, as it provides a clean and efficient way to iterate over their elements.  

---

### 📖 **Metaphor:**  
Think of loops like a **conveyor belt in a factory**.  
- **`for` loop:** Like a fixed number of items on a conveyor belt.  
- **`while` loop:** Like adding items until you decide to stop.  
- **`do...while` loop:** Like testing the first item and continuing only if it's good.  
- **`foreach` loop:** Like checking each item in a sorted box (array).  

---

