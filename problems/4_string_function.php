<?php
echo "<h3>✅ 4. String Functions</h3>";
echo "<hr/>";

echo "<h4>Q1: Count how many characters are in your full name using strlen(). </h4>";
echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$name = &quot;MoomalSadhwani&quot;;
echo &quot;$name = &quot; . &quot; &quot; . strlen($name);
?&gt;</code></pre>';

echo '<h4 style = "color:red">Output Code:</h4>';

$name = "MoomalSadhwani";
echo  "$name = ". " " .  strlen($name);

echo "<hr/>";

echo "<h4>Q2:  Use str_replace() to replace &quot bad &quot  with &quot good &quot  in the sentence &quot This is a bad example. &quot  </h4>";
echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$sentence = &quot;This is a bad &quot;;
echo $sentence . &quot; &quot; . &quot;&lt;br/&gt;&quot; . str_replace(&quot;bad&quot;, &quot;Good&quot;, $sentence);
?&gt;</code></pre>';


echo '<h4 style = "color:red">Output Code:</h4>';
$sentence = "This is a bad ";
echo $sentence . " " . "<br/>" . str_replace("bad", "Good" , $sentence);

echo "<hr/>";

echo "<h4>Q3: Reverse the string &quot MoomalDevX &quot using strrev() and print it. </h4>";
echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$namer  = &quot;MoomalDevX&quot;;
echo $namer . &quot; &quot; . &quot;&lt;br/&gt;&quot; . strrev($namer);
?&gt;</code></pre>';

echo '<h4 style = "color:red">Output Code:</h4>';
$namer  = "MoomalDevX";
echo $namer . " " . "<br/>" . strrev($namer);


echo "<hr/>";

?>