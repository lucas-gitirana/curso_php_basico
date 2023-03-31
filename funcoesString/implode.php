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
       $vetor = array("Curso","em","Vídeo");
       $site = implode(" ",$vetor);
       print_r($site);

       // implode = join
    ?>
</div>
</body>
</html>
 