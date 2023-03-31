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
        require "funcoes.php";
        // require "funcoes.php" -> só funciona se tiver arquivo
        // include "funcoes.php" ->  se não tiver arquivo ele continua tentando
        // include_once ou require_once ->  só carrega uma vez

        echo "<h1>Testando novas funções</h1>";
        echo ola();
        echo mostraValor(5);
    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
