<?php
    /**
     * Principal
     * Pide un numero entero al usuario y muestra por pantalla los numeros
     * naturales pares menores a ese numero
     * INT $num, $j
    */

    echo "Ingrese un numero entero";
    $num = trim(fgets(STDIN));
    
    for ($j=1; $j <= $num; $j++) { 
        if ($j % 2 == 0) {
            echo $j . "\n";
        }
    }

 ?>