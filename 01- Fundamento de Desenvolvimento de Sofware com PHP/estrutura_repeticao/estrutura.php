<?php

//Foreach

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $qtd_elementos_array = count($arr);

// foreach ($arr as $indice => $value) {

//     if($value % 2  == 0){
//         continue;
//     }

//     echo "Valor do índice: " . $indice . " = " . $value . "\n";
// }

// While e do while

// $frutas = ['laranja', 'banana', 'abacaxi', 'maça'];

// $contador = count($frutas);

// $i = 0;
// while ($i < $contador){

//     if($frutas[$i] == 'abacaxi'){
//         break;

//     }

//     echo $frutas[$i] . "\n";
//     $i++;
// }

$frutas = ['laranja', 'banana', 'abacaxi', 'maca'];

$contador = count($frutas);

$i = 3;

do {
    

    echo $frutas[$i] . "\n";
    $i++;

} while ($i < $contador);