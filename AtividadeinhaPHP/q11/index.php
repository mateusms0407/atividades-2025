<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $venda = 500;
        $valor = 15;
        echo "o preço com acrecimo: " . $venda + (($venda /100) * $valor);
    ?>
</body>
</html>