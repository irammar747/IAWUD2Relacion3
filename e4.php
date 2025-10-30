<?php
    require_once 'funciones.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tabla = $_POST['tabla'];
        $r = tablaMultiplicar($tabla);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="" method="post">
        <label for="num1">
            Tabla: 
            <input type="text" name="tabla" id="tabla"/>
        </label>
        <input type="submit" value="Mostrar Tabla">
    </form>

    <?php if(isset($r)) echo $r ?>
</body>
</html>