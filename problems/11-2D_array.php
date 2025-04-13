<?php

  echo "<h2> ✅ 1. Create a 2D Array and Print Elements<h2/>";
 
  echo "<h3> **Task:**  
  Create a 2D array to store student names and their scores in two subjects. Print each student's name and scores using nested loops.
  <h3/>";

  // Example Code:

  echo "<h4> Example Code: <h4/>";


  // Output Code:

  echo '<h4 style = "color:red">Output Code:</h4>';


  // 2D array: student name => [subject => score]

  $score = array(  array("student" , "Math" , "English"),
                   array("Ali" , "88" , "99"),
                   array("Sana" , "99" , "22")
                );
  
                for ($i=0; $i < count($score); $i++) { 
                  # code...
                  // echo var_dump($score[$i]);
                  for ($j=0; $j < count($score[$i]); $j++) { 
                    # code...
                    echo $score[$i][$j];
                    echo " ";
                  }
                  echo "<br>";
                }


  echo "<hr>";

  


?>