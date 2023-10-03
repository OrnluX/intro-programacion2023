<?php
    /**Principal    
     * Solicita al usuario una determinada cantidad de numeros enteros que quiere sumar entre si y devuelve el resultado
     * INT $cantidad, $num, $acumulador, $i
    */

    $acumulador = 0;
    echo "Cuantos numeros desea sumar?: ";
    $cantidad = trim(fgets(STDIN));

    for ($i=1; $i <= $cantidad; $i++) { 
        echo "Ingrese el numero " . $i . ": ";
        $num = trim(fgets(STDIN));
        $acumulador += $num;
    }

    echo "La suma acumulada es: " . $acumulador;
?>