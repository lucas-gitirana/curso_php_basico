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
        echo "<h2>Analisando o número $num...</h2>";

        $multiplos = "";
        $contador = 0;
        for($i=1;$i<=$num;$i++){
            if($num % $i == 0){
                $multiplos .= "$i ";
                $contador++;
            }

            if($contador == 2){
                $resultado = "<span class='foco'>É PRIMO!</span>";
            }else{
                $resultado = "<span class='foco'>NÃO É PRIMO!</span>";
            }
        }

        echo "Valores múltiplos: $multiplos<br/>";
        echo "Total de múltiplos: $contador<br/>";
        echo "Resultado: $num $resultado"


    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
