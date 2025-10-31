<?php
    require_once 'funciones.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1 = $_POST['num'];
        $r = convertirBinario($n1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Binario</title>
</head>
<body>
    <h1>Relación 3 - Funciones</h1>
    <h2>Ejercicio 7 - Convertir en binario</h2>
    <form action="" method="post">
        <label for="num">
            Número:
            <input type="text" name="num" id="num"/>
        </label>
        <input type="submit" value="Convertir">
    </form>

    <p><?php if(isset($r)) echo "Resultado = $r" ?></p>
</body>
</html>