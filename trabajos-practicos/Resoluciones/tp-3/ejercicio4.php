<?php 
echo "Ingrese un numero:";
$num1 = trim(fgets(STDIN));
echo "Ingrese otro numero:";
$num2 = trim(fgets(STDIN));
$resultado = $num1 + $num2;
echo "el resultado es: ".$resultado."\n";