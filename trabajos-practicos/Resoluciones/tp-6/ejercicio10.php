<?php
    /**
     *Modulo que calcula un porcentaje de una cantidad respecto de la otra
     *@param INT $multiplos
     *@param INT $numeros
     *@return FLOAT 
    */
    function calcularPorcentaje ($numeros, $multiplos){
        //FLOAT $resultado
        if ($numeros != 0 && $multiplos != 0) {
            $resultado = ($multiplos*100)/$numeros;
        }
        else {
            $resultado = 0;
        }
        return $resultado;
    }
    
    /**
     * Modulo que verifica si un numero es multiplo del otro y retorna el resultado.
     * @param INT $numIngresado, $numAVerificar
     * @return BOOLEAN 
    */
    function verificarNumero ($numIngresado, $numAVerificar) {
        return ($numIngresado%$numAVerificar == 0 );
    }


    /**PRINCIPAL    
     * El programa pide al usuario que ingrese un numero X. Luego le pregunta si desea ingresar un numero a la secuencia. Cuando el usuario termina de ingresar numeros, el programa devuelve que porcentaje de los numeros ingresados son multiplos del numero X.
     * INT $num, $cantMultiplos, $cantNumeros, $numSecuencia
     * FLOAT $porcentaje
     * BOOLEAN $esMultiplo
     * STRING $rta
    */

    $cantMultiplos = 0;
    $cantNumeros = 0;
    
    echo "Ingrese un numero para evaluar sus multiplos: ";
    $num = trim(fgets(STDIN));
    
    echo "Desea ingresar un numero a la secuencia? (s/n): ";
    $rta = trim(fgets(STDIN));          
    
   
    if ($rta == "s" || $rta == "S") {
        do {
            echo "Numero de la secuencia: ";
            $numSecuencia = trim(fgets(STDIN));
            $cantNumeros++;
            $esMultiplo = verificarNumero($numSecuencia, $num);
            if ($esMultiplo) {
                $cantMultiplos++;
            }
            
            echo "Desea ingresar otro numero a la secuencia? (s/n): ";
            $rta = trim(fgets(STDIN));
        } while ($rta == "s" || $rta == "S");
        
        $porcentaje = calcularPorcentaje($cantNumeros, $cantMultiplos);
        echo "Fin del programa \n";
        echo "Cantidad de numeros ingresados: " . $cantNumeros . " \n";
        echo "Cantidad de multiplos de " . $num . ": " . $cantMultiplos . " \n";
        echo "El porcentaje de multiplos es " . $porcentaje . " %";
    }
    else {
        echo "No se ingresaron numeros \n";
    }
?>