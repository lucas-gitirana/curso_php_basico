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
        function teste(&$x){
            $x += 2;
            echo "X vale $x <br/>";;
        }

        $a = 3;
        echo "A vale $a<br/>";
        teste($a);
        echo "A vale $a<br/>";
    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
