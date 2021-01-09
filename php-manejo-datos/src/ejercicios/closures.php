<?php


$greetSimple = function ($name) //una funcion anonima (closure) se usa en una variable que requiere lógica
{
  return "Hola, $name ";
};

echo $greetSimple('Joss');

// YA HICIMOS UN TYPE LOL.
function greet(Closure $lang, $name)
{
  return $lang($name);
}

$es = function ($name) {
  return "Hola, $name";
};

$en = function ($name) {
  return "Hello, $name";
};


echo greet($en, 'Linda');