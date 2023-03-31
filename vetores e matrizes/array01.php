<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <table border="1"><tr>
    <?php
        // ARRAY
        $n = array(3,5,0,2);
        $n[] = 7;
        print_r($n);

        // RANGE
        $c = range(5,20,2);
        print_r($c);

        // ARRAY COM ÍNDICES DEFINIDOS POR NÓS
        $v = array(1=>"A",
            3=>"B",
            5=>"C",
            9=>"D");
        $v[] = "E";
        print_r($v);

        // UNSET
        unset($v[5]);
        print_r($v);

        // VETOR HETEROGÊNEO (tipo dicionário)
        $cad = array("nome"=>"Lucas", "idade"=>19, "peso"=>60.5);
        $cad["fuma"] = false;
        print_r($cad);


        // FOREACH DE VETOR HETEROGÊNEO
        foreach($cad as $chave=>$valor){
            echo "O campo $chave vale $valor<br/>";
        }

        foreach($c as $valor){
            echo "<td> $valor </td>";
        }


    ?>
        </table>
    </pre>
</div>
</body>
</html>
 