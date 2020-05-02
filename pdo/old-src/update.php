<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'update produtos set descricao = ? where id = ?'; // onde esta o ? vai os parametros e qntds na ordem

$prepare = $pdo->prepare($sql); 

//passar em ordem do select
$prepare->bindParam(1, $_GET['descricao']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount(); 
