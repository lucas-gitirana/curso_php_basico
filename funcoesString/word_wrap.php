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
        $t = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas accumsan iaculis nisi, sollicitudin imperdiet ligula pharetra vitae. Nullam justo tortor, porttitor non bibendum nec, pellentesque elementum odio. Cras vitae enim ut enim consectetur consequat in non erat. Proin vitae laoreet purus, eu aliquet dolor. Nulla et ipsum neque. Sed nibh lectus, luctus ut risus vel, vestibulum consequat metus. Fusce nec risus gravida, pellentesque libero quis, faucibus metus. Mauris in quam eu ex euismod auctor. Pellentesque semper lacus in mi eleifend euismod. Aliquam finibus est vel enim cursus ultricies. Donec luctus lacinia orci, vel laoreet nibh vestibulum vitae.";
        $r = wordwrap($t, 40, "<br/>\n", false);

        echo $r;

    ?>
</div>
</body>
</html>
 