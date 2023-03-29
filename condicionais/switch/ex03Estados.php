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
        $est = isset($_GET["est"])?$_GET["est"]:1;

        if($est <= 7){
            echo "Esse estado fica na região Norte";
        }elseif($est <= 16){
            echo "Esse estado fica na região Nordeste";
        }elseif ($est <= 20){
            echo "Esse estado fica na região Centro-oeste";
        }elseif($est <= 24){
            echo "Esse estado fica na região Sudeste";
        }else{
            echo "Esse estado fica na região Sul";
        }

     ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
