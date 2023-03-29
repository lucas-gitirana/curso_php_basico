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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];

        $media = ($nota1 + $nota2 + $nota3)/3;
        echo "Média:". number_format($media, 2);

        // $situacao = $media >= 7 ? "Aprovado(a)":"Reprovado(a)";
        echo "<br/>Situação: ". ($media >= 7 ? "Aprovado(a)":"Reprovado(a)");

    ?>
</div>
</body>
</html>
