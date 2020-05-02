<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)'; // onde esta o ? vai os parametros e qntds

$prepare = $pdo->prepare($sql); //um estado antes da atribuição do valor

$prepare->bindParam(1, $_GET['descricao']); //ele atribui com segurança
$prepare->execute();

echo $prepare->rowCount(); //exibe qnts linhas foram afetadas
