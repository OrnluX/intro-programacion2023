<?php

/*algoritmo que recibe un numero encriptado, de hasta 4 cifras y lo desencripta */
/* INT $sumador, $numeroEncriptado, $primerDigito, $segundoDigito,
* $tercerDigito, $cuartoDigito, $primerDesencriptado, $segundoDesencriptado,
* $tercerDesencriptado, $cuartoDesencriptado, $reordenarDigitos
*/
$sumador = 10;
echo "Ingrese el numero que desea desencriptar \n";
$numeroEncriptado = trim(fgets(STDIN));

$primerDigito = (int)($numeroEncriptado/1000);                    
$segundoDigito = (int)($numeroEncriptado/100) % 10;          
$tercerDigito = (int)($numeroEncriptado/10) % 100 % 10;      
$cuartoDigito = (int)($numeroEncriptado) % 1000 % 100 % 10; 

$primerDesencriptado = ($primerDigito + $sumador - 7) % 10 ;
$segundoDesencriptado = ($segundoDigito + $sumador -7) % 10;
$tercerDesencriptado = ($tercerDigito + $sumador - 7) % 10;
$cuartoDesencriptado = ($cuartoDigito + $sumador - 7) % 10;

$reordenarDigitos = (int)($tercerDesencriptado . $cuartoDesencriptado . $primerDesencriptado . $segundoDesencriptado);
echo "El numero desencriptado es: " . $reordenarDigitos;
?>