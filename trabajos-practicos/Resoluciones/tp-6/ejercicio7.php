<?php
    /**Principal
     * Dado un numero N calcula el factorial
     * INT $num, $factorial, $acum
    */

    $acum = 1;
   
    echo "Ingrese un numero para obtener su factorial \n";
    $num = trim(fgets(STDIN));

    for ($i=1; $i <= $num; $i++) { 
        $acum *= $i;
    }

    echo "El factorial de " . $num ." es:" . $acum;


?>