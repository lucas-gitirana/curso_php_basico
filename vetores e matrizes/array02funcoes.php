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
        $n = array(1,2,3,4,5,6);
        foreach($n as $valor){
            echo "$valor ";
        }
        echo "<br/>";
    ?>
    <pre>
        <?php
            // print_r - serve para qualquer objeto do programa
            $v = array("A", "J", "l", "f");
            print_r($v);

            // var_dump - mostra o tipo e qtd dos elementos também
            var_dump($v);

            // count
            echo "O vetor tem ". count($v). " elementos <br/>";

            // array_push() - adiciona elemento no final
            array_push($v,7);
            print_r($v);

            // array_pop() - retira último elemento
            array_pop($v);
            print_r($v);

            // array_unshift - adiciona elemento no início
            array_unshift($v,7);
            print_r($v);

            // array_shift - elimina primeiro elemento
            array_shift($v);
            print_r($v);

            // COLOCANDO VETOR EM ORDEM
            // sort() - crescente
            // rsort() - decrescente
            // asort() ou arsort()- troca a ordem dos índices junto com os valores
            // ksort() ou krsort() - ordena as chaves(índices)
            $v1 = array("A", "J", "M", "X", "K");
            print_r($v1);

            sort($v1);
            rsort($v1);

            asort($v1);
            arsort($v1);

            ksort($v1);
            krsort($v1);

            print_r($v1);
        ?>
    </pre>
</div>
</body>
</html>
 