<?php
    /**
     * Verifica si una letra pasada por parametro es vocal
     * @param STRING $l
     * @return BOOLEAN
    */

    function verificarLetra ($l) {
        //BOOLEAN $resultado
        
       switch ($l) {
            case 'a':
                $resultado = true;
                break;
            case 'e':
                $resultado = true;
                break;
            case 'i':
                $resultado = true;
                break;
            case 'o':
                $resultado = true;
                break;
            case 'u':
                $resultado = true;
                break;
            default:
                $resultado = false;
                break;
       }
       return $resultado;
    }

    /**
     *PRINCIPAL
     *El programa lee una secuencia de letras minusculas y sin tildes, hasta que lea "-". Luego imprime por pantalla la cantidad de vocales ingresada en esa secuencia
     *INT $contador
     *STRIG $letra
     *BOOLEAN $comprobacion
    */
    $contador = 0;
    do {
        echo "Ingrese letra (- para finalizar): ";
        $letra = trim(fgets(STDIN));
        $comprobacion = verificarLetra($letra);
        if ($comprobacion) {
            $contador++;
        }
    } while ($letra != "-");
    
    echo "Cantidad de vocales ingresadas: " . $contador;
?>