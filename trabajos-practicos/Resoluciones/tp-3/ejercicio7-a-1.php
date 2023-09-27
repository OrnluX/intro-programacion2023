<?php
    //algoritmo que determina si una persona es mayor de edad
    //BOOLEANO esMayor, INT edad, STRING nombre, mensaje

    echo "Ingrese su nombre:";
    $nombre = trim(fgets(STDIN));
    echo "Ingrese su edad:";
    $edad = trim(fgets(STDIN));
    $esMayor = $edad >= 18;
    $mensaje = $esMayor ? $nombre." es mayor de edad" : $nombre." no es mayor de edad";
    echo $mensaje; 


?>