<?php
echo '<h3>✅ 5. Operators in PHP</h3>';
echo "<hr/>";

// Arithmetic Operators

echo '<h3 style = "color:green"> 1. Arithmetic Operators </h3>';

// Question1
echo "<h4> Q1: Add two numbers and print the result. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num1 = 20;
$num2 = 10;

echo &quot;num1 = $num1&quot; ;
echo &quot;&lt;br/&gt;&quot;;

echo &quot;num2 = $num2&quot; ;
echo &quot;&lt;br/&gt;&quot;;

echo &quot;Result = &quot; . ($num1 + $num2);
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num1 = 20;
$num2 = 10;

echo "num1 = $num1" ;
echo "<br/>";

echo "num1 = $num2" ;
echo "<br/>";

echo "Result = " . " " . $num1 + $num2 ;

echo "<hr/>";

// Question 2:
echo "<h4> Q2: Calculate the square of 8 using the exponent operator. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num1 = 8; // Base
$num2 = 2; // Exponent
$Result = $num1 ** $num2; // 8 raised to the power of 2
echo $Result; // Output: 64
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num1 = 8; 
$num2 = 2; 
$Result = $num1 ** $num2; 
echo $Result; 

echo "<hr/>";

// Question 3:
echo "<h4> Q3: Divide two numbers and print the remainder using %. </h4>";
echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num4 = 4;
$num5 = 6;

echo $num5 % $num4; // Output: 2
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';
$num4 = 4;
$num5 = 6;

echo $num5 % $num4;
echo "<hr/>";

// Assignment Operators

echo '<h3 style = "color:green"> 2. Assignment Operators </h3>';

//Question 1:
echo "<h4> Q1: Set a variable to 50, then add 25 using += and print the result </h4>";
echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num6 = 50;
echo $num6 += 25; // Output: 75
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num6 = 50;
echo $num6 += 25;
echo "<hr/>";

//Question 2:
echo "<h4> Q2: Multiply a number by 5 using *= and show the output. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num7 = 10;
echo $num7 *= 5; // Output: 50
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num7 = 10;
echo $num7 *= 5;

echo "<hr/>";

//Question 3:
echo "<h4> Q3: Subtract 10 from a variable using -=. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num8 = 50;
echo $num8 -= 10; // Output: 40
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num8 = 50;
echo  $num8 -= 10;
echo "<hr/>";

// Comparison Operators

echo '<h3 style = "color:green"> 3. Comparison Operators</h3>';
//Question 1:
echo "<h4> Q1: Compare two numbers using == and print the result with var_dump().</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$num9 = 11;
$num10 = 11;

echo var_dump($num9 == $num10); // Output: bool(true)
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$num9 = 11;
$num10 = 11;

echo var_dump($num9 == $num10);

echo "<hr/>";

//Question 2:
echo "<h4> Q2: Check if one number is less than another. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$x = 12;
$y = 20;

echo $x &lt; $y; 
echo &quot;&lt;br/&gt;&quot;;
echo var_dump($x &lt; $y); // Output: bool(true)
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$x = 12;
$y = 20;

echo $x < $y; 
echo "<br/>";
echo var_dump($x < $y);

echo "<hr/>";

//Question 3:
echo "<h4> Q3: Compare if two values are not equal using !=. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$a =  10;
$b =  8;

echo $a != $b;
echo &quot;&lt;br/&gt;&quot;;
echo var_dump($a != $b); // Output: bool(true)
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$a =  10;
$b =  8;

echo $a != $b;
echo "<br/>";
echo var_dump($a != $b);

echo "<hr/>";


// Logical Operators
echo '<h3 style = "color:green"> 4. Logical Operators</h3>';

echo "<h4> Q1: Write a condition using && that checks if age is over 18 and under 60.</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$age = 18;

if ($age &gt; 18 &amp;&amp; $age &lt; 60) {
  echo "You are valid for driving";
} else {
  echo "You are not valid for driving";
}
?&gt;</code></pre>';


echo '<h4 style = "color : red ">Output Code:</h4>';

$age = 18; 

if ($age > 18 && $age < 60) {
  echo "You are valid for driving";
} else {
  echo "You are not valid for driving";
}

echo "<hr/>";

echo "<h4> Q2: Use || to check if a number is either less than 10 or greater than 100. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$age = 105;

if ($age &lt; 18 || $age &gt; 100) {
    echo "You are not eligible to register.";
} else {
    echo "Welcome! You are eligible.";
}
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$age = 105;

if ($age < 18 || $age > 100) {
    echo "You are not eligible to register.";
} else {
    echo "Welcome! You are eligible.";
}

echo "<hr/>";

echo "<h4> Q3: Use ! to reverse the boolean value true. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$flag = true;

if (! $flag) {
  echo "Flag is false.";
} else {
  echo "Flag is true.";
}
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$flag = true;

if (! $flag) {
  echo "Flag is false.";
} else {
  echo "Flag is true.";
}

?>