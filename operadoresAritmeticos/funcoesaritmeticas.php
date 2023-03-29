<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
<?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "Valor absoluto de $v2 : ". abs($v2);
    echo "<br/>Valor de $v1<sup>$v2</sup>: ". pow($v1, $v2);
    echo "<br/>Raiz de $v1: ". sqrt($v1);
    echo "<br/>Valor arredondado de $v2: ". round($v2);
    // ceil - arredonda pra cima
    // floor - arredonda pra baixo
    echo "<br/>Parte inteira de $v2: ". intval($v2);
    echo "<br/>$v1 formatado em moeda: R$ ". number_format($v1, 2, ",",".");
?>
</body>
</html>