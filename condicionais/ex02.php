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

        if ($idade < 16){
            $tipoVoto = "não vota";
        }elseif($idade >= 18 && $idade <= 65){
            $tipoVoto = "obrigado a votar";
        }else{
            $tipoVoto = "voto facultativo";
        }
        echo "Tipo de voto: $tipoVoto";
     ?>
    <br/>
    <a href="ex02.html">Voltar</a>
</div>
</body>
</html>
