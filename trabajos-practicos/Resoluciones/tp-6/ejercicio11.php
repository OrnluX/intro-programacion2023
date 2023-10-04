<?php
    /**
     * PRINCIPAL
     * Dado un valor X>0 y una secuencia de numeros finalizada con -1, verifica si X pertenece a la secuencia
     * INT $numEncontrar, $numSecuencia
    */
    echo "Ingrese el numero a encontrar: ";
    $numEncontrar = (int)trim(fgets(STDIN));
    do {
       echo "Ingrese un numero para la secuencia: ";
       $numSecuencia = (int)trim(fgets(STDIN));
    } while ($numSecuencia != -1 && $numSecuencia != $numEncontrar);
    if ($numSecuencia == -1) {
        echo $numEncontrar . " NO fue encontrado!";
    } 
    else {
        echo $numEncontrar . " fue encontrado!";
    }
?>