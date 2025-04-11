<?php

    echo "<h3>📝 Basic PHP Function Practice Questions</h3>";

    echo "<hr>";

    echo "<h3>✅ 1. Simple Function in PHP</h3>";
    // Question : NO : 1
    echo "<h4>Q1 : Write a function greet() that takes a name as an argument and prints: \"Hello, [Name]!\" </h4>";

    echo "<h4>Example Code: <h5>";

      echo '<pre><code>&lt;?php

      function greet($name) {
          return "Hello $name";
      }

      echo greet("Moomal Sadhwani");
      
?&gt;</code></pre>';

    echo '<h4 style = "color:red">Output Code: <h5>';

      // $name = "MOOMAL";
      function greet($name) {
        return "Hello $name" ;
      }

      echo  greet('Moomal Sadhwani');

    echo "<hr>";


    echo "<h3>✅  2. Function with Return Value</h3>";
    // Question : NO : 1
    echo "<h4>Q1 : Write a function add() that takes two numbers as arguments, adds them, and returns the result.</h4>";

    echo "<h4>Example Code: <h5>";

      echo '<pre><code>
      &lt;?php

        $num1 = 2;
        $num2 = 4;

        function add($num1, $num2) {
            return "The Result Two Numbers add = " . ($num1 + $num2);
        }

        echo add($num1, $num2);
      ?&gt;</code></pre>';

    echo '<h4 style = "color:red">Output Code: <h5>';

    $num1 = 2;
    $num2 = 4;

    function add($num1 , $num2){

      return "The Result Two Numbers add = " . $num1 + $num2 ;

    }

    echo add($num1  , $num2  ) ;

    echo "<hr>";



    echo "<h3>✅ 3. Function with Default Parameters</h3>";
    
    // Question : NO : 1
    echo "<h4>Q1 : Write a function multiply() that takes two numbers as arguments and multiplies them. Set the default value of the second parameter to 2.</h4>";

    echo "<h4>Example Code: <h5>";

    echo '<pre><code>&lt;?php
        $num3 = 4;
        $default_Num = 2;

        function multiply($num3, $default_Num) {
            return "The two numbers are multiplied, but the second number is a default value. &lt;br&gt;&lt;br&gt;" . ($num3 * $default_Num);
        }

        echo multiply($num3, $default_Num);
?&gt;</code></pre>';

    echo '<h4 style = "color:red">Output Code: <h5>';
    
    $num3 = 4;
    $default_Num = 2;

    function multiply($num3 , $default_Num) {

      return "The two numbers are multiplied, but the second number is a default value. <br> <br>" . $num3 * $default_Num;

    }

    echo multiply($num3 , $default_Num);
    
    echo "<hr>";



    echo "<h3>✅ 4. Function with Variable Number of Arguments</h3>";
    // Question : NO : 1
    echo "<h4>Q1 : Write a function sumNumbers() that takes any number of arguments and returns the sum of all numbers. Use func_num_args() and func_get_args().</h4>";
   
    echo "<h4>Example Code: <h5>";


      echo '<pre><code>&lt;?php

      // func_num_args()

      function num_arg() {
          return "The number of arguments is: " . func_num_args();
      }

      echo num_arg(1, 3, 4); // Pass args
      echo "&lt;br&gt;";

      // func_get_arg()

      function get_arg() {
          return "The third argument is: " . func_get_arg(2);
      }

      echo get_arg(1, 3, 4, 6); // Pass args
      echo "&lt;br&gt;";

      // Using both func_num_args and func_get_arg

      function get_num_arg() {
          $number_arg = func_num_args();
          echo "The number of arguments is: " . $number_arg . "  ";
          
          if ($number_arg >= 4) {
              echo "Get the second argument: " . func_get_arg(1);
          }
      }

      echo get_num_arg(1, 2, 3, 5);


  ?&gt;</code></pre>';

   
    echo '<h4 style = "color:red">Output Code: <h5>';

      // func_num_args()

      function num_arg(){
        return "The number of arguments is: " . func_num_args();
      }

      echo num_arg(1, 3, 4);

      echo "<br>";

      // func_get_arg()

      function get_arg(){
        return "The third argument is: " . func_get_arg(2);
      }

      echo get_arg(1, 3, 4, 6);

      echo "<br>";

      // Using both func_num_args and func_get_arg

      function get_num_arg(){
        $number_arg = func_num_args();

        echo "The number of arguments is: " . $number_arg . "  ";

        if ($number_arg >= 4) {
          echo "Get the second argument: " . func_get_arg(1);
        }
      }

      echo get_num_arg(1, 2, 3, 5);



    echo "<hr>";




    echo "<h3>✅  5. Recursive Function</h3>";
    // Question : NO : 1
    echo "<h4>Q1 : Write a recursive function factorial() that calculates the factorial of a given number. For example, factorial(5) should return 120.</h4>";

    echo "<h4>Example Code: <h5>";
    
    echo '<pre><code>&lt;?php
// Iterative approach
$fN = 5; 
$fac = 1;

for ($i = 1; $i <= $fN; $i++) { 
    // Multiply the current value of $fac by $i
    $fac = $fac * $i;
}

echo $fac; // Output: 120
echo "&lt;br&gt;";

// Recursive approach
function factorial($n) {
    // Base case: factorial of 0 or 1 is 1
    if ($n == 0 || $n == 1) {
        return 1;
    }
    // Recursive case
    else {
        return $n * factorial($n - 1);
    }
}

// Example usage
echo factorial(5); // Output: 120
?&gt;</code></pre>';
    
    echo '<h4 style = "color:red">Output Code: <h5>';

    $fN = 5; 
    $fac = 1;

    for ($i=1; $i <= $fN ; $i++) { 
      # code...
      $fac = $fac * $i ;
      
    }
    echo "Iterative approach : " . $fac;


    echo "<br>";

    function factorial($n) {
      // Base case: factorial of 0 or 1 is 1
      if ($n == 0 || $n == 1) {
          return 1;
      }
      // Recursive case
      else {
          return $n * factorial($n - 1);
      }
  }
  
  // Example usage
  echo  "Recursive approach : " . factorial(5);  // Output: 120


    echo "<hr>";


?>