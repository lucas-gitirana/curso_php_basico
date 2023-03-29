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
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $anoNasc = isset($_GET["ano"])?$_GET["ano"]: 0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";

        echo "$nome é $sexo e tem  ". (date("Y") - $anoNasc). " anos.";
    ?>
    <br/>
    <a href="ex02.html">Voltar</a>
</div>
</body>
</html>
