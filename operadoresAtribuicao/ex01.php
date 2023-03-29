<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Exercício 1</title>
</head>
<body>
<div>
<?php
    $preco = $_GET["p"];
    echo "Preço original: R$ ". number_format($preco, 2);

    $preco += ($preco * 0.10);
    echo "<br/>Preço com aumento: R$ ". number_format($preco, 2);
?>
</div>
</body>
</html>