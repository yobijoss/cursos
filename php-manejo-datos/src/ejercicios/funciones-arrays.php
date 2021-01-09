<?php

$courses = ['javascript', 'laravel', 'php'];

//orden normal menor a mayor ascendente
sort($courses);

var_dump($courses);

// orden descendente
rsort($courses);

var_dump($courses);

$courseMap = [
  10 => 'php',
  100 => 'javascript',
  1000 => 'laravel'
];

//orden con key
ksort($courseMap);

var_dump($courseMap);

//orden con key
krsort($courseMap);

var_dump($courseMap);

// funciones extra

var_dump(array_slice($courses, 1));

// el true al final hace que se queden las llaves
var_dump(array_chunk($courseMap, 1, true));

var_dump(array_flip($courseMap));


/**
 * array_shift: Quita un elemento del principio del array.
 * array_pop: Extrae el último elemento del final del array.
 * array_unshift: Añadir al inicio de un array uno a más elementos.
 * array_push: Inserta uno o más elementos al final de un array.
 * array_flip: Intercambia todas las claves de un array con sus valores asociados.
 * 
 */

/* Diferencia entre arrays*/
 // Array diff hace diferencia entre arrays

 $courses = ['javascript', 'php'];
 $wish = ['php','laravel', 'javascript', 'vuejs'];

 var_dump(array_diff($wish, $courses));

 $courseMap1 = [
  10 => 'php',
  100 => 'javascript',
  1000 => 'laravel'
];

$courseMap2 = [
  10 => 'android',
  200 => 'javascript',
  1000 => 'laravel'
];

// literal es este array , menos los elementos que se repitan en el otro array
var_dump(array_diff_assoc($courseMap1, $courseMap2));


/* Union entre arrays*/

$frontend =['Javascript'];
$backend = ['php', 'laravel'];

var_dump(array_merge($frontend, $backend));

// array_merge_recursive: no sobre escribe keys existentes, crea un sub array

$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));

