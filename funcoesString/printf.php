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
        $p = "Leite";
        $preco = 5.4;
        echo "O $p custa ". number_format($preco,2). "<br/>";
        printf ("O %s custa R$ %.2f ", $p, $preco);

        // %d - decimal
        // %u - decimal sem sinal
        // %f - real
        // %s - string
    ?>
</div>
</body>
</html>
 