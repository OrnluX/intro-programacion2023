<?php
    /**
     * funcion que imprime el cartel caños 
     * @param 
    */
    
    function imprimirCaños () {
        echo "+----+     |     +-----+\n";
    };

    /**
     * funcion que imprime el cartel campo
     * @param
     */

    function imprimirCampo () {
        echo "|          |           |\n";
    };

    /**
     * funcion que imprime el cartel linea media
     * @param
     */

    function imprimirLineaMedia () {
        echo "|    |     |     |     |\n";
    };

    /**
     * funcion que imprime el cartel linea de banda
     * @param
     */

    function imprimirLineaDeBanda () {
        echo "+----------+-----------+\n";
    };

    //principal
    //algoritmo que dibuja un campo de juego de futbol
    imprimirLineaDeBanda();
    imprimirCampo();
    imprimirCampo();
    imprimirCaños();
    imprimirLineaMedia();
    imprimirLineaMedia();
    imprimirLineaMedia();
    imprimirCaños();
    imprimirCampo();
    imprimirCampo();
    imprimirLineaDeBanda();
?>