<?php

echo "<h3>✅ 7. Loops in PHP </h3>";

echo "<hr/>";

// Question : 1
echo "<h4> Q1 : Use a while loop to print numbers 1 to 5.</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$i = 0; 
while($i &lt;= 5){
  echo $i + 1 ; 
  echo "&lt;br/&gt;";
  $i++;
}
?&gt;</code></pre>';

echo '<h4 style = "color :red " >Output Code:</h4>';

$i = 1; 
while($i <= 5){
  echo $i  ; 
  echo "<br/>";
  $i++;
}

echo "<hr/>";

// Question : 2
echo "<h4> Q2 : Write a do...while loop to print numbers 1 to 5.</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$i = 1;
do {
  echo $i;
  echo "&lt;br/&gt;";
  $i++;
} while ($i &lt;= 5);
?&gt;</code></pre>';

echo '<h4 style = "color :red " >Output Code:</h4>';

$i = 1;
do{
  echo $i;
  echo "<br/>";
  $i++;
}while($i <= 5);

echo "<hr/>";

// Question : 3
echo "<h4> Q3 : Use a for loop to print the even numbers from 2 to 10.</h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
for ($i = 2; $i &lt;= 10; $i++) {
  if ($i % 2 == 0) {
    echo "Even Numbers" . " " . $i . "&lt;br/&gt;";
  }
}
?&gt;</code></pre>';

echo '<h4 style = "color :red " >Output Code:</h4>';

for ($i= 2 ; $i <= 10  ; $i++  ) { 
  # code...
  if($i % 2 == 0){
    echo "Even Numbers" . " " . $i . "<br/>";
  
  }
}

echo "<hr/>";

// Question : 4
echo "<h4> Q4 : Iterate through an array of fruits using a foreach loop and print each fruit. </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
$arrFruit = ["Apple", "Mango", "PineApple", "Peach"];

foreach ($arrFruit as $value) {
  echo $value . "&lt;br/&gt;";
}
?&gt;</code></pre>';

echo '<h4 style = "color :red " >Output Code:</h4>';

$arrFruit = ["Apple" , "Mango" , "PineApple" , "Peach"];

foreach ($arrFruit as $value) {
  # code...
  echo  $value . "<br/>";
}

echo "<hr/>";

// Question : 5
echo "<h4> Q5 : Write a nested loop that prints a simple pattern: </h4>";

echo "<h4>Example Code:</h4>";

echo '<pre><code>&lt;?php
for ($r = 1; $r &lt;= 5; $r++) {
  for ($star = 1; $star &lt;= $r; $star++) {
    echo "*";
  }
  echo "&lt;br&gt;";
}
?&gt;</code></pre>';

echo '<h4 style = "color :red " >Output Code:</h4>';

echo "<h5>Pattern 1 :</h5>";
for($r = 1 ; $r <= 5 ; $r++){
  for ($star = 1 ; $star  <= $r  ; $star++) { 
    # code...
    echo "*";
  }

  echo "<br>";
} 


echo "<hr/>";


?>