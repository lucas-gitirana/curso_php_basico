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
        $anoNasc = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $anoNasc;
        echo "Você nasceu em $anoNasc e tem $idade anos <br/>";

        if ($idade >= 18){
            echo "Você pode votar e dirigir";
        }
        else{
            echo "Você NÃO pode votar e dirigir";
        }
     ?>
    <br/>
    <a href="ex01.html">Voltar</a>
</div>
</body>
</html>
