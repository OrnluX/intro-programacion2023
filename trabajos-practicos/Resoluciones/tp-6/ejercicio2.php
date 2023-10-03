<?php
   /**
    * Principal
    * Solicita numeros al usuario hasta que ingrese un 0. Cuando esto ocurre el programa suma todos los numeros leidos
    * INT $numero, $acum
   */

   $acum = 0;
   do {
      echo "Ingrese un numero entero \n";
      $numero = trim(fgets(STDIN));
      $acum += $numero;
   } while ($numero != 0);

   echo "La suma de todos los numeros ingresados es = " . $acum;

?>