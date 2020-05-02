<?php

function validarUsuario(array $usuario)
{
    if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
    {
        throw new Exception("Campos obrigatórios não foram preenchidos!");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57
];

try {
    validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
    die(); //para a execução aqui
}



echo "\n ... executando ... \n";