## 📅 **Day 3: Operators & Expressions**  
### **Story:**  
Think of PHP as a calculator that can not only add, subtract, multiply, and divide, but also compare, combine, and decide things. Operators are like the buttons on a calculator, and expressions are the calculations you perform with those buttons.  

---

### ✅ **What Are Operators?**  
Operators are symbols used to perform operations on variables and values.  
They are broadly categorized as:  
1. **Arithmetic Operators**  
2. **Assignment Operators**  
3. **Comparison Operators**  
4. **Logical Operators**  
5. **String Operators**  
6. **Increment/Decrement Operators**  
7. **Array Operators**  

---

### ✅ **1. Arithmetic Operators:**  
Used to perform basic math operations.  

| Operator | Description       | Example        |
|----------|-------------------|----------------|
| `+`      | Addition          | `5 + 2 = 7`    |
| `-`      | Subtraction       | `5 - 2 = 3`    |
| `*`      | Multiplication     | `5 * 2 = 10`   |
| `/`      | Division           | `10 / 2 = 5`   |
| `%`      | Modulus (Remainder) | `5 % 2 = 1`   |
| `**`     | Exponentiation     | `5 ** 2 = 25`  |

---

### ✅ **2. Assignment Operators:**  
Used to assign values to variables.  

| Operator | Example       | Same As            |
|----------|---------------|--------------------|
| `=`      | `$x = 10;`     | `$x = 10;`         |
| `+=`     | `$x += 5;`     | `$x = $x + 5;`     |
| `-=`     | `$x -= 3;`     | `$x = $x - 3;`     |
| `*=`     | `$x *= 2;`     | `$x = $x * 2;`     |
| `/=`     | `$x /= 4;`     | `$x = $x / 4;`     |
| `%=`     | `$x %= 3;`     | `$x = $x % 3;`     |

---

### ✅ **3. Comparison Operators:**  
Used to compare two values.  

| Operator | Description       | Example              |
|----------|-------------------|----------------------|
| `==`     | Equal              | `$x == $y`           |
| `===`    | Identical (Same type & value) | `$x === $y` |
| `!=`     | Not equal          | `$x != $y`           |
| `<>`     | Not equal          | `$x <> $y`           |
| `!==`    | Not identical      | `$x !== $y`          |
| `>`      | Greater than       | `$x > $y`            |
| `<`      | Less than          | `$x < $y`            |
| `>=`     | Greater than or equal | `$x >= $y`         |
| `<=`     | Less than or equal | `$x <= $y`           |

---

### ✅ **4. Logical Operators:**  
Used to combine conditional statements.  

| Operator | Description       | Example               |
|----------|-------------------|-----------------------|
| `&&`     | And (Both true)    | `$x && $y`            |
| `||`     | Or (Either true)   | `$x || $y`            |
| `!`      | Not (Inverts true/false) | `!$x`            |

---

### ✅ **5. String Operators:**  
Used to manipulate strings.  

| Operator | Description           | Example               |
|----------|-----------------------|-----------------------|
| `.`      | Concatenation          | `$a . $b` ("Hello" . "Muaz" = "HelloMuaz") |
| `.=`     | Concatenation assignment | `$a .= $b` (`$a = $a . $b`) |

---

### ✅ **6. Increment/Decrement Operators:**  
Used to increase or decrease a variable's value by one.  

| Operator | Description            | Example    |
|----------|------------------------|------------|
| `++$x`   | Pre-Increment           | `Increments, then returns $x` |
| `$x++`   | Post-Increment          | `Returns $x, then increments` |
| `--$x`   | Pre-Decrement           | `Decrements, then returns $x` |
| `$x--`   | Post-Decrement          | `Returns $x, then decrements` |

---

### ✅ **7. Array Operators:**  
Used to compare arrays.  

| Operator | Description       | Example               |
|----------|-------------------|-----------------------|
| `+`      | Union              | `$x + $y` (Merges arrays) |
| `==`     | Equality           | `$x == $y` (Same keys & values) |
| `===`    | Identity           | `$x === $y` (Same keys, values, order) |
| `!=`     | Inequality         | `$x != $y` (Different arrays) |
| `<>`     | Inequality         | `$x <> $y` (Different arrays) |
| `!==`    | Non-identity       | `$x !== $y` (Different arrays or order) |

---

### 💡 **Tips & Tricks:**  
1. **Use `===` Instead of `==`:**  
   Always use `===` to avoid unwanted type conversions.  
   ```php
   <?php
   $x = "5";
   if ($x == 5) { echo "True"; } // Outputs: True
   if ($x === 5) { echo "True"; } // Outputs nothing
   ?>
   ```
   
2. **Using Parentheses for Clarity:**  
   When using multiple operators, use parentheses to avoid confusion.  
   ```php
   <?php
   $result = (10 + 5) * 2;  // Outputs: 30
   ?>
   ```

3. **Concatenation Shortcuts:**  
   Instead of:  
   ```php
   $text = $text . " World";
   ```
   Use:  
   ```php
   $text .= " World";
   ```

---


### ❓ **Q&A:**  
**Q1:** What's the difference between `==` and `===`?  
**Ans:**  
- `==` checks for **value equality**, allowing type conversion.  
- `===` checks for **value and type equality** (strict comparison).  

---

**Q2:** What happens if you divide an integer by zero in PHP?  
**Ans:** PHP will generate a **warning** and return `INF` (Infinity) if you're using floating-point numbers, or an error if you're using integers.  

---

**Q3:** Can we use `+=` with strings in PHP?  
**Ans:** No, but you can use `.=` to concatenate strings.  

---

**Metaphor:**  
Imagine operators as tools in your workshop. Arithmetic operators are your basic tools like hammers and nails, comparison operators are like rulers that measure things, and logical operators are like gates that either allow or block entry based on conditions.  

---
