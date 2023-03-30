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
        $num = isset($_GET["val"])?$_GET["val"]:0;

        $i = 1;
        do{
            echo "$num X $i = ". ($i * $num). "<br/>";
            $i++;
        }while($i <= 10)
    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
