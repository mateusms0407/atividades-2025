<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $A = 5;
        $B = 7;
        $C = $B;
        $B = $A;
        $A = $C;
        echo "A VARIAVEL A RECEBE {$A}<br>";
        echo "A VARIAVEL B RECEBE {$B}";
    ?>
</body>
</html>