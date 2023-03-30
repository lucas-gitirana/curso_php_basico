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
        function soma(){
            $parametros = func_get_args();
            $numParametros = func_num_args();

            $soma = 0;
            for($i=0; $i<$numParametros; $i++){
                $soma += $parametros[$i];
            }
            return $soma;
        }

        $r = soma(10,20,30,5,5,4,2,8,5);
        echo "$r";
    ?>

    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    <br/>
</div>
</body>
</html>
