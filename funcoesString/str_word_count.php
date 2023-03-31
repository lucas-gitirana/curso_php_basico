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
        //CONTAR AS PALAVRAS
        $frase = "O Grêmio é copeiro demais!";
        $cont = str_word_count($frase, 0);
        echo $cont;

        echo "<br/>";

        //CRIAR UM VETOR COM A FRASE
        $frase2 = "O Gremio ganha tudo";
        $v = str_word_count($frase2, 1);
        echo print_r($v);

        echo "<br/>";

        // CRIAR UM VETOR MANTENDO O POSICIONAMENTO DE CADA PALAVRA NA STRING
        $frase3 = "Vou torcer pro Gremio";
        $v3 = str_word_count($frase3, 2);
        echo print_r($v3);



    ?>
</div>
</body>
</html>
 