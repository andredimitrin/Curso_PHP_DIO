<?php
// $bool = true && false;
// var_dump($bool);


// $bool = true and false;
// var_dump($bool);


// var_dump((7 != 7 or 8 > 8));

//if, else e else if

// $variavel1 = true;
// $variavel2 = true;
// $variavel3 = true;

// if($variavel1 == $variavel2 && 10 > 5){
//     echo"Variveis são iguais";
    
// } else{
//     echo"Variveis não são iguais";
// }

// $nota = 7;

// if ($nota >= 7) {
//     echo "Aprovado";
// } else if ($nota >= 5) {
//     echo "Recuperação";
// } else {
//     echo "Reprovado";
// }

// echo $nota >= 7 ? "Aprovado" : "Reprovado";

// $nota = 4;

// if($nota >=7){
// echo "Aluno aprovado!";

// } else if (($nota < 7) && ($nota >=4)){

// echo "Aluno em recuperação";
// } else {

// echo "Aluno reprovado";
// }

//Switch

$sorteio = rand(0,5);

echo "Valor sorteado: $sorteio ";

switch($sorteio){

    case 0:
        echo "Zero";
        break;
    case 1:
        echo "Um";
        break;
    case 2:
        echo "Dois";
        break;
    case 3:
        echo "Tres";
        break;
    case 4:
        echo "Quatro";
        break;
    case 5:
        echo "Cinco";
        break;
    default:
}







?>