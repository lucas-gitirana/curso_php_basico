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
        function soma($a, $b){
            return $a + $b;
        }

        $x = 3;
        $y = 5;
        $soma = soma($x,$y);
        echo "A soma entre $x e $y é $soma";
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
