<?php
    /**
     * Recibe un numero como parametro y verifica si es multimo de 2
     * @param INT $num
     * @return BOOLEAN
     */

    function esMultiploDe2 ($num) {
        $validar = $num % 2 > 0 ? false : true;
        return $validar;
    };

    //Principal
    //INT $numeroIngresado
    //BOOLEAN $esMultiplo
    //STRING $resultado, mensaje
    
    echo "Este programa verifica si un numero es multiplo de 2 \n";
    echo "Por favor ingrese un numero: \n";

    $numeroIngresado = (int)trim(fgets(STDIN));
    $esMultiplo = esMultiploDe2($numeroIngresado);
    $resultado = $esMultiplo ? "ES multiplo de 2" : "NO es multiplo de 2";
    $mensaje = "Tu numero " . $resultado;
    echo $mensaje;
?>