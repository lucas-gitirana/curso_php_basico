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
        $numero = $_GET["v"];
        echo "Raiz de $numero = ". number_format(sqrt($numero), 2);
    ?>
    <br/>
    <a href="ex01.html">Voltar</a>
</div>
</body>
</html>
