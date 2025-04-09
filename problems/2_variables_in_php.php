<?php
echo "<h3> ✅ 2. Variables in PHP </h3>";
echo "<hr/>";

echo "<h4> Q1: Create a variable to store your age and print: &quot I am X years old. &quot </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php  
$myage = 24;
echo &quot;I am $myage years old.&quot;;
?&gt;</code></pre>';


echo '<h4 style="color:red">Output Code:</h4>';

$myage = 24;
echo "I am $myage years old.";

echo "<hr/>";


echo "<h4> Q2: Define a variable for your city and print: &quot I live in CITY. &quot </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php  
$mycity = &quot Karachi &quot;
echo &quot I live in $mycity city &quot;
?&gt; <code> </pre>';

echo '<h4 style="color:red">Output Code:</h4>';

$mycity = "Karachi";
echo "I live in $mycity city";

echo "<hr/>";


echo "<h4> Q3: Swap values between two variables and print them.</h4>";


echo "<h4>Example Code:</h4>";
echo '<pre><code>&lt;?php
$value1 = &quot;World&quot;;
$value2 = &quot;PHP is best in&quot;;

$temp = $value1;
$value1 = $value2;
$value2 = $temp;

echo &quot;&lt;p&gt;Swap Variable Value!!&lt;/p&gt;&quot;;
echo $value1;
echo &quot;&lt;br/&gt;&quot;;
echo $value2;
?&gt;</code></pre>';

echo '<h4 style="color:red">Output Code:</h4>';

$value1 = "World";
$value2 = "php is best in ";

$value2  = $value1;

echo "<p>Swap Variable Value!!</p>";
echo $value1;
echo "<br/>";
echo $value2;


echo "<hr/>";


?>