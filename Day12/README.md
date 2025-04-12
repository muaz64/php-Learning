
# 📘 **Day 12: File Handling in PHP**  
🔑 *Key Skills: Reading files, writing to files, appending data, and closing files.*

---

## 🔮 **Why Learn File Handling? (Short Story)**  
Imagine you're building a **guestbook website** 📝. You want users to leave messages that get saved even after refreshing the page. Databases are cool, but what if you want to start simple? File handling is your first best friend!

---

## 🧠 **PHP File Functions to Remember**  
| Function       | Purpose                  |
|----------------|---------------------------|
| `fopen()`      | Open a file               |
| `fread()`      | Read from a file          |
| `fwrite()`     | Write to a file           |
| `fclose()`     | Close the file            |
| `file_get_contents()` | Read entire file as a string |
| `file_put_contents()` | Write or replace entire file |
| `fgets()`      | Read line by line         |
| `feof()`       | Check end of file         |
| `fseek()`      | Move pointer in file      |
| `unlink()`     | Delete a file             |

---

## 🛠️ **1. Writing to a File** (`fwrite`)

```php
$file = fopen("example.txt", "w"); // "w" = write, creates file if not exists
fwrite($file, "Hello, world!\n");
fwrite($file, "Welcome to PHP file handling!");
fclose($file);
```

> 💡 Tip: Using `"w"` will **overwrite** the file. Use `"a"` to **append** instead.

---

## 🛠️ **2. Appending to a File**

```php
$file = fopen("example.txt", "a"); // "a" = append
fwrite($file, "\nThis line is added later!");
fclose($file);
```

> 📌 Use this when you want to add logs or new user data *without deleting old data*.

---

## 🛠️ **3. Reading a File** (`fread`)

```php
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt")); // read entire file
fclose($file);
echo $content;
```

> ⚠️ Make sure the file exists and has content; otherwise, `filesize()` may return 0 or an error.

---

## 🛠️ **4. Line-by-Line Reading** (`fgets`, `feof`)

```php
$file = fopen("example.txt", "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);
```

> ✅ Ideal for **reading logs or lists** line by line.

---

## 🛠️ **5. `file_get_contents()` and `file_put_contents()`**

### 🔹 *Quick file read:*
```php
$content = file_get_contents("example.txt");
echo $content;
```

### 🔹 *Quick file write (replaces all content):*
```php
file_put_contents("example.txt", "Overwritten content!");
```

### 🔹 *Quick append:*
```php
file_put_contents("example.txt", "\nNew line", FILE_APPEND);
```

> 🚀 These are shortcut functions that **combine open, write/read, and close** in one.

---

## 🔥 **Q&A Section**

🔸 **Q1: What happens if the file doesn't exist?**  
✅ `fopen("file.txt", "w")` will **create** the file if it doesn’t exist.  
❌ But `fopen("file.txt", "r")` will **fail** unless the file already exists.

---

🔸 **Q2: What is the difference between `"w"` and `"a"`?**  
- `"w"`: **Write mode** — Overwrites the file.  
- `"a"`: **Append mode** — Adds data at the end without deleting old content.

---

🔸 **Q3: Can I use file handling for uploading files?**  
✅ Yes! But file handling for uploads also involves `$_FILES` — we’ll learn that later.

---

🔸 **Q4: Is there a function to just delete a file?**  
✔ Yes! Use `unlink("filename.txt");`

---

## 💡 Tips & Tricks

🧩 Use `file_exists()` to check if a file exists before reading or writing:
```php
if (file_exists("data.txt")) {
    echo "File found!";
}
```

🧩 Always use `fclose()` to free resources after reading or writing.

🧩 Use `"a"` mode when logging, so no old data is lost.

🧩 Try to handle file permissions properly, especially on live servers.

---


## ✅ Summary

- 📖 `fopen()` opens, `fwrite()` writes, `fread()` reads, and `fclose()` closes files.
- 🧠 `file_get_contents()` & `file_put_contents()` are shortcuts for basic tasks.
- 🔐 Always check if a file exists before reading, and remember to close it.
- ✏️ Practice by building small tools like **logs, note savers, and text-based databases**.
