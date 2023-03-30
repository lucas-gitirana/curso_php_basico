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
        function soma($a, $b){
            echo "<p>$a + $b = ". ($a + $b)."</p>";
        }

        soma(10,3);
        soma(8,2);
        soma(10,-9);

     ?>
    <br/>
</div>
</body>
</html>
