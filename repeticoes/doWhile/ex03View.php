<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Personalizar texto</title>
</head>
<body>
<div>
    <form method="get" action="ex03.php">
        <label for="val">Tabuada: </label>
        <select name="val" id="val">
            <?php
                $x = 1;
                do{
                    echo "<option value='$x'>$x</option>";
                $x++;
                }while($x <= 10)
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>
</body>
</html>
