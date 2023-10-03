<?php
    //Principal
    //Escribe los números enteros positivos MENORES a N, donde N es un número solicitado al usuario
    //INT $num, $i
    echo "Ingrese un numero entero \n";
    $num = trim(fgets(STDIN));
    for ($i=1; $i < $num; $i++) { 
        echo $i . "\n";
    }
?>