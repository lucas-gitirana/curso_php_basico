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
        $a = 3;
        $b = $a;
        $b += 5;
        echo"A: $a";
        echo"<br/>B: $b";

        $a = 10;
        $b = &$a;
        $b += 5;
        echo"<br/>A: $a";
        echo"<br/>B: $b";
    ?>
</div>
</body>
</html>