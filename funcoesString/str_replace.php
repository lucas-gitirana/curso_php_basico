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
       $frase = "Gosto de estudar programação!!!";
       $novafrase = str_replace( "programação","PHP",$frase);
       echo $novafrase;
    ?>
</div>
</body>
</html>
 