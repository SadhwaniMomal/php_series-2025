Here is your complete **PHP Notes** content structured as a full `note.md` file, with all code and topics neatly organized for future reference.

---

````markdown
# 📘 PHP Notes for Future Reference

---

## ✅ 1. Print in PHP

```php
<?php
// echo is used to output text
echo "This is Tutorial 5";
?>
```
````

---

## ✅ 2. Variables in PHP

Variables are containers for storing data.  
**Rules for PHP Variables:**

- Must start with a `$` sign
- Cannot start with a number
- Must begin with a letter or an underscore (`_`)
- Can only contain alphanumeric characters and underscores
- Are **case-sensitive** (`$harry`, `$hArry`, and `$Harry` are different)

```php
<?php
$name  = "Shubham";
$income = 200;

echo "This guy is $name and his income is Rs. $income <br>";
echo "$name is a good boy <br>";
echo "$name is a real gangster <br>";
?>
```

---

## ✅ 3. PHP Data Types

### PHP Supports:

1. **String**
2. **Integer**
3. **Float**
4. **Boolean**
5. **Object**
6. **Array**
7. **NULL**

```php
<?php
// 1. String - Sequence of characters
$name = "Moomal";
$friend = 'Abeer';
echo "$name ka friend is $friend <br>";

// 2. Integer - Non-decimal numbers
$income = 455;
$debt = -655;
echo $income . "<br>";
echo $debt . "<br>";

// 3. Float - Decimal numbers
$income = 344.5;
$debts = -45.5;
echo $income . "<br>";
echo $debts . "<br>";

// 4. Boolean - true/false values
$x = true;
$is_friend = false;
echo var_dump($x) . "<br>";
echo var_dump($is_friend) . "<br>";

// 5. Object - Instance of a class
// class Employee {} --> $emp = new Employee();

// 6. Array - Store multiple values
$friends = array("Rohan", "Shubham", "Skillf", "Larry");
echo var_dump($friends) . "<br>";

echo $friends[0] . "<br>";
echo $friends[1] . "<br>";
echo $friends[2] . "<br>";
echo $friends[3] . "<br>";

// 7. NULL - Empty variable
$name = NULL;
echo var_dump($name);
?>
```

---

## ✅ 4. String Functions in PHP

```php
<?php
$name = "Moomal Sadhwani";

// Output the string
echo $name . "<br>";

// strlen() - Get string length
echo "The length of my string is " . strlen($name) . "<br>";

// str_word_count() - Count words in string
echo str_word_count($name) . "<br>";

// strrev() - Reverse the string
echo strrev($name) . "<br>";

// strpos() - Find position of substring
echo strpos($name, "Sadhwani") . "<br>";

// str_replace() - Replace text
echo str_replace("Sadhwani", "Kumari", $name) . "<br>";

// str_repeat() - Repeat the string
echo str_repeat($name, 4) . "<br>";

// rtrim() - Trim from right
echo rtrim("         This is good girl        ") . "<br>";

// ltrim() - Trim from left
echo ltrim("         This is good girl        ") . "<br>";
?>
```

---

## 📌 Summary

- PHP variables always start with `$`
- PHP supports 7 main data types
- String functions are powerful for manipulating text
- Arrays help store multiple values
- `var_dump()` is useful for debugging types and values

Great! Let's expand your section on **Operators in PHP** properly with clear examples, explanations, and corrected syntax for your notes. Here's a complete and clean markdown section you can add to your `note.md` file:

---

````markdown
---

## ✅ Operators in PHP

Operators are used to perform operations on variables and values.

```
<?php
// 1. Arithmetic Operators
$x = 10;
$y = 5;

echo $x + $y . "<br>"; // Addition
echo $x - $y . "<br>"; // Subtraction
echo $x * $y . "<br>"; // Multiplication
echo $x / $y . "<br>"; // Division
echo $x % $y . "<br>"; // Modulus
echo $x ** $y . "<br>"; // Exponentiation

// 2. Assignment Operators
$a = 10;
$a += 5; // $a = $a + 5
echo $a . "<br>";

$a -= 3;
echo $a . "<br>";

$a *= 2;
echo $a . "<br>";

$a /= 3;
echo $a . "<br>";

$a %= 4;
echo $a . "<br>";

// 3. Comparison Operators
$m = 10;
$n = 20;

var_dump($m == $n);  // Equal
var_dump($m != $n);  // Not equal
var_dump($m > $n);   // Greater than
var_dump($m < $n);   // Less than
var_dump($m >= $n);  // Greater than or equal to
var_dump($m <= $n);  // Less than or equal to

// 4. Logical Operators
$x = true;
$y = false;

var_dump($x && $y); // AND
var_dump($x || $y); // OR
var_dump(!$x);      // NOT
?>
```
````

---

````

This version gives:

- Real PHP examples
- Output hints
- Use of `var_dump()` for booleans
- Clean formatting

Let me know if you'd like to add **increment/decrement**, **string operators**, or **bitwise operators** too.
---

Here are the **notes and examples** for **conditions in PHP** for future reference, saved in a markdown format:

---

## ✅  PHP Condition Statements

## 1. `if` Statement

The `if` statement executes some code if a condition is true.

### Syntax:
```php
if (condition) {
    // code to be executed if condition is true
}
````

### Example:

```php
$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.";
}
```

---

## 2. `else if` Statement

The `else if` statement is used to specify a new condition if the first condition is false.

### Syntax:

```php
if (condition1) {
    // code to be executed if condition1 is true
} elseif (condition2) {
    // code to be executed if condition2 is true
}
```

### Example:

```php
$score = 75;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 75) {
    echo "Grade: B";
} elseif ($score >= 60) {
    echo "Grade: C";
}
```

---

## 3. `else` Statement (for completeness)

The `else` block runs if none of the above conditions are true.

### Syntax:

```php
if (condition1) {
    // code if condition1 is true
} elseif (condition2) {
    // code if condition2 is true
} else {
    // code if neither condition1 nor condition2 is true
}
```

### Example:

```php
$temperature = 10;

if ($temperature > 25) {
    echo "It's warm.";
} elseif ($temperature > 15) {
    echo "It's mild.";
} else {
    echo "It's cold.";
}
```

## 4. `switch` Statement

The `switch` statement is used to perform different actions based on different conditions.  
It’s a cleaner alternative to multiple `if...elseif` blocks when checking the same variable against multiple values.

### Syntax:

```php
switch (expression) {
    case value1:
        // code to be executed if expression == value1
        break;
    case value2:
        // code to be executed if expression == value2
        break;
    ...
    default:
        // code to be executed if none of the cases match
}
```

### Example:

```php
$day = "Wednesday";

switch ($day) {
    case "Monday":
        echo "Start of the week!";
        break;
    case "Wednesday":
        echo "Midweek day!";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    default:
        echo "Just another day.";
}
```

📌 **Note:** Don’t forget the `break` statement after each `case` to prevent fall-through behavior.
📌 **Note:** Always close PHP conditions with curly braces `{}` for better readability and to avoid bugs.

---

## ✅ 5. Loops in PHP

Loops are used to execute a block of code repeatedly as long as a specified condition is true.

---

### 🔁 1. `while` Loop

The `while` loop executes a block of code **as long as** the condition is true.

```php
$i = 0;
while ($i < 5) {
    echo "The value of i is $i <br>";
    $i++;
}
```

---

### 🔁 2. `do...while` Loop

The `do...while` loop will **always execute the block at least once**, and then check the condition.

```php
$i = 0;
do {
    echo "The value of i is $i <br>";
    $i++;
} while ($i < 5);
```

---

### 🔁 3. `for` Loop

The `for` loop is used when the number of iterations is known.

```php
for ($i = 0; $i < 5; $i++) {
    echo "The value of i is $i <br>";
}
```

---

### 🔁 4. `foreach` Loop

The `foreach` loop works only on arrays and is used to loop through each key/value pair.

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color) {
    echo "Color: $color <br>";
}
```

---

📌 **Summary of Loops**

- `while` → use when condition checking comes first
- `do...while` → at least one run guaranteed
- `for` → when you know how many times to run
- `foreach` → best for arrays

---

### ⚠️😡 Avoid Infinite Loops!

Be careful when using loops, especially `while` and `do...while`.  
If you forget to **update the loop variable** or write the condition incorrectly, the loop may run **forever** and crash your program.

#### ❌ Example of an Infinite Loop (DON’T DO THIS!)

```php
// WARNING: This will cause an infinite loop!
$i = 0;
while ($i < 5) {
    echo "Value: $i <br>";
    // Oops! $i is never incremented 😡
}
```

#### ✅ Corrected Version:

```php
$i = 0;
while ($i < 5) {
    echo "Value: $i <br>";
    $i++; // ✅ Incrementing $i to avoid infinite loop
}
```

---

📌 **Tip:** Always double-check your loop condition and updates to avoid **infinite loops** 🔁😱

---

## ✅ 6. Functions in PHP

Functions help you reuse code and keep it organized.

### 🔹 Creating a Function

You define a function using the `function` keyword.

## 🔧 Function Example Explained

```php
<?php

// ✅ Function to calculate the total of all subject marks
function sumMarks($markArray) {
    $sum = 0;

    // Loop through each mark and add to the sum
    foreach ($markArray as $value) {
        $sum += $value;
    }

    // Return the total
    return $sum;
}

// ✅ Function to calculate the average of all subject marks
function avgMark($markArray) {
    $sum = 0;

    // Add all marks together
    foreach ($markArray as $value) {
        $sum += $value;
    }

    // Return the average (sum divided by count of items)
    return $sum / count($markArray);
}

// ✅ Example usage:
$moomal = [50, 20, 30, 50, 50]; // Array of marks

// Print total and average using function calls
echo "Moomal Total Subject Mark: " . sumMarks($moomal) . "<br/>";
echo "Moomal Average Mark: " . avgMark($moomal);

?>
```

### 🧠 What’s happening?

- `sumMarks($markArray)` — adds up all the values in the array.
- `avgMark($markArray)` — calculates average using total ÷ number of items.

### 💡 Output:

```
Moomal Total Subject Mark: 200
Moomal Average Mark: 40
```

📌 **Tip:** Always reuse logic like this in a function. It makes your code cleaner, easier to maintain, and more powerful when your app grows.

---

Great! Here's a complete section on **Date Functions: Handling Dates in PHP** along with **examples and 3 practice questions**. You can directly add this to your `note.md`.

---

````markdown
---
## 📅 Date Functions: Handling Date in PHP

PHP provides built-in functions to work with dates and times.
---

### 🔹 `date()` Function

Returns the current date/time in a specified format.

```
<?php
echo date("Y-m-d") . "<br>";      // 2025-04-11
echo date("d/m/Y") . "<br>";      // 11/04/2025
echo date("l") . "<br>";          // Friday
echo date("h:i:s A") . "<br>";    // 05:23:45 PM
?>
```
````

📝 Common Format Characters:

- `d` – Day (01 to 31)
- `m` – Month (01 to 12)
- `Y` – Year (4 digits)
- `l` – Day of the week (e.g. Monday)
- `h` – Hour (12-hour format)
- `H` – Hour (24-hour format)
- `i` – Minutes
- `s` – Seconds
- `A` – AM/PM

---

### 🔹 `time()` Function

Returns current Unix timestamp (number of seconds since Jan 1, 1970)

```php
<?php
echo time(); // Example output: 1712841423
?>
```

---

### 🔹 `date_default_timezone_set()`

Sets the default timezone.

```php
<?php
date_default_timezone_set("Asia/Karachi");
echo date("Y-m-d H:i:s");
?>
```

---

### 🔹 `mktime()` Function

Returns the Unix timestamp for a specific date/time.

```php
<?php
$timestamp = mktime(0, 0, 0, 4, 11, 2025);
echo date("Y-m-d", $timestamp); // 2025-04-11
?>
```

---

### 🔹 `strtotime()` Function

Parses a date string into a timestamp.

```php
<?php
$date = strtotime("next Sunday");
echo date("Y-m-d", $date);
?>
```

---

## 📝 Practice Questions for Date Functions

1. Print today’s date in the format `Day, DD Month YYYY` (e.g. Friday, 11 April 2025).
2. Set your timezone to `Asia/Kolkata` and display the current time in 24-hour format.
3. Calculate and display the date 7 days from today.

---

Perfect! Here's a detailed section on **Associative Arrays in PHP** along with how to loop through them using `foreach`, and as always, it includes **3 practice questions**. Ready to be added to your `note.md`!

---

````markdown
---
## 🧩 Associative Arrays in PHP

Associative arrays use **named keys** that you assign to them.
---

### 🔹 Declaring an Associative Array

```php
<?php
$marks = array(
    "Moomal" => 92,
    "Abeer" => 88,
    "Sana" => 76,
    "Ali" => 59
);

echo $marks["Moomal"]; // Outputs: 92
?>
```
````

---

### 🔹 Looping Through Associative Arrays using `foreach`

```
<?php
$students = array(
    "Moomal" => 92,
    "Abeer" => 88,
    "Sana" => 76,
    "Ali" => 59
);

foreach ($students as $name => $score) {
    echo "$name scored $score marks.<br>";
}
?>
```

🗒️ `foreach ($array as $key => $value)` is the syntax for associative arrays.

---

### 📝 Practice Questions for Associative Arrays

1. Create an associative array of 5 countries and their capitals. Use `foreach` to print each.
2. Create a student list with names and grades (A, B, C…) and display the list using `foreach`.
3. Write PHP code using `foreach` to find and print only students who scored more than 80 in a test.

---

## 🧠 Multidimensional Arrays in PHP

Multidimensional arrays are arrays containing one or more arrays inside them.

Useful when you want to organize data in rows and columns (like a table).

---

### 🔹 Example: 2D Array (Array of Arrays)

```
<?php
$students = array(
    array("Moomal", 90, "A"),
    array("Abeer", 82, "B"),
    array("Sana", 70, "C")
);

echo $students[0][0]; // Outputs: Moomal
echo $students[1][1]; // Outputs: 82
?>

```

---

🔹 Looping through Multidimensional Arrays

```
<?php
$students = array(
    array("Moomal", 90, "A"),
    array("Abeer", 82, "B"),
    array("Sana", 70, "C")
);

for ($row = 0; $row < count($students); $row++) {
    echo "Row $row:<br>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo $students[$row][$col] . " ";
    }
    echo "<br>";
}
?>
```

---

🔹 Associative Multidimensional Array

```
<?php
$marks = array(
    "Moomal" => array("Math" => 90, "Science" => 95),
    "Abeer" => array("Math" => 80, "Science" => 85)
);

echo $marks["Moomal"]["Math"]; // 90
?>

```

---

📝 Practice Questions for Multidimensional Arrays
Create a 2D array for 3 employees with name, age, and department. Loop through and display all.

Create an associative multidimensional array of 3 students and their marks in Math and English. Display using foreach.

---

## 🧊 3D Arrays in PHP

A 3D array is an array of arrays **inside** arrays.
Think of it like a **cube** — layers (depth), rows, and columns.

---

### 🔹 Declaring a 3D Array

```
<?php
$info = array(
    array(
        array("A", "B"),
        array("C", "D")
    ),
    array(
        array("E", "F"),
        array("G", "H")
    )
);

// Accessing elements
echo $info[0][0][1]; // Output: B
echo $info[1][1][0]; // Output: G
?>
```

Here:

$info[0] is first layer

$info[0][0] is first row in first layer

$info[0][0][1] is second column in first row of first layer

---

🔹 Looping Through 3D Array

```
<?php
$info = array(
    array(
        array("Apple", "Banana"),
        array("Grapes", "Orange")
    ),
    array(
        array("Dog", "Cat"),
        array("Lion", "Tiger")
    )
);

for ($i = 0; $i < count($info); $i++) {
    for ($j = 0; $j < count($info[$i]); $j++) {
        for ($k = 0; $k < count($info[$i][$j]); $k++) {
            echo $info[$i][$j][$k] . " ";
        }
        echo "<br>";
    }
    echo "<hr>";
}
?>
```

📝 Practice Questions for 3D Arrays
Create a 3D array to store 2 classes, each with 2 students and their 2 subjects.

Make a 3D array of a product warehouse with 2 floors, 2 aisles per floor, and 2 items per aisle. Print all.

Write code to count total elements inside a 3D array.

---

```markdown
# Scope, Local and Global Variables in PHP

## Key Concepts:

- **Global Variables**: Defined outside functions and accessible globally.
- **Local Variables**: Defined within functions, accessible only within that function.
- **`global` Keyword**: Used inside functions to access global variables.
- **`$GLOBALS` Array**: Superglobal array in PHP that stores all global variables.
```

## Example Code:

```
<?php

$a = 98; // Global variable
$b = 9;  // Global variable

function printValue() {
    // Access global variables inside function
    global $a, $b;

    $a = 100;   // Modifying global variable
    $b = 1000;  // Modifying global variable

    echo "<br> The value of variable a is $a and b is $b";
}

echo "Before function call: a = $a, b = $b";

printValue();

echo "<br>After function call: a = $a, b = $b";

// Using $GLOBALS array to access global variables
echo "<br>Using \$GLOBALS: a = " . $GLOBALS['a'] . ", b = " . $GLOBALS['b'];
?>
```

```markdown
## Output (Expected):

Before function call: a = 98, b = 9
The value of variable a is 100 and b is 1000
After function call: a = 100, b = 1000
Using $GLOBALS: a = 100, b = 1000
```

## Summary:

- Use `global $var;` to modify global variables inside a function.
- Use `$GLOBALS['var']` to access global variables directly.
- Changes made using either method persist outside the function.

---

Sure! Here are **simple and easy-to-understand notes** on **PHP Forms: GET & POST Requests**, perfect for quick revision and beginners:

---

````markdown
# 📄 PHP Forms: GET and POST Methods

In PHP, you use **GET** and **POST** to get data from a form.

---

## 🔹 1. GET Method

📌 **What is it?**

- Sends form data through the URL
- You can **see the data in the browser’s address bar**

📌 **Best for:**

- Search bars
- Filter options
- Non-sensitive info

📌 **Example:**

```html
<form action="get.php" method="GET">
  Name: <input type="text" name="name" /><br />
  <input type="submit" />
</form>
```
````

```php
<?php
echo "Your name is " . $_GET['name'];
?>
```

📝 **URL looks like:**  
`get.php?name=John`

---

## 🔹 2. POST Method

📌 **What is it?**

- Sends data **securely in the background**
- The data is **not shown** in the URL

📌 **Best for:**

- Login forms
- Registration
- Sensitive info like passwords

📌 **Example:**

```html
<form action="post.php" method="POST">
  Username: <input type="text" name="username" /><br />
  <input type="submit" />
</form>
```

```php
<?php
echo "Hello " . $_POST['username'];
?>
```

---

## 🔸 3. GET vs POST (Easy Table)

| Feature        | GET                 | POST                 |
| -------------- | ------------------- | -------------------- |
| Data in URL?   | Yes                 | No                   |
| Secure?        | ❌ Not secure       | ✅ More secure       |
| Use for login? | ❌ No               | ✅ Yes               |
| Bookmarkable?  | ✅ Yes              | ❌ No                |
| Limit on size? | ✅ Yes (small data) | ✅ No (can be large) |

---

## ✅ 4. Extra Tips

- Use `$_GET['name']` or `$_POST['name']` to get data
- Always validate user input
- Use `method="POST"` when sending passwords
- Use HTTPS for extra security

---

🎓 **Summary:**

- Use `GET` for simple, visible data
- Use `POST` for secure, hidden data

```
> ✨ Keep practicing and exploring PHP – every little experiment helps you grow as a developer!
```
