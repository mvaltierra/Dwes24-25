<?php

/**
 * Crea un juego en PHP donde el programa elija un número aleatorio entre 1 y 10, y el usuario
 * deba adivinarlo. El juego debe:
 *  1.) Generar un número aleatorio usando rand() y almacenarlo en una variable.
 *  2.) Pedir al usuario que adivine el número, proporcionando retroalimentación si el número es mayor o menor
 *  que la superposición. Utiliza una estructura switch.
 *  3.) Utiliza un bucle para permitir que el usuario siga intentando hasta que acierte. Utiliza una estructura
 *  'do while'
 *  4.) Contar el número de intentos y mostrarlo al finalizar el juego.
 * 
 */

 // MAIN


// Variable y número aleatorio 
$counter = 0;
$guessed = false;
$aleatoryNumber = rand(1, 10);

echo $aleatoryNumber . "\n";


echo "**** Adivina el número *****\n";
do {
    // Solicitar número al jugador
    echo "Introduce tú número (1 al 10): \n";
    $num = trim(intval(readline()));

    // Comprobar si el número introducido es correcto
    switch(true){
        case ($num > $aleatoryNumber):
            echo "El número es menor\n";
            break;
        case ($num < $aleatoryNumber):
            echo "El número es mayor\n";
            break;
        case ($num == $aleatoryNumber):
            echo "Has adivinado el número\n";
            $guessed = true;
            break;
        default:
            echo "El número introducido no está en el rango.\n";
            break;
    }

    $counter++;
} while(!$guessed);


echo "Número de intentos: {$counter}\n";