<?php 
// vamos a alterar el texto
$text = "PHP es UN LENGUAJE";

echo '<br> Texto en minusculas' . strtolower($text);
echo '<br> Texto en maysculas' . strtoupper($text);
echo '<br> Texto primera en maysculas' . ucfirst(strtolower($text));
echo '<br> Texto primera en minusculas' . lcfirst(strtoupper($text));

// ahora vamos a reemplazar cadenas
$slug = str_replace(' ', '-', $text);

echo "<br> Slug: $slug";

// Moficicación

$id_factura = 39;

echo '<br> Rellenar hasta 8 digitos IZQUIEDA ' . str_pad($id_factura, 16, '0', STR_PAD_LEFT);
echo '<br> Rellenar hasta 8 digitos DERECHA' . str_pad($id_factura, 16, '0', STR_PAD_RIGHT);

// sanitize 

$text = "<h1> PHP <br> es un <br> lenguaje </h1>";

echo '<br> Texto sin html tags: ' . strip_tags($text);

$text = "PHP es un lenguaje, año 2020 y programación &";

echo '<br> Texto normal monobyte: ' . strtoupper($text);
echo '<br> Texto normal multibyte: ' . mb_strtoupper($text);

