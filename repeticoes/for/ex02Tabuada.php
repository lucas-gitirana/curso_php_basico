<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Personalizar texto</title>
</head>
<body>
<div>
    <form method="get" action="ex02.php">
        <label for="val">Tabuada: </label>
        <select name="val" id="val">
            <?php
                for($i=1;$i<=10;$i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</div>
</body>
</html>
