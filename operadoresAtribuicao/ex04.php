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
        $x = "abc";
        $$x = "def";
        echo "X: $x";
        echo "<br/>Variável da variável: $abc";
    ?>
</div>
</body>
</html>