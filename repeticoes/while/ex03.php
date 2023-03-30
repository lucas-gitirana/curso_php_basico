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
        $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $final = isset($_GET["final"])?$_GET["final"]:0;
        $incremento = isset($_GET["inc"])?$_GET["inc"]:0;

        if($inicio < $final){
            $i = $inicio;
            while($i <= $final){
                echo "$i<br/>";
                $i += $incremento;
            }
        }elseif($final < $inicio){
            $i = $inicio;
            while($i >= $final){
                echo "$i<br/>";
                $i = $i - $incremento;
            }
        }else{
            echo "Os valores são iguais.";
        }
     ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
