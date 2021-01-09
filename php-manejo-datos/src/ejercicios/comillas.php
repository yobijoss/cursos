<?php

echo 'un texto de una linea o varias lineas, con commila simple \' o back slash  \\ continuar con más texto <br>';

$nombre = 'joss';

echo "Mi nombre es $nombre";

$courses = [
  'backend' => [
    'PHP',
    'laravel'
  ]
];

class User 
{
  public $name = 'joss';
}

$user = new User;

echo "$user->name quiere {$courses['backend'][0]}";

$teacher = 'italo';

$italo = 'Profesor de php';

echo "$teacher es ${$teacher}";

// con variables variables
function getTeacher()
{
  return 'teacher';
}

echo "${getTeacher()} enseña PHP";