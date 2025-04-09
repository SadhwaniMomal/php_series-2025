<?php
echo "<h2>✅ 3. Data Types in PHP</h2>";
echo "<hr/>";

echo "<h4>Q1: Create variables of all 7 data types and print them using var_dump(). </h4>";

echo "<h4>Example Code:</h4>";
echo '<pre><code>&lt;?php
$name = &quot;string&quot;;
$age = &quot;24&quot;;
$income = &quot;1400.4&quot;;
$isAavible = true;
$friends = null;
$arr = [&quot;php&quot;, &quot;is&quot;, &quot;user&quot;, &quot;friendly&quot;, &quot;language&quot;];

// object (example not defined here)

echo var_dump($name);
echo &quot;&lt;br&gt;&quot;;
echo var_dump($age);
echo &quot;&lt;br&gt;&quot;;
echo var_dump($income);
echo &quot;&lt;br&gt;&quot;;
echo var_dump($isAavible);
echo &quot;&lt;br&gt;&quot;;
echo var_dump($friends);
echo &quot;&lt;br&gt;&quot;;
echo var_dump($arr);
echo &quot;&lt;br&gt;&quot;;
echo &quot;&lt;hr/&gt;&quot;;
?&gt;</code></pre>';

echo '<h4 style = "color:red">Output Code:</h4>';
$name = "string";
$age = "24";
$income = "1400.4";
$isAavible = true;
$friends = null;
$arr = ["php" , "is" , "user" , "friendly" , "language"];
//object

echo var_dump($name);
echo "<br>";
echo var_dump($age);
echo "<br>";
echo var_dump($income);
echo "<br>";
echo var_dump($isAavible);
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo var_dump($arr);
echo "<br>";

echo "<hr/>";

echo "<h4>Q2: Write a PHP code where a variable changes from a string to an integer. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$digit = &quot;1234&quot;;

echo &quot;Type before conversion: &quot;;
gettype($digit);
echo &quot;&lt;br&gt;&quot;;

$digit = (int)$digit;

echo &quot;Type after conversion: &quot;;
gettype($digit);
?&gt;</code></pre>';


echo '<h4 style = "color:red">Output Code:</h4>';
$digit = "1234";
echo "Type before conversion: ". " " . gettype($digit) . " " . $digit;
echo "<br>";
$digit = (int)$digit;
echo "Type after conversion:". " "  . gettype($digit) . " " . $digit;

echo "<hr/>";

echo "<h4>Q3: Create an array of 5 programming languages and print the second one. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$arr = [&quot;HTML&quot;, &quot;CSS&quot;, &quot;TAILWIND&quot;, &quot;JAVASCRIPT&quot;, &quot;PHP&quot;];
echo ($arr[1]);
?&gt;</code></pre>';



echo '<h4 style = "color:red">Output Code:</h4>';
$arr = ["HTML", "CSS" , "TAILWIND" , "JAVASCRIPT" , "PHP"];
echo ($arr[1]);


?>