<?php

echo "<h3>📝 PHP Date Function Practice Questions</h3>";

echo "<hr/>";

echo "<h3>✅ 1. Print Current Date</h3>";

echo "<h3>1. Write PHP code to print the current date in the format `YYYY-MM-DD` using the `date()` function.</h3>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php

    $date = date("Y-m-d");
    echo $date;

?&gt;</code></pre>';

echo '<h4 style = "color:red">Output Code:</h4>';

$date = date('(Y-m-d)');

echo $date;

echo "<hr/>";

echo "<h3>✅ 2. Display Full Date and Time </h3>";

echo "<h3>1. Print the current date and time in the format: `Monday, April 11, 2025 - 04:30 PM`.</h3>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php

    $currentDate = date(\'l F d, Y - g:i A\');
    echo $currentDate;

?&gt;</code></pre>';

echo '<h4 style = "color:red">Output Code:</h4>';

$currentDate = date('l F d, Y - g:i A');

echo $currentDate;

echo "<hr/>";

echo "<h3>✅ 3. Add Days to Current Date </h3>";

echo "<h3>1. Write a PHP script that adds 7 days to the current date and prints the new date.</h3>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$curr_date = date("Y-m-d");

// Add 7 days
$new_Date = date("Y-m-d", strtotime($curr_date . "+ 7 days"));

echo "Current Date = " . $curr_date . "&lt;br&gt;&lt;br&gt;";
echo "New Date = " . $new_Date;
?&gt;</code></pre>';


echo '<h4 style = "color:red">Output Code:</h4>';

$curr_date = date('Y-m-d');


// add 7 day

$new_Date = date("Y-m-d", strtotime($curr_date .  '+ 7 days'));

echo "Current Date = " . " " . $curr_date . "<br> <br>";

echo "New Date = " . " " . $new_Date;


echo "<hr/>";

echo "<h3>✅ 4. Calculate Age from Birthdate </h3>";

echo "<h3>  1.Write a function `calculateAge($birthdate)` that takes a date of birth in `YYYY-MM-DD` format and returns the age in years.</h3>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
function calculateAge($birthdate){
  $birthdate = new DateTime($birthdate);
  $today = new DateTime("today");
  $age = $birthdate-&gt;diff($today)-&gt;y;
  return $age;
}

echo calculateAge("2000-06-17");
?&gt;</code></pre>';


echo '<h4 style = "color:red">Output Code:</h4>';

function calculateAge($birthdate){
  $birthdate = new DateTime($birthdate);
  $today = new DateTime('today');
  $age = $birthdate -> diff($today) -> y;
  return $age;
}

echo calculateAge("2000-06-17");


echo "<hr/>";


echo "<h3>✅  5. Check if a Date is in the Past or Future </h3>";

echo "<h3>  1. Write a function that checks whether a given date (string) is in the past, present, or future compared to the current date.</h3>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
function check_Date($date) {
    $currentDate = new DateTime("today");
    $givenDate = new DateTime($date);

    if ($givenDate &lt; $currentDate) {
        return "The given date is in the past.";
    } elseif ($givenDate &gt; $currentDate) {
        return "The given date is in the future.";
    } else {
        return "The given date is today.";
    }
}

// Example usage
echo check_Date("2025-04-10"); // Output depends on the current date
?&gt;</code></pre>';


echo '<h4 style = "color:red">Output Code:</h4>';


function check_Date($date) {
    $currentDate = new DateTime('today');
    $givenDate = new DateTime($date);

    if ($givenDate < $currentDate) {
        return "The given date is in the past.";
    } elseif ($givenDate > $currentDate) {
        return "The given date is in the future.";
    } else {
        return "The given date is today.";
    }
}

// Example usage
echo check_Date("2025-04-10"); // Output depends on the current date

echo "<hr/>";




?>