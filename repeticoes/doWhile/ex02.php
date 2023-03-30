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
        $num = isset($_GET["valor"])?$_GET["valor"]:1;
        $fatorial = 1;

        $i = $num;
        do{
            $fatorial *= $i;
            $i--;
        }while($i >= 1);
        echo "$num ! = $fatorial";
     ?>
    <br/>
</div>
</body>
</html>
