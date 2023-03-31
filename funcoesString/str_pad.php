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
       $nome = "Lucas";
       $novo = str_pad($nome, 30, "#", STR_PAD_RIGHT);
       print("O $novo é lindo");
    ?>
</div>
</body>
</html>
 