<?php
//Array

// $carros = ["Ford", "Fiat", "Volkswagen"];



// print_r($carros[2]);

// $EnderecoPessoas = [
 
//         'pessoa1' => [
//             'nome' => 'João',
//             'idade' => 20,
//             'cidade' => 'São Paulo'
            
//         ],

//         'pessoa2' => [
//             'nome' => 'Maria',
//             'idade' => 25,
//             'cidade' => 'Rio de Janeiro'

//         ]
// ];

// if(isset($EnderecoPessoas['pessoa1']['nome'])){

//     echo $EnderecoPessoas['pessoa1']['nome'];

// }


//Incremento e Decremento

// echo "Pós-incremento";

// $a= 5;
// echo "deve ser 5: ". $a++."\n";
// echo "deve ser 6: ". $a."\n";

// echo "Pós-decremento";

// $b= 5;
// echo "deve ser 5: ". $b--."\n";
// echo "deve ser 4: ". $b."\n";

// echo "Antes-decremento";
// $a = 5;
// echo "deve ser 5: ". --$a."\n";
// echo "deve ser 4: ". $a."\n";

// echo "Antes-incremento";
// $b = 5;
// echo "deve ser 5: ". ++$b."\n";
// echo "deve ser 6: ". $b."\n";



//Estrutura: For

// $sarrayNumeros = [  1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// $qtd_elementos_array = count($sarrayNumeros);
// var_dump($qtd_elementos_array);

// for($i = 0; $i < $qtd_elementos_array; $i++){
//     echo $sarrayNumeros[$i]."\n";
// } 

//Bubble Sort

$arr = [1, 5, 3, 0];
$qtd_elementos_array = count($arr);

for ($i = 0; $i < $qtd_elementos_array; $i++) {
    for ($posicao_atual = 0; $posicao_atual < $qtd_elementos_array - $i - 1; $posicao_atual++) {
        $proxima_posicao = $posicao_atual + 1;

        if ($arr[$posicao_atual] > $arr[$proxima_posicao]) {
            // Troca os elementos usando a list
            list($arr[$posicao_atual], $arr[$proxima_posicao]) = [$arr[$proxima_posicao], $arr[$posicao_atual]];
        }
    }
}

// Imprime o array ordenado
print_r($arr);




?>