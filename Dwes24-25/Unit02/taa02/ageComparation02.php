<?php

/**
 * Desarrolla un programa que compare la edad de tres personas.  El programa debe:
 *  1. Solicita al usuario que ingrese la edad de tres personas.
 *  2. Utilizar una estructura condicional para determinar quién es la persona más joven y quien es la mayor.
 *  Utiliza una estructura 'if else'
 *  3. Mostrar un mensaje en pantalla con el resultado.
 */


 // MAIN
 

 // Solicitar edades
 echo "Edad persona 1: ";
 $age01 = intval(readline());
 echo "Edad persona 2: ";
 $age02 = intval(readline());
 echo "Edad persona 3: ";
 $age03 = intval(readline());



 // Comparación de edades

 // Mayor
 if (($age01 > $age02) && ($age01 > $age03)) {
    
    echo "Persona 1 con {$age01} es la de mayor edad\n";
    
} else if (($age02 > $age01) && ($age02 > $age03)) {

    echo "Persona 2 con {$age02} es la de mayor edad\n";

} else {

    echo "Persona 3 con {$age03} es la de mayor edad\n";
}


// Menor
if (($age01 < $age02) && ($age01 < $age03)) {

     echo "Persona 1 con {$age01} es la de menor edad\n";

} else if (($age02 < $age01) && ($age02 < $age03)) {

    echo "Persona 2 con {$age02} es la de menor edad\n";

} else {

    echo "Persona 3 son {$age03} es la de menor edad\n";
}

 

