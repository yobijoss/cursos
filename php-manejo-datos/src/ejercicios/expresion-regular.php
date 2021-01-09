<?php
# Expresiones Regulares
# retorno de solo verdadero o falso. 

$password = '123456';

## / -> simbolo contenedor
## 

echo preg_match('/^[-0-9]{6,9}$/', $password);  ## Si se cumple, es uno.

# cast a booleano
var_dump((bool)preg_match('/^[-0-9]{6,9}$/', $password));

