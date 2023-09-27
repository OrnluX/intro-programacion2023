<?php
/**
 * Funcion que calcula el valor del discriminante en una formula Bhaskara
 * @param FLOAT $a
 * @param FLOAT $b
 * @param FLOAT $c
 * @return FLOAT
 */
 function calcularDiscriminante ($a, $b, $c) {
    //FLOAT $resultado
    $resultado = ($b*$b) - (4*$a*$c);
    return sqrt($resultado);
}

//principal 
//calcula las raices de una funcion cuadratica e imprime los resultados por pantalla
//FLOAT $coeficienteA, $coeficienteB, $coeficienteC, $discriminante, $raices, $raiz1, $raiz2 
echo "Ingrese el valor de a \n";
$coeficienteA = trim(fgets(STDIN));
echo "Ingrese el valor de b \n";
$coeficienteB = trim(fgets(STDIN));
echo "Ingrese el valor de c \n";
$coeficienteC = trim(fgets(STDIN));

$discriminante = calcularDiscriminante($coeficienteA, $coeficienteB, $coeficienteC);

if ($discriminante == 0) {
    $raices = -$coeficienteB / $coeficienteA * 2;
    echo "La ecuacion cuenta con dos raices iguales y valen " . $raices;
} 
else if ($discriminante > 0) {
    $raiz1 = (-$coeficienteB - $discriminante) / ($coeficienteA * 2);
    $raiz2 = (-$coeficienteB + $discriminante) / ($coeficienteA * 2);
    echo "La ecuacion cuenta con dos raices diferentes. Raiz 1: " . $raiz1 . " Raiz 2: " . $raiz2;
}
else 
echo "No existen raices dentro de los reales";

?>