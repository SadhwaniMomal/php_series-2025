# 📝 Practice Questions for PHP Topics

---

#### ✅ 1. Print in PHP

1. Write PHP code to print your full name using `echo`.
2. Print a sentence using both double quotes and single quotes.
3. Output a message that includes a line break using `<br>`.

---

#### ✅ 2. Variables in PHP

1. Create a variable to store your age and print: `"I am X years old."`
2. Define a variable for your city and print: `"I live in CITY."`
3. Swap values between two variables and print them.

---

#### ✅ 3. Data Types in PHP

1. Create variables of all 7 data types and print them using `var_dump()`.
2. Write a PHP code where a variable changes from a string to an integer.
3. Create an array of 5 programming languages and print the second one.

---

#### ✅ 4. String Functions

1. Count how many characters are in your full name using `strlen()`.
2. Use `str_replace()` to replace `"bad"` with `"good"` in the sentence `"This is a bad example."`
3. Reverse the string `"MoomalDevX"` using `strrev()` and print it.

---

#### ✅ 5. Operators in PHP

###### Arithmetic Operators

1. Add two numbers and print the result.
2. Calculate the square of 8 using the exponent operator.
3. Divide two numbers and print the remainder using `%`.

###### Assignment Operators

1. Set a variable to 50, then add 25 using `+=` and print the result.
2. Multiply a number by 5 using `*=` and show the output.
3. Subtract 10 from a variable using `-=`.

###### Comparison Operators

1. Compare two numbers using `==` and print the result with `var_dump()`.
2. Check if one number is less than another.
3. Compare if two values are not equal using `!=`.

###### Logical Operators

1. Write a condition using `&&` that checks if age is over 18 and under 60.
2. Use `||` to check if a number is either less than 10 or greater than 100.
3. Use `!` to reverse the boolean value `true`.

---

#### ✅ 6. Conditional Statements

1. Write an `if` condition to check if a number is positive.
2. Use `if...else` to check if a student passed (marks >= 50) or failed.
3. Create an `if...elseif...else` block to categorize age:
   - Under 13: Child
   - 13–19: Teenager
   - 20 and above: Adult
4. Use a `switch` statement to print the name of the day based on a number (1 = Monday, 2 = Tuesday, ..., 7 = Sunday).

---

#### ✅ 7. Loops in PHP

1. Use a `while` loop to print numbers 1 to 5.
2. Write a `do...while` loop to print numbers 1 to 5.
3. Use a `for` loop to print the even numbers from 2 to 10.
4. Iterate through an array of fruits using a `foreach` loop and print each fruit.
5. Write a nested loop that prints a simple pattern:

---

# 📝 Basic PHP Function Practice Questions

#### ✅ 1. Simple Function in PHP

1. Write a function `greet()` that takes a name as an argument and prints: `"Hello, [Name]!"`.

---

#### ✅ 2. Function with Return Value

1. Write a function `add()` that takes two numbers as arguments, adds them, and returns the result.

---

#### ✅ 3. Function with Default Parameters

1. Write a function `multiply()` that takes two numbers as arguments and multiplies them. Set the default value of the second parameter to `2`.

---

#### ✅ 4. Function with Variable Number of Arguments

1. Write a function `sumNumbers()` that takes any number of arguments and returns the sum of all numbers. Use `func_num_args()` and `func_get_args()`.

---

#### ✅ 5. Recursive Function

1. Write a recursive function `factorial()` that calculates the factorial of a given number. For example, `factorial(5)` should return `120`.

# 📝 PHP Date Function Practice Questions

#### ✅ 1. Print Current Date

1. Write PHP code to print the current date in the format `YYYY-MM-DD` using the `date()` function.

---

#### ✅ 2. Display Full Date and Time

1. Print the current date and time in the format: `Monday, April 11, 2025 - 04:30 PM`.

---

#### ✅ 3. Add Days to Current Date

1. Write a PHP script that adds 7 days to the current date and prints the new date.

---

###### ✅ 4. Calculate Age from Birthdate

1. Write a function `calculateAge($birthdate)` that takes a date of birth in `YYYY-MM-DD` format and returns the age in years.

---

#### ✅ 5. Check if a Date is in the Past or Future

1. Write a function that checks whether a given date (string) is in the past, present, or future compared to the current date.

---

# 📝 PHP Associative Array Practice Questions

### ✅ 1. Create and Print an Associative Array

1. Create an associative array to store a person's name, age, and city. Print each value using its key.

---

### ✅ 2. Loop Through Associative Array

1. Write a function `printDetails()` that takes an associative array and prints both keys and values using a `foreach` loop.

---

### ✅ 3. Update a Value in Associative Array

1. Create an associative array with book titles as keys and authors as values. Change the author of one book and print the updated array.

---

### ✅ 4. Check if Key Exists

1. Write a script to check if a specific key (e.g., "email") exists in an associative array using `array_key_exists()`.

---

### ✅ 5. Count Items and Print All Keys

1. Given an associative array of products and their prices, count how many items are in the array, and print all the product names using `array_keys()`.

---

# 📝 PHP Multidimensional Array (2D & 3D) Practice Questions with Output Examples

---

### ✅ 1. Create a 2D Array and Print Elements

**Task:**  
Create a 2D array to store student names and their scores in two subjects. Print each student's name and scores using nested loops.

**Example Output:**

```
Student: Ali
Math: 85
English: 90

Student: Sana
Math: 78
English: 88
```

---

### ✅ 2. Access Specific Element in 2D Array

**Task:**  
Using a 2D array of cities and countries, print the country of a specific city.

**Example Output:**

```
The country of Paris is France.
```

---

### ✅ 3. Create a 3D Array and Access a Value

**Task:**  
Create a 3D array to store departments, teams, and team members. Access and print the name of a specific team member.

**Example Output:**

```
Team member from IT > Backend Team: Sarah
```

---

### ✅ 4. Loop Through a 2D Array of Products

**Task:**  
Create a 2D array where each element is an associative array representing a product (with `name`, `price`, `stock`). Loop through the array and print details of each product.

**Example Output:**

```
Product: Laptop
Price: $1000
Stock: 15

Product: Mouse
Price: $25
Stock: 100
```

---

### ✅ 5. Count Total Elements in a 3D Array

**Task:**  
Create a 3D array and write PHP code to count the total number of values inside it using nested loops.

**Example Output:**

```
Total elements in 3D array: 8
```

---
