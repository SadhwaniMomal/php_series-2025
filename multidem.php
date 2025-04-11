<?php

$multidem = array ( array(2 , 5 , 7 , 8),
                    array(1 , 2 , 3 , 1),
                    array(5 , 5 , 0, 1),);

// echo var_dump($multidem);

// for ($i=0; $i < count($multidem) ; $i++) { 
//   # code...
//   echo var_dump($multidem[$i]);
//   echo "<br>";
// }

for ($i=0; $i < count($multidem) ; $i++) { 
  # code...
  for ($j=0; $j < count($multidem[$i]); $j++) { 
    # code...
    echo $multidem[$i][$j];
  }
  echo "<br>";
}



?>