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
        $anoNascimento = $_GET["an"];
        $idade = 2023 - $anoNascimento;
        echo "Sua idade: $idade";

        echo "</br>Situação do eleitor: ". (($idade >= 18) && ($idade <= 64) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO");

    ?>
</div>
</body>
</html>
