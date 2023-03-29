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

        switch ($num){
            case 1:
            case 7:
                echo "Você <span class='foco'>NÃO precisa</span> ir para a escola.";
                break;
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Você <span class='foco'>PRECISA</span> ir para a escola.";
                break;
            default:
                echo "Valor inválido!";
        }
     ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
