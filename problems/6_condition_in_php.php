<?php
echo "<h2>✅ 6. Conditional Statements</h2>";
echo "<hr/>";


// Question 1:
echo "<h4> Q1 : Write an if condition to check if a number is positive.</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$postive_Num = 4;
if($postive_Num % 2 == 0 ){
  echo "This is positive Number!";
}
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$postive_Num = 4 ;
if($postive_Num % 2 == 0 ){
  echo "This is positive Number!";
}
echo "<hr/>";

// Question 2:
echo "<h4> Q2 : Use if...else to check if a student passed (marks >= 50) or failed..</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$mark = 10;
if($mark &gt;= 50 ){
  echo "Passed!!!!";
}else{
  echo "Failed....";
}
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';

$mark = 10;
if($mark >= 50 ){
  echo "Passed!!!!";
}else{
  echo "Failed....";
}

echo "<hr/>";

// Question 3:
echo "<h4> Q3 : Create an if...elseif...else block to categorize age: <br>
Under 13: Child <br>
13–19: Teenager <br>
20 and above: Adult</h4>";

echo "<h4>Example Code:</h4>";

echo '<h4 style = "color : red ">Output Code:</h4>';

$age = 13 ;

if($age < 13){
  echo "Your Are Child..";
} elseif($age >= 13 && $age <= 19){
  echo "Your Are Teenager..";
}else{
  echo "Your Are Adult...";
}

echo "<hr/>";

// Question 4:
echo "<h4> Q4 : Use a switch statement to print the name of the day based on a number <br>
(1 = Monday, 2 = Tuesday, ..., 7 = Sunday).</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$dayNumber = 3; // You can change this number to test different days

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number";
}
?&gt;</code></pre>';

echo '<h4 style = "color : red ">Output Code:</h4>';


$dayNumber = 3; // You can change this number to test different days

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number";
}

echo "<hr/>";

?>