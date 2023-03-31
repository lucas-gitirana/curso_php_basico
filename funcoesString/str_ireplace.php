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
       $frase = "Gosto de estudar programação! Programação é show!";
       $novafrase = str_ireplace( "programação","PHP",$frase);
       echo $novafrase;
    ?>
</div>
</body>
</html>
 