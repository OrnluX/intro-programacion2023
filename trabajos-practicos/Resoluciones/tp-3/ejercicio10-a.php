<?php
    /*algoritmo que lee un numero entero de hasta 4 digitos y lo encripta, intercambiando el orden de sus caracteres y el valor de ellos */
    /* INT $userInput, $sum, $module, $first, $second, $third, $fourth, $firstEncripted, $secondEncripted, $thirdEncripted, $fourthEncripted, $encriptedNumber, $mixNumbers*/
    $sum = 7;
    $module = 10;
    echo "Ingrese un numero de hasta 4 digitos que desee encriptar \n";
    $userInput = trim(fgets(STDIN));                    
    
    $first = (int)($userInput/1000);                    
    $second = (int)($userInput/100) % $module;          
    $third = (int)($userInput/10) % 100 % $module;      
    $fourth = (int)($userInput) % 1000 % 100 % $module; 
    
    $firstEncripted = ($first + $sum) % $module;
    $secondEncripted = ($second + $sum) % $module;
    $thirdEncripted = ($third + $sum) % $module;
    $fourthEncripted = ($fourth + $sum) % $module;

    $mixNumbers = $thirdEncripted . $fourthEncripted . $firstEncripted . $secondEncripted;
    echo "Numero encriptado ".$mixNumbers;

?>