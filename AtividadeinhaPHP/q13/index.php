<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = array(11,9,10);
        foreach ($numeros as $n) {
            if ($n > 10) {
                echo $n . " é maior que 10 <br>";
            } elseif ($n < 10) {
                echo $n . " é menor que 10 <br>";
            } else {
                echo $n . " é igual a 10 <br>";
            }
        }
    ?>
</body>
</html>