<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $tipo = $_GET["op"];
        echo "A: $a";
        echo "<br/>B: $b";

        $resultado = ($tipo == "s") ? $a + $b: $a * $b;

        echo "<br/>Resultado: $resultado";
    ?>
</div>
</body>
</html>
