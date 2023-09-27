<?php
    /*algoritmo que transoforma una x cantidad de segundos insertada por el usuario en horas, minutos y segundos*/
    //INT $userTime, $horas, $minutos, $segundos
    //FLOAT $temp, $minutosResto
    //STRING $mensaje
    echo "Ingrese el tiempo, expresado en segundos, que desea transformar \n";
    $userTime = trim(fgets(STDIN));
    $horas = (int)($userTime/3600);
    $minutos = (int)($userTime/60 % 60);
    $temp = ($userTime / 60 - 60);
    $minutosResto = $temp - $minutos;
    $segundos = (int)($minutosResto * 60);
    $mensaje = $userTime." segundos"." equivalen a ".$horas." horas, ".$minutos." minutos, ".$segundos." segundos";
    echo $mensaje;
?>