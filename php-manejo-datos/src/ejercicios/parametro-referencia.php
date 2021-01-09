<?php

$course  = 'PHP';
echo $course;

function path(&$course) {
  $course = 'Laravel';
  echo $course;
}

path($course);

echo $course;

function greet($name = 'joss')
{
  return "Hola $name";
}

echo greet();
echo greet('Abel');