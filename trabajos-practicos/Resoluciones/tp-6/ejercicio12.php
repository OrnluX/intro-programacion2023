<?php
    /**
     *PRINCIPAL
     *El usuario ingresa una secuencia de palabras, hasta ingresar un ".". Al finalizar el programa escribe la oracion completa
     *STRING $oracion, $palabra, $frase
    */
    $oracion = "";
    do {
        echo "Ingrese palabra (. para finalizar): ";
        $palabra = trim(fgets(STDIN));
        $frase = " " . $palabra; 
        $oracion .= $frase;
    } while ($palabra != ".");

    echo $oracion;
?>