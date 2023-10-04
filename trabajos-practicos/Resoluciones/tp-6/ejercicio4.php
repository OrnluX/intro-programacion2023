<?php
    /**
     * Calcula el promedio de los sueldos de los empleados
     * @param FLOAT $totalSueldos
     * @param INT $cantSueldos
     * @return FLOAT
    */
    function calcularPromedio($totalSueldos, $cantSueldos) {
        //FLOAT $resultado
        if ($totalSueldos != 0 && $cantSueldos != 0) {
            $resultado = $totalSueldos / $cantSueldos;
        } 
        else {
            $resultado = 0;
        }
        return $resultado;
    }

    /**
     * Principal
     * Lee una secuencia de numeros que representan el sueldo del personal de una empresa y calcula el promedio de los sueldos de los empleados.
     * INT $acumRtas, $acumSueldos
     * FLOAT $sueldo, $promedio
     * STRING $rta
    */

    $acumRtas = 0;
    $acumSueldos = 0;
    $sueldo;

    echo "Desea ingresar un sueldo? (s/n): ";
    $rta = trim(fgets(STDIN));

   
    if ($rta == "s" || $rta == "S") {
        do {
            echo "Sueldo: ";
            $sueldo = trim(fgets(STDIN));
            $acumRtas++;
            $acumSueldos += $sueldo;
            echo "Desea ingresar otro sueldo? (s/n): ";
            $rta = trim(fgets(STDIN));
        } while ($rta == "s" || $rta == "S");
    }

    echo "Fin del programa \n";
    if ($rta == "n" || $rta == "N") {
        echo "Sueldo acumulado: $" . $acumSueldos . " \n";
        echo "Cantidad de sueldos ingresados " . $acumRtas . " \n";
        $promedio = calcularPromedio($acumSueldos, $acumRtas);
        echo "Promedio de sueldos: $" . $promedio;
    }
    else {
        echo "El comando ingresado es incorrecto. Intentelo nuevamente \n";
    }