<!DOCTYPE html>
<html>
<head>
    <?php
        $txt = isset($_GET["texto"]) ? $_GET["texto"] : "Texto genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
    <style>
        span.texto{
            font-size: <?php echo "$tam"; ?>;
            color: <?php echo "$cor"; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>"
     ?>
    <br/>
    <a href="ex03.html">Voltar</a>
</div>
</body>
</html>
