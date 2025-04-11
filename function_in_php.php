<?php

function sumMarks($markArray){
  $sum = 0;

  foreach ($markArray as  $value) {
    # code...
    $sum += $value;
  }

  return $sum ;
}

function avgMark($markArray){
  $sum = 0;
  foreach ($markArray as $value) {
    # code...
    $sum = $sum + $value;
  }

  return $sum / count($markArray);
}


$moomal = [50 , 20 , 30 , 50 , 50] ;

echo "Moomal Total Subject Mark " . sumMarks($moomal) ;

echo "<br/>";

echo "Moomal Average Mark  " . avgMark($moomal);


?>