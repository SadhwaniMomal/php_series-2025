<?php

  echo "<h3>📝 PHP Associative Array Practice Questions<h3/>";
  echo "<hr>";


  echo "<h3>✅ 1. Create and Print an Associative Array<h3/>";

      echo "<h4>1. Create an associative array to store a person's name, age, and city. Print each value using its key. <h4/>";

      echo "<h4>Exmaple Code:</h4>";

      echo "<pre><code>
      &lt;?php
      \$person = array('Name' => 'MoomalDevX', 'age' => 24, 'city' => 'hyderabad');
      
      foreach (\$person as \$key => \$value) {
          echo \$key . \": \" . \$value . \"&lt;br&gt;\";
      }
      ?&gt;
      </code></pre>";
      
      echo '<h4 style = "color:red">Output Code: <h4/>';
      
      $person = array('Name '  => ' MoomalDevX', 'age' => 24 , "city" => "hyderabad"  );

      foreach ($person as $key => $value) {
        # code...
        echo $key . ": " . $value  . "<br>";
      }
  
      echo "<hr>";
  
  echo "<h3>✅ 2. Loop Through Associative Array<h3/>";
    
    echo "<h4>1. Write a function `printDetails()` that takes an associative array and prints both keys and values using a `foreach` loop.</h4>";

    echo "<h4>Exmaple Code:</h4>";
    
    echo "<pre><code>

      function printDetails(\$data){
          \$dataDetail = \"\"; // Initialize as empty string

          foreach (\$data as \$key => \$value) {
              \$dataDetail .= \$key . \" : \"  . \$value . \"&lt;br&gt;\"; // Concatenate each line
          }

          return \$dataDetail;
      }

      \$data = ['name' => 'moomal'];

      echo printDetails(\$data);

      </code></pre>";


    echo '<h4 style = "color:red">Output Code: <h3/>';

    function printDetails($data){
      foreach ($data as $key => $value) {
        # code...  
        $dataDetail = $key . " : "  . $value . "<br>";

      }
      return $dataDetail;
    }

    $data = ['name' => 'moomal'];

    echo  printDetails($data);

  
    echo "<hr>";
  
  echo "<h3>✅ 3. Update a Value in Associative Array<h3/>";
  
  echo "<h4>1. Create an associative array with book titles as keys and authors as values. Change the author of one book and print the updated array.<h4/>";

  echo "<h4>Exmaple Code:</h4>";
  echo "<pre><code>
    \$book = [
        \"Book Name\" => \"Rich Dad and Poor Dad\",
        \"1997\" => \"Robert Kiyosaki\",
    ];

    \$book[1997] = \"Robert Kiyosaki, Sharon Lechter\"; // Using a numeric key

    foreach (\$book as \$key => \$author) {
        echo \$key . \" : \" . \$author . \"&lt;br&gt;&lt;br&gt;\";  // Directly echoing the author name
    }
    </code></pre>";
  echo '<h4 style = "color:red">Output Code: <h3/>';
  

  // Create an associative array with book titles and authors
  $book = [
            "Book Name" => "Rich  Dad and Poor Dad" ,
            "1997" => "Robert Kiyosaki",
          ];

  $book[1997] = "Robert Kiyosaki, Sharon Lechter";

  foreach ($book as $key => $author) {
    # code...
    echo  $key . " : " . "Author" . $author . "<br> <br>";
  
  }






  
  echo "<hr>";
  
  echo "<h3>✅ 4. Check if Key Exists<h3/>";
  echo "<h4>Exmaple Code:</h4>";
  echo '<h4 style = "color:red">Output Code: <h3/>';
  echo "<hr>";
  
  echo "<h3>✅ 5. Count Items and Print All Keys<h3/>";
  echo "<h4>Exmaple Code:</h4>";
  echo '<h4 style = "color:red">Output Code: <h3/>';
  echo "<hr>";




?>