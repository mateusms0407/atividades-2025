<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $custo_fabrica = 1000;
       $imposto = (45 * $custo_fabrica)/100 + $custo_fabrica;
       $distribuidor = (28 * $imposto)/100;
       echo "Custo final é " . $imposto + $distribuidor;   
    ?>
</body>
</html>