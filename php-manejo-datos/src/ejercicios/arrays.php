<?php

$courses = [
  'frontend' => 'javascript',
  'framework' => 'laravel', 
  'backend' => 'php'
];

/*
foreach ($courses as $course) {
  echo "$course <br> \n";
}*/

function upper($course, $value)
{
  echo strtoupper($course) . " : $value <br>";
}

// funcion propia para caminar por un array jajaja
echo array_walk($courses, 'upper');

echo array_key_exists('frontend', $courses);

// value en el array
echo in_array('javascript', $courses);

 array_keys($courses);
 array_values($courses);
