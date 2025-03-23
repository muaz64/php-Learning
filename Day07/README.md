# 📅 **Day 7: Review & Practice**  
### **Story:**  
Imagine you’re the **head chef** of a restaurant preparing for a grand opening. You need to **double-check your recipes (functions)**, **ingredients (variables, constants)**, and **processes (loops, conditionals)** to make sure everything runs smoothly. Today, you’ll test your skills by completing various challenges and projects. 🍽️📜

---

### ✅ **Review of Week 1:**  
You've covered:
1. **PHP Basics & Syntax**
2. **Variables, Constants, and Data Types**
3. **Operators & Expressions**
4. **Conditional Statements (if, else, switch)**
5. **Loops (for, while, foreach)**
6. **Functions & Scope**

---


## 📌 **Practice Challenges:**  
### **Challenge 1: Temperature Converter (Easy)**  
Create a function `convertTemperature($temp, $scale)` that converts temperatures between **Celsius and Fahrenheit**.  

---

### **Challenge 2: Simple Calculator (Medium)**  
Create a function `calculator($num1, $num2, $operation)` that performs basic math operations: **addition, subtraction, multiplication, and division**.  

---

### **Challenge 3: Palindrome Checker (Tricky)**  
Write a function `isPalindrome($string)` that checks if a word is a palindrome (**reads the same backward and forward**).  

---

### **Challenge 4: Grade Calculator (Medium)**  
Create a function `calculateGrade($marks)` that returns a grade based on marks:  
- **90+ = A**  
- **80–89 = B**  
- **70–79 = C**  
- **60–69 = D**  
- **Below 60 = F**  


---

### **Challenge 5: Multiplication Table Generator (Tricky)**  
Write a function `generateMultiplicationTable($number)` that generates a multiplication table for a given number.  


---

### 💡 **Tips & Tricks:**  
1. **Break Down Problems:**  
   Start with a small piece of the problem and build up from there.  
2. **Reuse Your Functions:**  
   Functions are made for reuse. Keep your functions simple and focused.  
3. **Testing:**  
   Always test your functions with various inputs, especially edge cases.  
4. **Use Comments:**  
   Commenting your code helps you understand your own logic when you revisit it later.  
5. **Stay Consistent with Naming:**  
   Use descriptive names for functions and variables to make your code easy to read.  

---

### 📖 **Q&A:**  
**Q1:** What’s the difference between `return` and `echo`?  
**Ans:** `echo` outputs data directly, while `return` sends data back to the caller for further use.  

---

**Q2:** Can functions be nested?  
**Ans:** Yes! But it’s not recommended unless absolutely necessary. Example:  
```php
<?php
function outerFunction() {
    function innerFunction() {
        echo "I'm an inner function!";
    }
}

outerFunction();
innerFunction(); // Now, this can be called.
?>
```
---

**Q3:** How do I debug my functions when they don’t work as expected?  
**Ans:**  
- Use `var_dump()` or `print_r()` to see what’s being returned.  
- Comment out parts of the function to isolate the problem.  
- Echo statements are helpful for checking what parts of the function are being executed.  

