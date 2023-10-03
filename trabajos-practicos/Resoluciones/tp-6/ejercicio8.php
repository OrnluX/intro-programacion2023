<?php
    /**Principal
     * Pide un numero al usuario y calcula la sumatoria de dicho numero
     * INT $num, $acum, $i
    */

    $acum = 0;
    echo "Ingrese un numero para obtener la sumatoria: ";
    $num = trim(fgets(STDIN));
    for ($i=1; $i <= $num; $i++) { 
        $acum += $i;
    }

    echo "La sumatoria del numero " . $num . " es: " . $acum;
?>