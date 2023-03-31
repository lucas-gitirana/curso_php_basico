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
       $nome = "lucas gItiRana";
       $nome2 = ucfirst($nome);
       echo "Seu nome é $nome2";

       $nome3 = "Renato Gaúcho";
       $nome3novo = ucfirst(strtolower($nome3));
       echo "<br/>$nome3novo";
    ?>
</div>
</body>
</html>
 