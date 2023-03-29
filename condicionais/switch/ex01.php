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
        $num = isset($_GET["num"])?$_GET["num"]:0;
        $op = $_GET["op"];

        $r = 0;
        switch ($op){
            case 1:
                $r = $num * 2;
                break;

            case 2:
                $r = $num * 3;
                break;

            case 3:
                $r = number_format(sqrt($num),2);
        }

        echo "A reposta é <span class='foco'>$r</span>";
     ?>
    <br/>
    <a href="ex01.html" class="botao">Voltar</a>
</div>
</body>
</html>
