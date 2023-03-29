<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        b{
            color: #7e050c;
            font-size: 20px;
        }
    </style>
    <title></title>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $media = ($nota1 + $nota2) / 2;

        if($media >= 0 && $media < 5){
            $situacao = "<b>Reprovado(a)</b>";
        }
        elseif ($media >= 7){
            $situacao = "<b>Aprovado(a)</b>";
        }
        else{
            $situacao = "<b>Em Recuperação</b>";
        }
        echo "Sua média é <b>$media</b> e sua situação é: $situacao";
     ?>
    <br/>
    <a href="ex03.html">Voltar</a>
</div>
</body>
</html>
