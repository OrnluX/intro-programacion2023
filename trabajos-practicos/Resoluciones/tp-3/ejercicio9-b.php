<?php
    /*algoritmo que calcula la velocidad a la que se desplaza un vehiculo, dados dos datos a traves del usuario: tiempo y distancia */
    // FLOAT $distancia, $tiempo, $velocidad
    // STRING mensaje

    echo "Inserte la distancia que el vehiculo recorre \n";
    $distancia = trim(fgets(STDIN));
    echo "Inserte el tiempo que le toma al vehiculo recorrer dicha distancia \n";
    $tiempo = trim(fgets(STDIN));
    $velocidad = $distancia/$tiempo;
    $mensaje = "El vehiculo se desplaza a ".$velocidad."Km/h";
    echo $mensaje;

?>