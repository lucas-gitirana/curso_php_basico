<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $t = "   Lucas Emanoel Gitirana   ";
        $tamanho = "Tamanho: ".strlen($t);
        echo "$t";
        echo "<br/>";
        echo $tamanho;

        echo "<br/>";

        $novo = trim($t);
        echo $novo;
        echo "<br/>";
        echo "Tamanho: ".strlen($novo);

        echo "<br/>";

        $novo2 = ltrim($t);
        echo $novo2;
        echo "<br/>";
        echo "Tamanho: ".strlen($novo2);

        echo "<br/>";

        $novo3 = rtrim($t);
        echo "$novo3";
        echo "<br/>";
        echo "Tamanho: ".strlen($novo3);



    ?>
</div>
</body>
</html>
 