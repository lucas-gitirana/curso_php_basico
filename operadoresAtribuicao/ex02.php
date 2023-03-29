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
        $anoAtual = $_GET['a'];
        echo "Ano atual: $anoAtual";

        // Pré decremento
        echo "<br/> Ano anterior: ". --$anoAtual;
    ?>
</div>
</body>
</html>