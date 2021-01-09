<?php

$data = 'Estudio PHP';

echo "$data[0] | {$data{0}}";

$post = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem odio labore reiciendis, at animi blanditiis perspiciatis voluptatibus quasi nihil quo, repellendus amet suscipit nisi eos distinctio dolor consequatur, eveniet velit?';

$extract  = substr($post , 0, 20);

echo "$extract... [ver más]";

$data = 'javascript, php, laravel';

$tags = explode(', ', $data);

var_dump($tags);

$course = ['javascript', 'php', 'laravel'];
echo implode(', ', $course);

$course = '     Curso de PHP         ';

$course = trim($course);
echo '<pre>';
echo "quiero aprender $course, y otro java";

$course = '     Curso de PHP         ';

$course = ltrim($course);
echo '<pre>';
echo "quiero aprender $course, y otro java";


$course = '     Curso de PHP         ';

$course = rtrim($course);
echo '<pre>';
echo "quiero aprender $course, y otro java";
