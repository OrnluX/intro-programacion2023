<?php

	/**
	 * Principal
	 * Pide dos numeros a y b e imprime por pantalla el resultado de la suma de los numeros impares naturales que hay entre ellos
	 * INT $a, $b, $i, $sumaAcumulada, $aux
	*/

	$sumaAcumulada = 0;
	echo "Ingrese el primer numero \n";
	$a = trim(fgets(STDIN));
	echo "Ingrese el segundo numero \n";
	$b = trim(fgets(STDIN));

	if ($b < $a) {
		$aux = $a;
		$a = $b;
		$b = $aux;
	}

	for ($i=$a+1; $i < $b; $i++) { 
		if ($i%2 != 0) {
			$sumaAcumulada += $i;
		}
	}

	echo "Nro minimo: " . $a . " \n";
	echo "Nro maximo: " . $b . " \n";
	echo "Suma acumulada: " . $sumaAcumulada;
?>