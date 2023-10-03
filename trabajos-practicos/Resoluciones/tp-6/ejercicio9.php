<?php
    /**
     * Dado un numero N calcula la sumatoria de los primeros N numeros impares
     * INT $num, $i, $suma, $numero
    */

    $suma = 0;
    $numero = 1;
    
    echo "Ingrese cuantos de los primeros impares desea sumar: ";
    $num = trim(fgets(STDIN));
    for ($i=1; $i <= $num; $i++) { 
        $suma += $numero;
        $numero += 2;
    }

    echo "La sumatoria de los numeros impares de " .$num . " es: " . $suma;
?>