<?php
    /** Modulo que calcula el promedio de un valor respecto de otro
     * @param INT $cantEmpl
     * @param INT $edadAcumulada
     * @return FLOAT
    */
    function calcularPromedio ($cantEmpl, $edadAcumulada) {
        //FLOAT $resultado
        if ($cantEmpl !=0 && $edadAcumulada !=0) {
            $resultado = (int)($edadAcumulada / $cantEmpl);
        }
        else {
            $resultado = 0;
        }
        return $resultado;
    }

    /** Modulo que calcula el porcentaje
     * @param INT $cantidad
     * @param INT $total
     * @return FLOAT
    */

    function calcularPorcentaje ($cantidad, $total) {
        // FLOAT $resultado
       if ($cantidad !=0 && $total !=0) {
        $resultado = ($cantidad*100) / $total;
       } 
       else {
        $resultado = 0;
       }
        return $resultado;
    }

    //PRINCIPAL
    //INT $cantEmpleados, $cantProf, $cantTec,$acumEdad, $edad, $mayorActual, $promedio
    //STRING $rta, $puesto, $nombre, $nombreMayor
    //FLOAT $porcentaje
    $cantEmpleados = 0;
    $mayorActual = 0;
    $acumEdad = 0;
    $cantProf = 0;
    $cantTec = 0;
    
    echo "Desea ingresar un empleado? (s/n)";
    $rta = trim(fgets(STDIN));
    while ($rta == "s" || $rta == "S") {
        $cantEmpleados ++;
        echo "Ingrese nombre del empleado: ";
        $nombre = trim(fgets(STDIN));
        echo "Ingrese la edad del empleado: ";
        $edad = trim(fgets(STDIN));
        
        if ($edad > $mayorActual) {
            $mayorActual = $edad;
            $nombreMayor = $nombre;
        }

        echo "Ingrese puesto del empleado (a/t/p): ";
        $puesto = trim(fgets(STDIN));

        if ($puesto == "p" || $puesto == "P") {
            $cantProf ++;
        }
        else if ($puesto == "t" || $puesto == "T") {
           $cantTec ++;
           $acumEdad += $edad; 
        }

        echo "Desea ingresar otro empleado? (s/n): ";
        $rta = trim(fgets(STDIN));
    }

    if ($cantEmpleados != 0) {
        echo "Nombre de la persona de mayor edad: " . $nombreMayor . " \n";
        echo "Edad: " . $mayorActual . " \n";
        $porcentaje = calcularPorcentaje($cantProf, $cantEmpleados);
        echo "Porcentaje de profesionales: " . $porcentaje . "% \n";
        $promedio = calcularPromedio($cantTec, $acumEdad);
        echo "Promedio de edad de Tecnicos: " . $promedio; 
    } else {
        echo "Error. No se ingresaron datos";
    }
?>