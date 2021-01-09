<?php

// Los helpers son archivos que usamos como funciones que re repiten a través de la applicación. 

if (!function_exists('upper')) {
  function upper($value)
  {
    return Text\Format::uppetText($value);
  }
}

if (!function_exists('lowe')) {
  function lower($value)
  {
    return Text\Format::lowerText($value);
  }
}
