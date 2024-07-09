<?php
function divisao($numero1, $numero2) {
    if ($numero2 == 0 || $numero1 == 0) {
        throw new Exception("Erro: Divisão por zero não é permitida.");
    } 
    return $numero1 / $numero2; 
}

try {
    echo divisao(10, 5); 
} catch (Exception $e) {
    echo $e->getMessage(); 
}

echo "\n... continuando o programa ...\n";
?>
