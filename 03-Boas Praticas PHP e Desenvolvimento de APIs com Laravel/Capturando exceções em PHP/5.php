<?php

function validarUsuario(array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception('Todos os campos devem ser preenchidos');
    }

    return true;
}

$usuario = [
    'codigo' => '1',
    'nome' => '',
    'idade' => '57',
];

try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Status da Operação: ".(int)$status; //cast
    die();
}

echo "\n... continuando o programa ...\n";

