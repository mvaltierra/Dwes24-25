<?php

/**
 * Crea un script que realice operaciones matemáticas básicas. El programa debe:
 *  1. Solicita al usuario que ingrese dos números mediante la consola.
 *  2. Realiza las operaciones matemáticas de suma, resta, multiplicación y división
 *  utilizando estos números.
 *  3. Imprimir en pantalla los resultados y la información adicional sobre cada operación,
 *  utilizando las siguientes funciones:
 *      a.) Mostrar el resultado de la suma y su tipo de dato utilizando var_dump().
 *      b.) Mostrar el tipo de dato del resultado de la resta utilizando gettype().
 *      c.) Verificar si la multiplicación está definida utilizando isset() y mostrar un mensaje
 *      que indique si lo está o no.
 *      d.) Mostrar el resultado de la división utilizando print_r().
 */


 // MAIN


    // Solicitar datos al usuario
    echo "Ingrese un número:  ";
    $num01 = floatval(readline());
    echo "Ingrese el segundo número: ";
    $num02 = floatval(readline());
    echo "*** Operación a realizar ***
            \n1. Sumar 
            \n2. Restar 
            \n3. Multiplicar 
            \n4. División
            \n5. Salir
            \nElegir opción [1-5]: ";
    $opt = intval(readline());
    
    

    // Calculos y visualización de operaciones
    switch($opt) {
        case 1:
            echo "Tipo de datos: \n" . var_dump($num01) ."\n" . var_dump($num02);
            echo "Sumar: " . ($num01 + $num02) . "\n";
            break;
        case 2:
            echo "\nTipo de dato del resultado: " . gettype($num01 - $num02);
            echo "\nRestar: " . ($num01 - $num02) . "\n";
            break;
        case 3:
            $multiply = ($num01 * $num02);
            if (isset($multiply)) {
                echo "La multiplicación esta definda.\n";
                echo "Multiplicar: {$multiply}\n";
            } else {
                echo "La multiplicación no está definida";
            }
            break;
        case 4:
            if ($num02 == 0) {
                echo "La división no puede realizarse";
            }
            print_r("División: ". ($num01 / $num02) ."\n");
            break;
        case 5:
            exit();
        default:
            echo "Operación solicitada incorrecta";
    }

  
            

    

        


