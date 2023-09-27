<?php
/**
 * veifica si un numero es multiplo de 2
 * @param INT $numero
 * @return BOOL
 */

 function divisiblePorDos ($numero) {
    return ($numero % 2) == 0;
 }

 /**
  * retorna el numero mayor
  *@param INT $num1
  *@param INT $num2
  *@param INT $num3
  *@return INT 
  */

  function mayorNumeros($num1, $num2, $num3)  {
    //INT $mayor
    if ($num1 >= $num2 && $num1 >= $num3) {
        $mayor = $num1;
    } 
    else if ($num2 >= $num1 && $num2 >= $num3) {
        $mayor = $num2;
    }
    else $mayor = $num3;

    return $mayor;
  }

  // Principal
  //INT $nro1, $nro2, $nro3, $mayor
  //BOOLEAN $divisible
  echo "Ingrese el Numero1";
  $nro1 = trim(fgets(STDIN));
  echo "Ingrese el Numero2";
  $nro2 = trim(fgets(STDIN));
  echo "Ingrese el Numero3";
  $nro3 = trim(fgets(STDIN));

  $mayor = mayorNumeros($nro1, $nro2, $nro3);
  echo "El mayor de los 3 numeros es: " . $mayor;
  
  $divisible = divisiblePorDos($nro1);
  if ($divisible) {
    echo "El numero " . $nro1 . " es divisible por 2";
  }
  
  $divisible = divisiblePorDos($nro2);
  if ($divisible) {
    echo "El numero " . $nro2 . " es divisible por 2";
  }
  
  $divisible = divisiblePorDos($nro3);
  if ($divisible) {
    echo "El numero " . $nro3 . " es divisible por 2";
  }

?>