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

```

This version gives:

- Real PHP examples
- Output hints
- Use of `var_dump()` for booleans
- Clean formatting

Let me know if you'd like to add **increment/decrement**, **string operators**, or **bitwise operators** too.
---

> ✨ Keep practicing and exploring PHP – every little experiment helps you grow as a developer!

---
```
