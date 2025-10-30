<?php
    require_once 'funciones.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $r = sumar($n1, $n2);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">
            Número 1:
            <input type="text" name="num1" id="num1"/>
        </label>
        <label for="num2">
            Número 2:
            <input type="text" name="num2" id="num2"/>
        </label>
        <input type="submit" value="Sumar">
    </form>

    <p><?php if(isset($r)) echo "Resultado = $r" ?></p>
</body>
</html>