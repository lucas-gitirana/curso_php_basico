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
        $repeticoes = isset($_GET["valor"])?$_GET["valor"]:0;

        $i = 1;
        while($i <= $repeticoes){
            echo "Caixa $i: <input type='number' name='v$i' /><br/>";
            $i++;
        }
     ?>
    <br/>
</div>
</body>
</html>
