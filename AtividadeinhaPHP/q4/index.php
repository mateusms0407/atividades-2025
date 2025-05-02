<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nome = "Lucas";
    $idade = 20;
    $salario = 1000.50;
    $comissao = (1000.50 /100) * 15;
    echo "Nome: {$nome} <br>";
    echo "Idade: {$idade} <br>";
    echo "Salario: {$salario} <br>";
    echo "Comissão: {$comissao} <br>";
    echo "Salario + Comissão: " . ($salario + $comissao) . "<br>";
?>
</body>
</html>