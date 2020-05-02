<?php

function divisao(int $num1, int $num2)
{
    if($num1 == 0 || $num2 == 0)
    {
        throw new Exception("Não é aceitavel valores igual a 0! \n");
    }

    //return $num1 / $num2;
    return true;
}

$num1 = 0;
$num2 = 1;

$status = false;

try {
    $status = divisao($num1, $num2);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "\n Status da operação: " . (int)$status; //cast
    die();
}